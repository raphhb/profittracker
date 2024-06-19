<?php 


class SalesModel
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

    // count daily sales
    public function countDailySales()
    {
        $query = "
            SELECT 
                COUNT(*) AS SaleCount
            FROM 
                ProductSale ps
            JOIN 
                Product p ON p.ProductID = ps.ProductID
            JOIN 
                Category c ON ps.CategoryID = c.CategoryID
            WHERE
                ps.SaleDate::DATE = CURRENT_DATE;
        ";
        
        $result = $this->query($query);
        // Assuming $this->query() is your method to execute the SQL query
        return $result[0]->salecount; 
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

    // count weekly sales
    public function countWeeklySales()
    {
        $query = "
            SELECT 
                COUNT(*) AS SaleCount
            FROM 
                ProductSale ps
            JOIN 
                Product p ON p.ProductID = ps.ProductID
            JOIN 
                Category c ON ps.CategoryID = c.CategoryID
            WHERE 
                ps.SaleDate >= DATE_TRUNC('week', CURRENT_DATE)
                AND ps.SaleDate < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week';
        ";
        
        $result = $this->query($query);
        // Assuming $this->query() is your method to execute the SQL query
        return $result[0]->salecount; 
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

    // count monthly sales
    public function countMonthlySales()
    {
        $query = "
            SELECT 
                COUNT(*) AS SaleCount
            FROM 
                ProductSale ps
            JOIN 
                Product p ON p.ProductID = ps.ProductID
            JOIN 
                Category c ON ps.CategoryID = c.CategoryID
            WHERE 
                ps.SaleDate >= DATE_TRUNC('month', CURRENT_DATE)
                AND ps.SaleDate < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month';
        ";
        
        $result = $this->query($query);
        // Assuming $this->query() is your method to execute the SQL query
        return $result[0]->salecount; 
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

    public function checkQuantity($productId)
    {   
        $query = "SELECT Quantity FROM Product WHERE ProductID = :productId";
        $result = $this->query($query, ['productId' => $productId]);
        
        // Adjust based on your query method's return format
        return $result[0]->quantity; 
    }

    public function saveSales($salesData)
    {
        // Extract the product ID from sales data
        $productId = $salesData['productID'];
        
        // Check the available quantity
        $availableQuantity = $this->checkQuantity($productId);

        // Ensure enough quantity is available before proceeding with the sale
        if ($availableQuantity < $salesData['quantity']) {
            throw new Exception("Insufficient quantity for product ID $productId");
        }
        
        $sql = "INSERT INTO ProductSale (UserID, CategoryID, ProductID, Quantity, SalePrice) 
                VALUES (:userID, :categoryID, :productID, :quantity, :salePrice)";

        $this->query($sql, [
            'userID' => $salesData['userID'],
            'categoryID' => $salesData['categoryID'],
            'productID' => $salesData['productID'],
            'quantity' => $salesData['quantity'],
            'salePrice' => $salesData['salePrice']
        ]);

        return true;
    }

    public function saveMerchSales($merchsalesData)
    {

        // Extract the product ID from sales data
        $productId = $merchsalesData['productID'];
        
        // Check the available quantity
        $availableQuantity = $this->checkQuantity($productId);

        // Ensure enough quantity is available before proceeding with the sale
        if ($availableQuantity < $merchsalesData['quantity']) {
            throw new Exception("Insufficient quantity for product ID $productId");
        }

        
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
                    'Week' || (
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
                SELECT 
                    TO_CHAR(CURRENT_DATE, 'DD') AS date,
                    TO_CHAR(CURRENT_DATE, 'Day') AS day,
                    'Week' || (
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
        
        //get monthly profit
        public function getMonthlyProfit()
        {
            $query = "
                SELECT 
                    TO_CHAR(CURRENT_DATE, 'DD') AS date,
                    TO_CHAR(CURRENT_DATE, 'Day') AS day,
                    'Week' || (
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
            return $this->query($query);
        }

        public function getLatestSales()
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
                    ps.SaleDate DESC
                LIMIT 4;
                ";
            return $this->query($query);
        }

        //get monthly sale data
        public function getMonthlySaleData()
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
            return $result[0]->total_sales; // Adjust based on your query method's return format
        }

        public function deleteSale($saleId){
            $query = "
            DELETE FROM PRODUCTSALE WHERE SALEID = $saleId;
            ";

            return $this->query($query);
        }
}

