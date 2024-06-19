<?php

// Start output buffering
ob_start();

if(isset($_POST['button'])){
    require_once('C:\xampp\htdocs\ProfitTracker\public\assets\libraries\tcpdf\tcpdf.php');
    
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $obj_pdf->SetCreator(PDF_CREATOR);

    $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");

    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);

    $obj_pdf->SetHeaderFont(array(PDF_FONT_NAME_MAIN), '', PDF_FONT_SIZE_MAIN);

    $obj_pdf->SetFooterFont(array(PDF_FONT_NAME_DATA), '', PDF_FONT_SIZE_DATA);

    // Removed the line with SetDefaultMonospaceFont
    // $obj_pdf->SetDefaultMonospaceFont('helvetica');
    
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
    $obj_pdf->SetPrintHeader(false);
    $obj_pdf->SetPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 12);
    $obj_pdf->AddPage();

    $content = '';
    $content .= '
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>30</td>
                    <td>USA</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>25</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Mohammed Ali</td>
                    <td>40</td>
                    <td>UAE</td>
                </tr>
                <tr>
                <td>Mohammed Aliraph</td>
                <td>40</td>
                <td>UAE</td>
            </tr>
            </tbody>
        </table>
    ';

    $obj_pdf->writeHTML($content);

    // Clear output buffer
    ob_end_clean();

    $obj_pdf->Output("sample.pdf", 'I'); // 'I' stands for inline display in the browser
}
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Table with PDF Download</title>
    <script src="<?= ROOT ?>/assets/js/jspdf.umd.min.js"></script>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .download-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }
    </style>
    </head>
    <body>

    <h2>Reports Data</h2>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Doe</td>
                <td>30</td>
                <td>USA</td>
            </tr>
            <tr>
                <td>Jane Smith</td>
                <td>25</td>
                <td>Canada</td>
            </tr>
            <tr>
                <td>Mohammed Ali</td>
                <td>40</td>
                <td>UAE</td>
            </tr>
            <tr>
                <td>Mohammed Aliraph</td>
                <td>40</td>
                <td>UAE</td>
            </tr>
        </tbody>
    </table>
    <form method="post">
        <input type="submit" name="button" value="Convert to PDF"/>
    </form>

    </body>
    </html>
