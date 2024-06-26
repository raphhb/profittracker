<?php 

/**
 * home class
 */
class Records
{
	use Controller;

	public function index()
	{

        // Check if user is logged in
        if (!isset($_SESSION['admin'])) {
            // If not logged in as admin, redirect to login page
            redirect('login');
        }
        
        $products = new ProductsModel();
		$productsCount = $products->productsCount();

        $profit = new ProfitModel();
        $allProfit = $profit->getAllProfit();
        $monthlyProfit = $profit->getMonthlyProfit();
        $weeklyProfit = $profit->getWeeklyProfit();
        $dailyProfit = $profit->getDailyProfit();
        
        $barData = $profit ->getWeeklyProfit();
        
        // DATAAAA
        $allProfitData = $profit->getAllProfitData();
        $monthlyProfitData = $profit->getMonthlyProfitDataa();
        $weeklyProfitData = $profit->getWeeklyProfitData();
        $dailyProfitData = $profit->getDailyProfitData();

        $user = new UserModel();
        $notif = $user->getNotifications();
        $notifUnread = $user->getNotificationsUnread();
        
        // show($notif);
        
		$this->view('records', 
        ['allProfit' => $allProfit,
         'monthlyProfit' => $monthlyProfit,
         'weeklyProfit' => $weeklyProfit,
         'dailyProfit' => $dailyProfit,
         'allProfitData' => $allProfitData,
         'monthlyProfitData' => $monthlyProfitData,
         'weeklyProfitData' => $weeklyProfitData,
         'dailyProfitData' => $dailyProfitData,
		 'notif' => $notif,
		 'notifUnread' => $notifUnread
        ]);

		// $this->view('inventory', ['shoes' => $shoeProducts , "clothing" => $clothingProducts, "merch" => $merchProducts]);

	}

    public function generatePDF()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['report_type'])) {
            require_once('C:\xampp\htdocs\ProfitTracker\public\assets\libraries\tcpdf\tcpdf.php');
    
            // Create new TCPDF object with landscape orientation
            $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    
            // Set document information
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Your Name');
            $pdf->SetTitle('Records Report');
            $pdf->SetSubject('Records Report');
            $pdf->SetKeywords('TCPDF, PDF, Profit, report');
    
            // Set default header data including the current date
            $currentDate = date('Y-m-d H:i:s');
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Profit Report', 'Generated by ProfitTracker on ' . $currentDate, [0,64,255], [0,64,128]);

            // Set header and footer fonts
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    
            // Set default monospaced font
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    
            // Set margins
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    
            // Set auto page breaks
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    
            // Set image scale factor
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    
            // Set font
            $pdf->SetFont('dejavusans', '', 10);
    
            // Add a page
            $pdf->AddPage();
    
            // Create the HTML content
            $html = '';
    
            $profit = new ProfitModel();
            $products = new ProductsModel();
    
            // Handle different report types
            switch ($_POST['report_type']) {
                case '1': // Monthly
                    $monthlyProfit = $profit->getMonthlyProfit(); // Assuming this function exists to fetch monthly profit
                    // Output monthly profit data in PDF
                    $html .= '<h2>Monthly Profit Report</h2>';
                    $html .= '<table border="1" cellspacing="3" cellpadding="4">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Day</th>
                                        <th>Week</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Total Sales</th>
                                        <th>Total Expenses</th>
                                        <th>Profit</th>
                                    </tr>
                                </thead>
                                <tbody>';
                    foreach ($monthlyProfit as $data) {
                        $html .= '<tr>
                                    <td>' . htmlspecialchars($data->date) . '</td>
                                    <td>' . htmlspecialchars($data->day) . '</td>
                                    <td>' . htmlspecialchars($data->week) . '</td>
                                    <td>' . htmlspecialchars($data->month) . '</td>
                                    <td>' . htmlspecialchars($data->year) . '</td>
                                    <td>' . htmlspecialchars($data->total_sales) . '</td>
                                    <td>' . htmlspecialchars($data->total_expenses) . '</td>
                                    <td>' . htmlspecialchars($data->profit) . '</td>
                                </tr>';
                    }
                    $html .= '</tbody></table>';
                    break;
    
                case '2': // All
                    $allProfit = $profit->getAllProfit(); // Assuming this function exists to fetch all-time profit
                    // Output all-time profit data in PDF
                    $html .= '<h2>All Profit Report</h2>';
                    $html .= '<table border="1" cellspacing="3" cellpadding="4">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Day</th>
                                        <th>Week</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Total Sales</th>
                                        <th>Total Expenses</th>
                                        <th>Profit</th>
                                    </tr>
                                </thead>
                                <tbody>';
                    foreach ($allProfit as $data) {
                        $html .= '<tr>
                                    <td>' . htmlspecialchars($data->date) . '</td>
                                    <td>' . htmlspecialchars($data->day) . '</td>
                                    <td>' . htmlspecialchars($data->week) . '</td>
                                    <td>' . htmlspecialchars($data->month) . '</td>
                                    <td>' . htmlspecialchars($data->year) . '</td>
                                    <td>' . htmlspecialchars($data->total_sales) . '</td>
                                    <td>' . htmlspecialchars($data->total_expenses) . '</td>
                                    <td>' . htmlspecialchars($data->profit) . '</td>
                                </tr>';
                    }
                    $html .= '</tbody></table>';
                    break;
    
                    case '3': // Monthly progress summary and analysis

                        // Models
                        $products = new ProductsModel();
                        $expense = new ExpensesModel();
                        $profit = new ProfitModel();
                        $sale = new SalesModel();

                        //Profit
                        $currentMonthlyProfit = $profit->getMonthlyProfitData();
                        $previousMonthlyProfit = $profit->getPreviousMonthProfitData();

                        //Expense
		                //Expenses
                        $latestExpenses = $expense->getLatestExpenses();
                        $currentMonthlyExpenses = $expense->getMonthlyExpensesData();
                        $previousMonthlyExpenses = $expense->getPreviousMonthExpensesData();
                        $currentMonth = $expense->getCurrentMonth();
                        // $chartData = $expense->getAllExpensesPercentage();
                        $productExpense = $expense->getProductExpense();

                        // Sales
                        $allSales = $sale->getAllSales();
                        $monthlySales = $sale->getMonthlySales();
                        $weeklySales = $sale->getWeeklySales();
                        $todaySales = $sale->getDailySales();
                        $monthlySalesData = $sale->getMonthlySaleData();

                        // Products
                        $topSellingProduct = $products->getMonthlyTopSellingProduct();

                        $profit = $currentMonthlyProfit; // Replace with actual profit calculation

                        // Example data (replace with actual calculations)
                        $totalSales = $monthlySalesData; // Total sales for the month
                        $month = $currentMonth;; // Current month (replace with actual month)
                        $topSellingProductName = $topSellingProduct->productname;
                        $topSellingProductBrand = $topSellingProduct->brandname;

                        $topSellingProductCategory = $topSellingProduct->category; // Top selling product category (replace with actual category)
                        $productSales =  $topSellingProduct->totalproductsale; // Product sales for the top selling product (replace with actual sales)
                        $topSellingProductQuantitySold = $topSellingProduct->quantitysold; // Quantity sold for the top selling product (replace with actual quantity)
                        $currentMonthlyProfit = $profit; // Current month profit (replace with actual profit)
                    
                        $totalExpenses = $currentMonthlyExpenses; // Current Month Expenses


                        // Get current month's expenses and profit
                        $currentMonthlyExpenses = $expense->getMonthlyExpensesData();
                        $previousMonthlyExpenses = $expense->getPreviousMonthExpensesData();
                        $currentMonth = $expense->getCurrentMonth();
                    
                        $totalExpenses = $currentMonthlyExpenses; // Total expenses for the month
                    
                        // Calculate profit and loss status
                        if ($profit > 0) {
                            $profitStatus = '<strong style="color: lightgreen;">positive</strong>';
                            $profitAmount = '₱' . number_format($profit, 2);
                        } elseif ($profit < 0) {
                            $profitStatus = '<strong style="color: red;">negative</strong>';
                            $profitAmount = '- ₱' . number_format(abs($profit), 2);
                        } else {
                            $profitStatus = 'no profit has been made yet this month.';
                            $profitAmount = '';
                        }
                    
                        // Calculate comparison with the previous month
                        $currentMonthExpenses = number_format($currentMonthlyExpenses, 2);
                        $previousMonthExpenses = number_format($previousMonthlyExpenses, 2);
                    
                        if ($previousMonthlyExpenses > 0) {
                            $percentChange = (($currentMonthlyExpenses - $previousMonthlyExpenses) / $previousMonthlyExpenses) * 100;
                        } else {
                            $percentChange = 0; // Prevent division by zero
                        }
                    
                        // Build HTML for the report
                        $html .= '<h2 style="text-align: center;">Monthly Progress Summary and Analysis</h2>';
                        $html .= '<div style="text-align: center;">';
                        $html .= '<p>For the month of ' . $month . ', your business generated a total of ₱' . number_format($totalSales, 2) . ' in sales.</p>';
                        $html .= '<p>Your top-selling product was <strong>' . $topSellingProductName . '</strong> by <strong>' . $topSellingProductBrand . '</strong>, which belongs to the <strong>' . $topSellingProductCategory . '</strong> category. This product contributed ₱' . number_format($productSales, 2) . ' to the total sales, with ' . $topSellingProductQuantitySold . ' units sold.</p>';
                    
                        // Display comparison with the previous month
                        $html .= '<p>You spent a total of ₱' . $currentMonthExpenses . ' in expenses this month, ';
                        if ($percentChange > 0) {
                            $html .= 'showing an increase of ' . number_format($percentChange, 2) . '% compared to ₱' . $previousMonthExpenses . ' in the previous month.';
                        } elseif ($percentChange < 0) {
                            $html .= 'showing a decrease of ' . number_format(abs($percentChange), 2) . '% compared to ₱' . $previousMonthExpenses . ' in the previous month.';
                        } else {
                            $html .= 'which is the same as ₱' . $previousMonthExpenses . ' in the previous month.';
                        }
                        $html .= '</p>';
                    
                        $html .= '<p>Out of the total expenses, ₱' . number_format($productExpense, 2) . ' was spent specifically on product expenses.</p>';
                    
                        if ($profitAmount > 0) {
                            $html .= '<p>Your business is in a ' . $profitStatus . ' position, with a net profit of ' . $profitAmount . ' for the month.</p>';
                            $html .= '<p>It\'s recommended to capitalize on the success of <strong>' . $topSellingProductName . '</strong> by exploring opportunities to increase its availability or promotion. Consider offering complementary products or accessories to boost sales further.</p>';
                        } else {
                            $html .= '<p>Your business is in a ' . $profitStatus . ' position, with a net loss of ' . $profitAmount . ' for the month. It\'s crucial to review expenses and strategies to improve profitability.</p>';
                            $html .= '<p>One area of focus could be to capitalize on the popularity of <strong>' . $topSellingProductName . '</strong> to increase sales. Consider bundling it with other products or offering promotions to attract more customers.</p>';
                        }
                    
                        $html .= '<p>Keep up the good work and continue to manage your expenses effectively!</p>';
                        $html .= '</div>';
                    
                        break;
                    

                        case '4': // Specific range of months
                            $allProfitData = $profit->getAllProfitData();
                        
                            $html .= '<h2>Profit Report Overview</h2>';
                            $html .= '<table border="1" cellspacing="3" cellpadding="4">
                                        <thead>
                                            <tr>
                                                <th>Month</th>
                                                <th>Year</th>
                                                <th>Total Sales</th>
                                                <th>Total Expenses</th>
                                                <th>Profit</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                            foreach ($allProfitData as $data) {
                                $html .= '<tr>
                                            <td>' . htmlspecialchars($data->monthh) . '</td>
                                            <td>' . htmlspecialchars($data->yearr) . '</td>
                                            <td>' . htmlspecialchars($data->total_sales) . '</td>
                                            <td>' . htmlspecialchars($data->total_expenses) . '</td>
                                            <td>' . htmlspecialchars($data->profit) . '</td>
                                        </tr>';
                            }
                            $html .= '</tbody></table>';
                        
                            // Calculate the month with the highest profit
                            $maxProfitMonth = '';
                            $maxProfit = 0;
                            foreach ($allProfitData as $data) {
                                if ($data->profit > $maxProfit) {
                                    $maxProfit = $data->profit;
                                    $maxProfitMonth = htmlspecialchars($data->monthh) . ' ' . htmlspecialchars($data->yearr);
                                }
                            }
                        
                            // Add summary
                            $html .= '<h3>Summary</h3>';
                            $html .= '<p>The month with the highest profit is: <strong>' . $maxProfitMonth . '</strong> with a profit of <strong>' . $maxProfit . '</strong>.</p>';
                        
                            break;
                        
                    
                    
                    
    
                default:
                    // Invalid report type
                    die('Invalid report type.');
            }
    
            // Write HTML content to PDF
            $pdf->writeHTML($html, true, false, true, false, '');
    
            // Close and output PDF document
            $pdf->Output('profit_report.pdf', 'D');
            exit;
        }
    }
    

    public function getDataWeekly(){
        $dataWeekly = new ProfitModel();
        $barData = $dataWeekly->getWeeklyProfit();
        // $chart = new chartModel();
        // $chartData = $chart->getAllLabels(); // Assuming this method retrieves data from the database
        header('Content-Type: application/json');
        echo json_encode($barData);
    }

    public function getDataWeeklyLatest(){
        $dataWeekly = new ProfitModel();
        $barData = $dataWeekly->getFourLatestData();
        // $chart = new chartModel();
        // $chartData = $chart->getAllLabels(); // Assuming this method retrieves data from the database
        header('Content-Type: application/json');
        echo json_encode($barData);
    }

}
