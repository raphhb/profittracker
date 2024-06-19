<?php

require_once('chartModel.php');

// Create an instance of the chart model
$chartModel = new chartModel();

// Fetch all chart data
$chartData = $chartModel->getAllChartData();

// Convert data to JSON format
$jsonData = json_encode($chartData);

// Output JSON
header('Content-Type: application/json');
echo $jsonData;
?>
