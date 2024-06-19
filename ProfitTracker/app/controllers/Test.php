<?php 

/**
 * home class
 */
class Test
{
	use Controller;

	public function index()
	{	
        // Check if user is logged in
        if (!isset($_SESSION['admin'])) {
            // If not logged in as admin, redirect to login page
            redirect('login');
        }
		
		// Models
        $products = new ProductsModel();
		$expense = new ExpensesModel();
		$sale = new SalesModel();
		$profit = new ProfitModel();
        $user = new UserModel();

		//User
        $notif = $user->getNotifications();
		$notif = $user->getNotifications();
        $notifUnread = $user->getNotificationsUnread();

		// $notif = $user->getNotifications(); // Fetch notifications
        // $notifCount = $user->getUnreadCount(); // Fetch unread count

		//Expenses
		$latestExpenses = $expense->getLatestExpenses();
		$currentMonthlyExpenses = $expense->getMonthlyExpensesData();
		$previousMonthlyExpenses = $expense->getPreviousMonthExpensesData();
		$chartData = $expense->getAllExpensesPercentage();
		$countDailyExpense = $expense->getDailyExpensesCount();
		$countWeeklyExpense = $expense->getWeeklyExpensesCount();

		//Sales
		$latestSales = $sale->getLatestSales();
		$currentMonthlySales = $sale->getMonthlySaleData();
		$countDailySales = $sale->countDailySales();
		$countWeeklySales = $sale->countWeeklySales();
		$countMonthlySales = $sale->countMonthlySales();

		//Profit
		$currentMonthlyProfit = $profit->getMonthlyProfitData();
		$previousMonthlyProfit = $profit->getPreviousMonthProfitData();

		//Product
		$productsCount = $products->productsCount();
		$topSellingProduct = $products->getMonthlyTopSellingProduct();

		// show($chartData);
		$this->view('test', 
		['productsCount' => $productsCount,
		 'latestExpenses' => $latestExpenses,
		 'latestSales' => $latestSales,
		 'currentMonthlyProfit' => $currentMonthlyProfit,
		 'previousMonthlyProfit' => $previousMonthlyProfit,
		 'currentMonthlyExpenses' => $currentMonthlyExpenses,
		 'previousMonthlyExpenses' => $previousMonthlyExpenses,
		 'topSellingProduct' => $topSellingProduct,
		 'chartData' => $chartData,
		 'notif' => $notif,
		 'notifUnread' => $notifUnread,
		 'currentMonthlySales' => $currentMonthlySales,
		 'countDailySales' => $countDailySales,
		 'countWeeklySales' => $countWeeklySales,
		 'countMonthlySales' => $countMonthlySales,
		 'countDailyExpense' => $countDailyExpense,
		 'countWeeklyExpense' => $countWeeklyExpense
		]);

		// $this->view('inventory', ['shoes' => $shoeProducts , "clothing" => $clothingProducts, "merch" => $merchProducts]);

	}

    public function markAllAsRead() {
        $user = new UserModel();
        $markRead = $user->markAllAsRead();
        
        // Respond to AJAX request
        echo json_encode(['status' => 'success']);
    }

	public function markAllAsDeleted() {
		$user = new UserModel();
        $markDeleted = $user->markAllAsDeleted();

		// Respond to AJAX request
		echo json_encode(['status' => 'success']);
	}


}
