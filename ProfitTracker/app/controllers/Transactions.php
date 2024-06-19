<?php 

class Transactions
{
	use Controller;

	public function index()
	{
        
        $sale = new SalesModel();
        $expense = new ExpensesModel();

        
        $sales = $sale->getAllSales();
        $expenses = $expense->getAllExpenses();
        $productExpenses = $expense->getAllProductExpenses();

        $this->view('transactions', ['sales' => $sales , "expenses" => $expenses, "productExpenses" => $productExpenses]);
	}

}
