<?php 

/**
 * home class
 */
class Bar
{
	use Controller;

	public function index()
	{
        $products = new ProductsModel();
		$expense = new ExpensesModel();
		$sale = new SalesModel();
		$profit = new ProfitModel();

		//Expenses
		$latestExpenses = $expense->getLatestExpenses();
		$currentMonthlyExpenses = $expense->getMonthlyExpensesData();
		$previousMonthlyExpenses = $expense->getPreviousMonthExpensesData();
		$chartData = $expense->getAllExpensesPercentage();
		//Sales
		$latestSales = $sale->getLatestSales();

		//Profit
		$currentMonthlyProfit = $profit->getMonthlyProfitData();
		$previousMonthlyProfit = $profit->getPreviousMonthProfitData();

		//Product
		$productsCount = $products->productsCount();
		$topSellingProduct = $products->getMonthlyTopSellingProduct();

		// show($chartData);
		$this->view('bar', 
		['productsCount' => $productsCount,
		 'latestExpenses' => $latestExpenses,
		 'latestSales' => $latestSales,
		 'currentMonthlyProfit' => $currentMonthlyProfit,
		 'previousMonthlyProfit' => $previousMonthlyProfit,
		 'currentMonthlyExpenses' => $currentMonthlyExpenses,
		 'previousMonthlyExpenses' => $previousMonthlyExpenses,
		 'topSellingProduct' => $topSellingProduct,
		 'chartData' => $chartData
		]);

		// $this->view('inventory', ['shoes' => $shoeProducts , "clothing" => $clothingProducts, "merch" => $merchProducts]);

	}

}
