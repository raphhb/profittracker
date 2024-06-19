<?php 


class ProfitModel
{
	
	use Model;

	protected $table = 'productsale';

    protected $allowedColumns = [

	];

    public function getAllProductSales()
    {
        $query = "SELECT * FROM productsale";
        return $this->query($query);
    }

    //JOINES
    public function getAllProductSalesJoined()
    {
        $query = "
            SELECT 
                ps.SALEID,
                c.PRODUCTCATEGORY, 
                p.NAME as PRODUCT_NAME,
                ps.QUANTITY,
                ps.SALEPRICE,
                ps.SALEDATE,
                ps.AMOUNT, 
                ps.DESCRIPTION
            FROM 
                PRODUCTSALE ps
            JOIN 
                PRODUCT p
            ON 
                p.PRODUCTID = ps.PRODUCTID
            JOIN 
                CATEGORY c 
            ON 
                p.CATEGORYID = c.CATEGORYID;
        ";
        return $this->query($query);
    }

    //get daily sales
    public function getDailySales()
    {
        $query = "
            SELECT 
                ps.SaleID,
                c.ProductCategory AS CategoryName,
                p.ProductID, 
                p.Name AS ProductName,
                ps.Quantity,
                ps.SalePrice,
                ps.SaleDate,
                ps.Amount, 
                ps.Description
            FROM 
                ProductSale ps
            JOIN 
                Product p ON p.ProductID = ps.ProductID
            JOIN 
                Category c ON ps.CategoryID = c.CategoryID
            WHERE
                ps.SaleDate::DATE = CURRENT_DATE
            ORDER BY
                ps.SaleDate;
        ";
    
        // Assuming $this->query() is your method to execute the SQL query
        return $this->query($query);
    }
    
    //get weekly sales
    public function getWeeklySales()
    {
        $query = "
            SELECT 
                ps.SaleID,
                c.ProductCategory AS CategoryName,
                p.ProductID, 
                p.Name AS ProductName,
                ps.Quantity,
                ps.SalePrice,
                ps.SaleDate,
                ps.Amount, 
                ps.Description
            FROM 
                ProductSale ps
            JOIN 
                Product p ON p.ProductID = ps.ProductID
            JOIN 
                Category c ON ps.CategoryID = c.CategoryID
            WHERE 
                ps.SaleDate >= DATE_TRUNC('week', CURRENT_DATE)
                AND ps.SaleDate < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week'
            ORDER BY 
                ps.SaleDate;
        ";
    
        return $this->query($query);
    }
    
    //get monthly sales
    public function getMonthlySales()
    {
        $query = "
            SELECT 
                ps.SaleID,
                ps.CategoryID,
                c.ProductCategory AS CategoryName, 
                p.ProductID,
                p.Name AS ProductName,
                ps.Quantity,
                ps.SalePrice,
                ps.SaleDate,
                ps.Amount, 
                ps.Description
            FROM 
                ProductSale ps
            JOIN 
                Product p ON p.ProductID = ps.ProductID
            JOIN 
                Category c ON ps.CategoryID = c.CategoryID
            WHERE 
                ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE)
                AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month'
            ORDER BY 
                ps.SaleDate;
        ";
        return $this->query($query);
    }

    // Get all sales
    public function getAllSales()
    {
        $query = "
            SELECT 
                ps.SaleID,
                ps.CategoryID,
                c.ProductCategory AS CategoryName, 
                p.ProductID,
                p.Name AS ProductName,
                ps.Quantity,
                ps.SalePrice,
                ps.SaleDate,
                ps.Amount, 
                ps.Description
            FROM 
                ProductSale ps
            JOIN 
                Product p ON p.ProductID = ps.ProductID
            JOIN 
                Category c ON ps.CategoryID = c.CategoryID
            ORDER BY 
                ps.SaleDate;
        ";
        return $this->query($query);
    }

    public function getSalesByDate($date)
    {
        $query = "
            SELECT 
                ps.SALEID,
                c.PRODUCTCATEGORY, 
                p.NAME as PRODUCT_NAME,
                ps.QUANTITY,
                ps.SALEPRICE,
                ps.SALEDATE,
                ps.AMOUNT, 
                ps.DESCRIPTION
            FROM 
                PRODUCTSALE ps
            JOIN 
                PRODUCT p
            ON 
                p.PRODUCTID = ps.PRODUCTID
            JOIN 
                CATEGORY c 
            ON 
                p.CATEGORYID = c.CATEGORYID
            WHERE
                ps.SALEDATE::DATE = '$date' ;
        ";
        return $this->query($query);
    }

    public function saveSales($salesData)
    {

        $sql = "INSERT INTO ProductSale (UserID, CategoryID, ProductID, Quantity, SalePrice) VALUES (:userID, :categoryID, :productID, :quantity, :salePrice)";

        $this->query($sql, [
            'userID' => $salesData['userID'],
            'productID' => $salesData['productID'],
            'categoryID' => $salesData['categoryID'],
            'quantity' => $salesData['quantity'],
            'salePrice' => $salesData['salePrice']
        ]);

        return true;
    }

    public function saveMerchSales($merchsalesData)
    {

        $sql = "INSERT INTO ProductSale (UserID, CategoryID, ProductID, Quantity, SalePrice) VALUES (:userID, :merchCategoryID, :productID, :merchQuantity, :merchSalePrice)";

        $this->query($sql, [
            'userID' => $merchsalesData['userID'],
            'productID' => $merchsalesData['productID'],
            'merchCategoryID' => $merchsalesData['merchCategoryID'],
            'merchQuantity' => $merchsalesData['merchQuantity'],
            'merchSalePrice' => $merchsalesData['merchSalePrice']
        ]);

        return true;
    }

        //OVERALL PROFIT
        public function getOverallProfit()
        {
            $query = "
                SELECT 
                    TO_CHAR(CURRENT_DATE, 'DD') AS date,
                    TO_CHAR(CURRENT_DATE, 'Day') AS day,
                    'Week ' || (
                        EXTRACT(WEEK FROM CURRENT_DATE) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE)) + 1
                    ) AS week,
                    TO_CHAR(CURRENT_DATE, 'Month') AS month,
                    TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps) AS total_sales,
                    
                    (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el) AS total_expenses,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps)
                    - (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el) AS profit;
            ";
            return $this->query($query);
        }
    
    //GETTING ALL PROFIT BY MONTH
    public function getAllProfit()
    {
        $query = "
            WITH min_date AS (
                SELECT LEAST(
                    (SELECT MIN(DATE_TRUNC('day', SaleDate)) FROM PRODUCTSALE),
                    (SELECT MIN(DATE_TRUNC('day', TransactionDate)) FROM EXPENSELOG)
                ) AS start_date
            ),
            date_series AS (
                SELECT generate_series(
                    (SELECT start_date FROM min_date),
                    CURRENT_DATE,
                    '1 day'::interval
                ) AS date
            )
            SELECT 
                TO_CHAR(d.date, 'DD') AS date,
                TO_CHAR(d.date, 'Day') AS day,
                'Week ' || (
                    EXTRACT(WEEK FROM d.date) - EXTRACT(WEEK FROM DATE_TRUNC('month', d.date)) + 1
                ) AS week,
                TO_CHAR(d.date, 'Month') AS month,
                TO_CHAR(d.date, 'YYYY') AS year,

                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) AS total_sales,

                COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS total_expenses,

                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) 
                - COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS profit
            FROM date_series d
            ORDER BY d.date DESC;
        ";
        return $this->query($query);
    }

    //get daily profit
    public function getDailyProfit()
    {
        $query = "
            SELECT 
                TO_CHAR(CURRENT_DATE, 'DD') AS date,
                TO_CHAR(CURRENT_DATE, 'Day') AS day,
                'Week ' || (
                    EXTRACT(WEEK FROM CURRENT_DATE) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE)) + 1
                ) AS week,
                TO_CHAR(CURRENT_DATE, 'Month') AS month,
                TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                
                (SELECT COALESCE(SUM(ps.Amount), 0)
                FROM PRODUCTSALE ps
                WHERE ps.SaleDate::DATE = CURRENT_DATE) AS total_sales,
            
                (SELECT COALESCE(SUM(el.Amount), 0)
                FROM EXPENSELOG el
                WHERE el.TransactionDate::DATE = CURRENT_DATE) AS total_expenses,
                
                (SELECT COALESCE(SUM(ps.Amount), 0)
                FROM PRODUCTSALE ps
                WHERE ps.SaleDate::DATE = CURRENT_DATE)
                - (SELECT COALESCE(SUM(el.Amount), 0)
                FROM EXPENSELOG el
                WHERE el.TransactionDate::DATE = CURRENT_DATE) AS profit; 
        ";
        return $this->query($query);
    }
    
    //get weekly profit
    public function getWeeklyProfit()
    {
        $query = "
            WITH date_series AS (
                SELECT generate_series(
                    DATE_TRUNC('week', CURRENT_DATE), 
                    DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '6 days', 
                    '1 day'::interval
                ) AS date
            )
            SELECT 
                TO_CHAR(d.date, 'DD') AS date,
                TO_CHAR(d.date, 'Day') AS day,
                'Week ' || (
                    EXTRACT(WEEK FROM CURRENT_DATE) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE)) + 1
                ) AS week,
                TO_CHAR(d.date, 'Month') AS month,
                TO_CHAR(d.date, 'YYYY') AS year,
                
                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) AS total_sales,
                        
                COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS total_expenses,
                        
                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) 
                - COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS profit
            FROM date_series d
            ORDER BY d.date;

        ";
        return $this->query($query);
    }

    //get 4 latest data
    public function getFourLatestData()
    {
        $query = "
            WITH date_series AS (
                SELECT generate_series(
                    CURRENT_DATE - INTERVAL '3 day', 
                    CURRENT_DATE,
                    '1 day'::interval
                ) AS date
            )
            SELECT 
                TO_CHAR(d.date, 'DD') AS date,
                TO_CHAR(d.date, 'Day') AS day,
                'Week ' || (
                    EXTRACT(WEEK FROM d.date) - EXTRACT(WEEK FROM DATE_TRUNC('month', d.date)) + 1
                ) AS week,
                TO_CHAR(d.date, 'Month') AS month,
                TO_CHAR(d.date, 'YYYY') AS year,
                
                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) AS total_sales,
                        
                COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS total_expenses,
                        
                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) 
                - COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS profit
            FROM date_series d
            ORDER BY d.date;
        ";
        return $this->query($query);
    }

    
    //get monthly profit
    public function getMonthlyProfit()
    {
        $query = "
            WITH min_date AS (
                SELECT LEAST(
                    (SELECT MIN(DATE_TRUNC('day', SaleDate)) FROM PRODUCTSALE WHERE DATE_TRUNC('month', SaleDate) = DATE_TRUNC('month', CURRENT_DATE)),
                    (SELECT MIN(DATE_TRUNC('day', TransactionDate)) FROM EXPENSELOG WHERE DATE_TRUNC('month', TransactionDate) = DATE_TRUNC('month', CURRENT_DATE))
                ) AS start_date
            ),
            date_series AS (
                SELECT generate_series(
                    (SELECT start_date FROM min_date),
                    CURRENT_DATE,
                    '1 day'::interval
                ) AS date
            )
            SELECT 
                TO_CHAR(d.date, 'DD') AS date,
                TO_CHAR(d.date, 'Day') AS day,
                'Week ' || (
                    EXTRACT(WEEK FROM d.date) - EXTRACT(WEEK FROM DATE_TRUNC('month', d.date)) + 1
                ) AS week,
                TO_CHAR(d.date, 'Month') AS month,
                TO_CHAR(d.date, 'YYYY') AS year,
                
                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) AS total_sales,
                        
                COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS total_expenses,
                        
                COALESCE((SELECT SUM(ps.Amount) 
                        FROM PRODUCTSALE ps 
                        WHERE DATE_TRUNC('day', ps.SaleDate) = d.date), 0) 
                - COALESCE((SELECT SUM(el.Amount) 
                        FROM EXPENSELOG el 
                        WHERE DATE_TRUNC('day', el.TransactionDate) = d.date), 0) AS profit
            FROM date_series d
            ORDER BY d.date;
        ";
        return $this->query($query);
    }

        //GETTING ALL PROFIT BY MONTH data
        public function getAllProfitData()
        {
            $query = "
                WITH min_date AS (
                    SELECT LEAST(
                        (SELECT MIN(DATE_TRUNC('month', SaleDate)) FROM PRODUCTSALE),
                        (SELECT MIN(DATE_TRUNC('month', transactiondate)) FROM EXPENSELOG)
                    ) AS date
                ),
                date_series AS (
                    SELECT 
                        generate_series(
                            (SELECT date FROM min_date),
                            DATE_TRUNC('month', CURRENT_DATE),
                            '1 month'::interval
                        ) AS date
                )
                SELECT 
                    TO_CHAR(d.date, 'Month') AS monthh,
                    TO_CHAR(d.date, 'YYYY') AS yearr,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE DATE_TRUNC('month', ps.SaleDate) = d.date) AS total_sales,
                    
                    (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE DATE_TRUNC('month', el.transactiondate) = d.date) AS total_expenses,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE DATE_TRUNC('month', ps.SaleDate) = d.date)
                    - (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE DATE_TRUNC('month', el.transactiondate) = d.date) AS profit
                FROM date_series d
                ORDER BY d.date; 
            ";
            return $this->query($query);
        }
    
        //get daily profit data
        public function getDailyProfitData()
        {
            $query = "
                SELECT 
                    TO_CHAR(CURRENT_DATE, 'DD') AS date,
                    TO_CHAR(CURRENT_DATE, 'Day') AS day,
                    'Week ' || (
                        EXTRACT(WEEK FROM CURRENT_DATE) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE)) + 1
                    ) AS week,
                    TO_CHAR(CURRENT_DATE, 'Month') AS month,
                    TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate::DATE = CURRENT_DATE) AS total_sales,
                
                    (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate::DATE = CURRENT_DATE) AS total_expenses,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate::DATE = CURRENT_DATE)
                    - (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate::DATE = CURRENT_DATE) AS profit; 
            ";
            return $this->query($query);
        }
        
        //get weekly profit data
        public function getWeeklyProfitData()
        {
            $query = "
                SELECT 
                    TO_CHAR(CURRENT_DATE, 'DD') AS date,
                    TO_CHAR(CURRENT_DATE, 'Day') AS day,
                    'Week ' || (
                        EXTRACT(WEEK FROM CURRENT_DATE) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE)) + 1
                    ) AS week,
                    TO_CHAR(CURRENT_DATE, 'Month') AS month,
                    TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('week', CURRENT_DATE)
                    AND ps.SaleDate < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week') AS total_sales,
                    
                    (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('week', CURRENT_DATE)
                    AND el.TransactionDate < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week') AS total_expenses,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('week', CURRENT_DATE)
                    AND ps.SaleDate < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week')
                    - (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('week', CURRENT_DATE)
                    AND el.TransactionDate < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week') AS profit;    
            ";
            return $this->query($query);
        }
        
        //get monthly profit data
        public function getMonthlyProfitData()
        {
            $query = "
                SELECT 
                    TO_CHAR(CURRENT_DATE, 'DD') AS date,
                    TO_CHAR(CURRENT_DATE, 'Day') AS day,
                    'Week ' || (
                        EXTRACT(WEEK FROM CURRENT_DATE) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE)) + 1
                    ) AS week,
                    TO_CHAR(CURRENT_DATE, 'Month') AS month,
                    TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month') AS total_sales,
                    
                    (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND el.TransactionDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month') AS total_expenses,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month')
                    - (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND el.TransactionDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month') AS profit;
            ";
            $result = $this->query($query); // This method executes the query and returns the result
            return $result[0]->profit; // Adjust based on your query method's return format
        }
        
        //get monthly profit data, not array rype returned
        public function getMonthlyProfitDataa()
        {
            $query = "
                SELECT 
                    TO_CHAR(CURRENT_DATE, 'DD') AS date,
                    TO_CHAR(CURRENT_DATE, 'Day') AS day,
                    'Week ' || (
                        EXTRACT(WEEK FROM CURRENT_DATE) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE)) + 1
                    ) AS week,
                    TO_CHAR(CURRENT_DATE, 'Month') AS month,
                    TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month') AS total_sales,
                    
                    (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND el.TransactionDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month') AS total_expenses,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month')
                    - (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('month', CURRENT_DATE)
                    AND el.TransactionDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month') AS profit;
            ";
            return $this->query($query); // Adjust based on your query method's return format
        }

        //get previous month's profit data
        public function getPreviousMonthProfitData()
        {
            $query = "
                SELECT 
                    TO_CHAR(CURRENT_DATE - INTERVAL '1 month', 'DD') AS date,
                    TO_CHAR(CURRENT_DATE - INTERVAL '1 month', 'Day') AS day,
                    'Week ' || (
                        EXTRACT(WEEK FROM (CURRENT_DATE - INTERVAL '1 month')) - EXTRACT(WEEK FROM DATE_TRUNC('month', CURRENT_DATE - INTERVAL '1 month')) + 1
                    ) AS week,
                    TO_CHAR(CURRENT_DATE - INTERVAL '1 month', 'Month') AS month,
                    TO_CHAR(CURRENT_DATE - INTERVAL '1 month', 'YYYY') AS year,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE - INTERVAL '1 month')
                    AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE)) AS total_sales,
                    
                    (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('month', CURRENT_DATE - INTERVAL '1 month')
                    AND el.TransactionDate < DATE_TRUNC('month', CURRENT_DATE)) AS total_expenses,
                    
                    (SELECT COALESCE(SUM(ps.Amount), 0)
                    FROM PRODUCTSALE ps
                    WHERE ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE - INTERVAL '1 month')
                    AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE))
                    - (SELECT COALESCE(SUM(el.Amount), 0)
                    FROM EXPENSELOG el
                    WHERE el.TransactionDate >= DATE_TRUNC('month', CURRENT_DATE - INTERVAL '1 month')
                    AND el.TransactionDate < DATE_TRUNC('month', CURRENT_DATE)) AS profit;
            ";
            $result = $this->query($query); // This method executes the query and returns the result
            return $result[0]->profit; // Adjust based on your query method's return format
        }

        

}

