<?php

class ExpensesModel
{
    use Model;

    protected $table = 'ExpenseLog'; // Updated table name to singular form

    public function getAllExpenses()
    {
        $query = "SELECT 
                el.ExpenseID,
                el.UserID,
                ec.Name AS CategoryName,
                el.Description,
                el.Amount,
                el.TransactionDate,
                c.ProductCategory AS ProductCategory,  -- Updated column name to match SQL schema
                pe.BrandName,
                pe.Name AS ProductName,
                pe.Size,
                pe.Color,
                pe.Quantity,
                pe.UnitPrice,
                pe.ProductImageURL
            FROM 
                ExpenseLog el
            JOIN 
                ExpenseCategory ec ON el.ExpenseCategoryID = ec.ExpenseCategoryID
            LEFT JOIN 
                ProductExpense pe ON el.ExpenseID = pe.ExpenseID
            LEFT JOIN 
                Category c ON pe.CategoryID = c.CategoryID;";

        return $this->query($query);
    }

    public function getAllProductExpenses()
    {
        $query = "SELECT * FROM ProductExpense"; // Updated table name to singular form
        return $this->query($query);
    }

    public function saveExpenseLog($data)
    {
        $sql = "INSERT INTO ExpenseLog (ExpenseCategoryID, UserID, Description, Amount, TransactionDate) VALUES (:main_category, '1', :description, :amount, NOW())";  // Updated column name and added TransactionDate
        
        $this->query($sql, [
            ':main_category' => $data['main_category'],
            ':description' => $data['description'],
            ':amount' => $data['amount']
        ]);

        return true;
    }

    public function getExpenseID()
    {
        $query = 
        "SELECT ExpenseID
            FROM ExpenseLog
            WHERE ExpenseCategoryID = (
                SELECT ExpenseCategoryID
                FROM ExpenseCategory
                WHERE Name = 'PRODUCT'
            )
            ORDER BY ExpenseID DESC
            LIMIT 1;
        ";

        $result = $this->query($query); // This method executes the query and returns the result
        return $result[0]->expenseid;  // Updated column name to match SQL schema

    }  

    public function saveExpense($data)
    {
        $expenseId = $this->getExpenseID();

        $sql = "INSERT INTO ProductExpense (ExpenseID, CategoryID, Size, Color, BrandName, Name, Quantity, UnitPrice, ProductImageURL) VALUES (:expenseID, :product_subcategory, :size, :color, :brand, :name, :qty, :unitPrice, :productImg)";

        $this->query($sql, [
            ':expenseID' => $expenseId,
            ':product_subcategory' => $data['product_subcategory'],
            ':size' => $data['size'],
            ':color' => $data['color'],
            ':brand' => $data['brand'],
            ':name' => $data['name'],
            ':qty' => $data['qty'],
            ':unitPrice' => $data['unitPrice'],
            ':productImg' => $data['productImg']
        ]);

        return true;
    }

    public function getAllExpensesPercentage()
    {
        $query = "
            WITH TotalExpenses AS (
                SELECT 
                    SUM(el.Amount) AS TotalAmount
                FROM 
                    ExpenseLog el
                WHERE 
                    DATE_TRUNC('month', el.TransactionDate) = DATE_TRUNC('month', TIMESTAMP '2024-06-01')
            )
            SELECT 
                ec.Name AS ExpenseCategory,
                COALESCE(SUM(el.Amount), 0) AS TotalExpense,
                CASE 
                    WHEN te.TotalAmount > 0 THEN ROUND(COALESCE(SUM(el.Amount), 0) / te.TotalAmount * 100, 2)
                    ELSE 0
                END AS ExpensePercentage,
                TO_CHAR(TIMESTAMP '2024-06-01', 'Month') AS Month
            FROM 
                ExpenseCategory ec
            LEFT JOIN 
                ExpenseLog el ON ec.ExpenseCategoryID = el.ExpenseCategoryID
                AND DATE_TRUNC('month', el.TransactionDate) = DATE_TRUNC('month', TIMESTAMP '2024-06-01')
            CROSS JOIN 
                TotalExpenses te
            GROUP BY 
                ec.Name, te.TotalAmount
            ORDER BY 
                ec.Name;
            "
        ;

        return $this->query($query);
    }

    // product expense only
    public function getProductExpense()
    {
        $query = "
            WITH TotalExpenses AS (
                SELECT 
                    SUM(el.Amount) AS TotalAmount
                FROM 
                    ExpenseLog el
                WHERE 
                    DATE_TRUNC('month', el.TransactionDate) = DATE_TRUNC('month', TIMESTAMP '2024-06-01')
            )
            SELECT 
                ec.Name AS ExpenseCategory,
                COALESCE(SUM(el.Amount), 0) AS TotalExpense,
                CASE 
                    WHEN te.TotalAmount > 0 THEN ROUND(COALESCE(SUM(el.Amount), 0) / te.TotalAmount * 100, 2)
                    ELSE 0
                END AS ExpensePercentage,
                TO_CHAR(TIMESTAMP '2024-06-01', 'Month') AS Month
            FROM 
                ExpenseCategory ec
            LEFT JOIN 
                ExpenseLog el ON ec.ExpenseCategoryID = el.ExpenseCategoryID
                AND DATE_TRUNC('month', el.TransactionDate) = DATE_TRUNC('month', TIMESTAMP '2024-06-01')
            CROSS JOIN 
                TotalExpenses te
            GROUP BY 
                ec.Name, te.TotalAmount
            ORDER BY 
                ec.Name;
            "
        ;

        $result = $this->query($query); // This method executes the query and returns the result
        return $result[2]->totalexpense; // Adjust based on your query method's return format
    }

    
    public function getAllExpenseLogs()
    {
        $query = "SELECT * FROM expenselog";
        return $this->query($query);
    }
    

	// JOINED
    public function getAllExpenseLogsJoined()
    {
        $query = "
            SELECT 
                e.EXPENSEID, 
                c.NAME AS EXPENSE_CATEGORY_NAME, 
                e.TRANSACTIONDATE, 
                e.AMOUNT, 
                e.DESCRIPTION
            FROM 
                EXPENSELOG e
            JOIN 
                EXPENSECATEGORY c 
            ON 
                e.EXPENSECATEGORYID = c.EXPENSECATEGORYID;
            ORDER BY
                e.TRANSACTIONDATE; 
        ";
        return $this->query($query);
    }

    //get daily expense
    public function getDailyExpenses()
    {
        $query = "
            SELECT 
                el.ExpenseID, 
                ec.Name AS CategoryName, 
                el.TransactionDate, 
                el.Amount, 
                el.Description,
                c.productCategory,
                pe.BrandName,
                pe.Name AS ProductName,
                pe.Size,
                pe.Color,
                pe.Quantity,
                pe.UnitPrice,
                pe.ProductImageURL
            FROM 
                ExpenseLog el
            JOIN 
                ExpenseCategory ec ON el.ExpenseCategoryID = ec.ExpenseCategoryID
            LEFT JOIN 
                ProductExpense pe ON el.ExpenseID = pe.ExpenseID
            LEFT JOIN 
                Category c ON pe.CategoryID = c.CategoryID
            WHERE 
                el.TransactionDate::DATE = CURRENT_DATE;
        ";
    
        return $this->query($query);
    }

    //get daily expense count
    public function getDailyExpensesCount()
    {
        $query = "
            SELECT 
                COUNT(*) AS ExpenseCount
            FROM 
                ExpenseLog el
            JOIN 
                ExpenseCategory ec ON el.ExpenseCategoryID = ec.ExpenseCategoryID
            LEFT JOIN 
                ProductExpense pe ON el.ExpenseID = pe.ExpenseID
            LEFT JOIN 
                Category c ON pe.CategoryID = c.CategoryID
            WHERE 
                el.TransactionDate::DATE = CURRENT_DATE;

        ";
        
        $result = $this->query($query);
        // Assuming $this->query() is your method to execute the SQL query
        return $result[0]->expensecount; 
    }
	
    //get weekly expense
    public function getWeeklyExpenses()
    {
        $query = "
            SELECT 
                e.EXPENSEID, 
                ec.NAME AS categoryname, 
                e.TRANSACTIONDATE, 
                e.AMOUNT, 
                e.DESCRIPTION,
                c.ProductCategory,
                pe.BrandName,
                pe.Name AS ProductName,
                pe.Size,
                pe.Color,
                pe.Quantity,
                pe.UnitPrice,
                pe.ProductImageURL
            FROM 
                EXPENSELOG e
            JOIN 
                EXPENSECATEGORY ec 
            ON 
                e.EXPENSECATEGORYID = ec.EXPENSECATEGORYID
            LEFT JOIN 
                ProductExpense pe 
            ON 
                e.EXPENSEID = pe.EXPENSEID
            LEFT JOIN 
                Category c 
            ON 
                pe.CategoryID = c.CategoryID
            WHERE 
                e.TRANSACTIONDATE >= DATE_TRUNC('week', CURRENT_DATE)
                AND e.TRANSACTIONDATE < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week'
            ORDER BY 
                e.TRANSACTIONDATE;
        ";
        return $this->query($query);
    }

    //get weekly expense count

    public function getWeeklyExpensesCount()
    {
        $query = "
            SELECT 
                COUNT(*) AS ExpenseCount
            FROM 
                EXPENSELOG e
            JOIN 
                EXPENSECATEGORY ec ON e.EXPENSECATEGORYID = ec.EXPENSECATEGORYID
            LEFT JOIN 
                ProductExpense pe ON e.EXPENSEID = pe.EXPENSEID
            LEFT JOIN 
                Category c ON pe.CategoryID = c.CategoryID
            WHERE 
                e.TRANSACTIONDATE >= DATE_TRUNC('week', CURRENT_DATE)
                AND e.TRANSACTIONDATE < DATE_TRUNC('week', CURRENT_DATE) + INTERVAL '1 week';
        ";
        
        $result = $this->query($query);
        // Assuming $this->query() is your method to execute the SQL query
        return $result[0]->expensecount; 
    }

    //get monthly expense
    public function getMonthlyExpenses()
    {
        $query = "
            SELECT 
                e.EXPENSEID, 
                ec.NAME AS categoryname, 
                e.TRANSACTIONDATE, 
                e.AMOUNT, 
                e.DESCRIPTION,
                c.ProductCategory,
                pe.BrandName,
                pe.Name AS ProductName,
                pe.Size,
                pe.Color,
                pe.Quantity,
                pe.UnitPrice,
                pe.ProductImageURL
            FROM 
                EXPENSELOG e
            JOIN 
                EXPENSECATEGORY ec 
            ON 
                e.EXPENSECATEGORYID = ec.EXPENSECATEGORYID
            LEFT JOIN 
                ProductExpense pe 
            ON 
                e.EXPENSEID = pe.EXPENSEID
            LEFT JOIN 
                Category c 
            ON 
                pe.CategoryID = c.CategoryID
            WHERE 
                e.TRANSACTIONDATE >= DATE_TRUNC('month', CURRENT_DATE)
                AND e.TRANSACTIONDATE < DATE_TRUNC('month', CURRENT_DATE) + INTERVAL '1 month'
            ORDER BY
                e.TRANSACTIONDATE; 
        ";
        return $this->query($query);
    }

    public function getExpensesByDate($date)
    {
        $query = "
            SELECT 
                e.EXPENSEID, 
                c.NAME AS categoryname, 
                e.TRANSACTIONDATE, 
                e.AMOUNT, 
                e.DESCRIPTION
            FROM 
                EXPENSELOG e
            JOIN 
                EXPENSECATEGORY c 
            ON 
                e.EXPENSECATEGORYID = c.EXPENSECATEGORYID
            WHERE
                e.TRANSACTIONDATE::DATE = '$date';
        ";
        return $this->query($query);
    }

    public function getLatestExpenses()
    {
        $query = "        
            SELECT 
                el.ExpenseID,
                el.UserID,
                ec.Name AS CategoryName,
                el.Description,
                el.Amount,
                el.TransactionDate,
                c.ProductCategory AS ProductCategory,  -- Updated column name to match SQL schema
                pe.BrandName,
                pe.Name AS ProductName,
                pe.Size,
                pe.Color,
                pe.Quantity,
                pe.UnitPrice,
                pe.ProductImageURL
            FROM 
                ExpenseLog el
            JOIN 
                ExpenseCategory ec ON el.ExpenseCategoryID = ec.ExpenseCategoryID
            LEFT JOIN 
                ProductExpense pe ON el.ExpenseID = pe.ExpenseID
            LEFT JOIN 
                Category c ON pe.CategoryID = c.CategoryID
            ORDER BY 
                el.TransactionDate DESC
            LIMIT 4;";

        return $this->query($query);
    }

        //get monthly expenses data
        public function getMonthlyExpensesData()
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
            return $result[0]->total_expenses; // Adjust based on your query method's return format
        }

        // get current month
        public function getCurrentMonth()
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
            return $result[0]->month; // Adjust based on your query method's return format
        }

        //get previous month's expenses data
        public function getPreviousMonthExpensesData()
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
            return $result[0]->total_expenses; // Adjust based on your query method's return format
        }
    
    public function deleteExpense($expenseId)
    {
        $query = "
            DELETE FROM EXPENSELOG WHERE EXPENSEID = $expenseId;
        ";
        return $this->query($query);
    }
}