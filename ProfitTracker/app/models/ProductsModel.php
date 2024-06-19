<?php

class ProductsModel
{
    use Model;

    protected $table = 'Product'; // Updated table name to singular form

    public function getProducts($categoryid)
    {   
        $query = "
        SELECT  
                p.ProductID, 
                p.saleprice,
                c.ProductCategory,
                p.BrandName, 
                p.Name, 
                p.Size, 
                p.Color, 
                p.Price, 
                p.Quantity, 
                p.ImageURL, 
                p.AddedDate  
        FROM Product p
        JOIN Category c ON p.CategoryID = c.CategoryID 
        WHERE p.CategoryID = $categoryid;";
        return $this->query($query);
    }

    public function getProductsByDate($category, $reportDate)
    {
        $productCategory = $category;
        $Date = $reportDate;
        
        $query = "
            SELECT 
                p.ProductID, 
                c.ProductCategory,
                p.BrandName, 
                p.Name, 
                p.Size, 
                p.Color, 
                p.Price, 
                p.Quantity, 
                p.ImageURL, 
                p.AddedDate  
            FROM Product p
            JOIN Category c ON p.CategoryID = c.CategoryID 
            WHERE c.CategoryID = $productCategory
                AND p.AddedDate BETWEEN '$Date 00:00:00' AND '$Date 23:59:59';";
    
        return $this->query($query);

    }

    public function productsCount()
    {
        $query = "SELECT COUNT(*) as count FROM Product"; // Updated table name to singular form
        $result = $this->query($query); // This method executes the query and returns the result
        return $result[0]->count; // Adjust based on your query method's return format
    }

    public function getProductsByCategory($categoryid)
    {   
        $query = "
            SELECT
                p.ProductID,
                c.ProductCategory AS Category,
                p.BrandName,
                p.Name AS ProductName,
                p.Size,
                p.Color,
                p.Price,
                p.Quantity,
                p.ImageURL,
                p.AddedDate
            FROM
                Product p
            JOIN
                Category c ON p.CategoryID = c.CategoryID
            WHERE
                p.CategoryID = $categoryid;";

        return $this->query($query);
    }

    public function getProductDetailsById($productId)
    {
        $query = "
            SELECT 
                p.ProductID,
                c.CategoryID,
                c.productcategory AS Category,
                p.BrandName,
                p.Name AS ProductName,
                p.Size,
                p.Color,
                p.Price,
                p.SalePrice,
                p.Quantity,
                p.ImageURL,
                p.AddedDate
            FROM 
                Product p
            JOIN 
                Category c ON p.CategoryID = c.CategoryID
            WHERE 
                p.ProductID = '$productId';";

        return $this->query($query);
    }

    public function UpdateSalePrice($salePrice, $productId)
    {
        $query = "
            UPDATE PRODUCT
            SET SALEPRICE = '$salePrice'
            WHERE PRODUCTID = '$productId';";

        return $this->query($query);
    }

    // MonthlyTopSellingProduct
    public function getMonthlyTopSellingProduct()
    {
        $query = "
            SELECT 
                TO_CHAR(CURRENT_DATE, 'Month') AS month,
                TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                P.ProductID,
                P.Name AS ProductName,
                P.BrandName,
                C.ProductCategory AS Category,
                P.ImageURL AS ProductImageURL,
                COALESCE(SUM(PS.Amount), 0) AS TotalProductSale,
                COALESCE(SUM(PS.Quantity), 0) AS QuantitySold
            FROM
                Product P
                LEFT JOIN ProductSale PS ON P.ProductID = PS.ProductID 
                    AND EXTRACT(MONTH FROM PS.SaleDate) = EXTRACT(MONTH FROM CURRENT_DATE)
                    AND EXTRACT(YEAR FROM PS.SaleDate) = EXTRACT(YEAR FROM CURRENT_DATE)
                LEFT JOIN Category C ON P.CategoryID = C.CategoryID
            GROUP BY
                P.ProductID, P.Name, P.BrandName, C.ProductCategory, P.ImageURL
            ORDER BY 
                TotalProductSale DESC
            LIMIT 1;
        ";
        $result = $this->query($query);
        return $result[0];
    }

    // MonthlyTopSellingProducts 5
    public function getMonthlyTopSellingProducts()
    {
        $query = "
            SELECT 
                TO_CHAR(CURRENT_DATE, 'Month') AS month,
                TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                P.ProductID,
                P.Name AS ProductName,
                P.BrandName,
                C.ProductCategory AS CategoryName,
                P.ImageURL AS ProductImageURL,
                COALESCE(SUM(PS.Amount), 0) AS TotalProductSale,
                COALESCE(SUM(PS.Quantity), 0) AS QuantitySold
            FROM
                Product P
                LEFT JOIN ProductSale PS ON P.ProductID = PS.ProductID 
                    AND EXTRACT(MONTH FROM PS.SaleDate) = EXTRACT(MONTH FROM CURRENT_DATE)
                    AND EXTRACT(YEAR FROM PS.SaleDate) = EXTRACT(YEAR FROM CURRENT_DATE)
                LEFT JOIN Category C ON P.CategoryID = C.CategoryID
            GROUP BY
                P.ProductID, P.Name, P.BrandName, C.ProductCategory, P.ImageURL
            ORDER BY 
                TotalProductSale DESC
            LIMIT 5;

        ";
        return $this->query($query);
    }
	
    // MonthlyLowSellingProduct
    public function getMonthlyLowSellingProduct()
    {
        $query = "
            SELECT 
                TO_CHAR(CURRENT_DATE, 'Month') AS month,
                TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                P.ProductID,
                P.Name AS ProductName,
                P.BrandName,
                C.ProductCategory AS CategoryName,
                P.ImageURL AS ProductImageURL,
                COALESCE(SUM(PS.Amount), 0) AS TotalProductSale,
                COALESCE(SUM(PS.Quantity), 0) AS QuantitySold
            FROM
                Product P
                LEFT JOIN ProductSale PS ON P.ProductID = PS.ProductID 
                    AND EXTRACT(MONTH FROM PS.SaleDate) = EXTRACT(MONTH FROM CURRENT_DATE)
                    AND EXTRACT(YEAR FROM PS.SaleDate) = EXTRACT(YEAR FROM CURRENT_DATE)
                LEFT JOIN Category C ON P.CategoryID = C.CategoryID
            GROUP BY
                P.ProductID, P.Name, P.BrandName, C.ProductCategory, P.ImageURL
            ORDER BY 
                TotalProductSale ASC
            LIMIT 1;
        ";
        return $this->query($query);
    }
    
    // MonthlyLowSellingProducts 5
    public function getMonthlyLowSellingProducts()
    {
        $query = "
            SELECT 
                TO_CHAR(CURRENT_DATE, 'Month') AS month,
                TO_CHAR(CURRENT_DATE, 'YYYY') AS year,
                P.ProductID,
                P.Name AS ProductName,
                P.BrandName,
                C.ProductCategory AS CategoryName,
                P.ImageURL AS ProductImageURL,
                COALESCE(SUM(PS.Amount), 0) AS TotalProductSale,
                COALESCE(SUM(PS.Quantity), 0) AS QuantitySold
            FROM
                Product P
                LEFT JOIN ProductSale PS ON P.ProductID = PS.ProductID 
                    AND EXTRACT(MONTH FROM PS.SaleDate) = EXTRACT(MONTH FROM CURRENT_DATE)
                    AND EXTRACT(YEAR FROM PS.SaleDate) = EXTRACT(YEAR FROM CURRENT_DATE)
                LEFT JOIN Category C ON P.CategoryID = C.CategoryID
            GROUP BY
                P.ProductID, P.Name, P.BrandName, C.ProductCategory, P.ImageURL
            ORDER BY 
                TotalProductSale ASC
            LIMIT 5;
        ";
        return $this->query($query);
    }


}