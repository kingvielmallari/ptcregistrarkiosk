<?php
require_once __DIR__ . '/../../vendor/autoload.php';



use PhpOffice\PhpSpreadsheet\IOFactory;

if ($_FILES['excelFile']['name']) {
    $file = $_FILES['excelFile']['tmp_name'];
    $spreadsheet = IOFactory::load($file); // Load Excel file
    $sheetData = $spreadsheet->getActiveSheet()->toArray();

    $conn = new class_model(); // Your database connection

    foreach ($sheetData as $index => $row) {
        if ($index == 0) continue; // Skip header row

        $studentID_no = $row[0];
        $first_name = $row[1];
        $middle_name = $row[2];
        $last_name = $row[3];
        $course = $row[4];
        $year_level = $row[5];
        $date_ofbirth = $row[6];
        $gender = $row[7];
        $complete_address = $row[8];
        $email_address = $row[9];
        $mobile_number = $row[10];
        $username = $row[11];
        $password = $row[12];
        $account_status = $row[13];
        $date_created = $row[14];

        // Insert into the database
        $conn->insert_student($studentID_no, $first_name, $middle_name, $last_name, $course, $year_level, $date_ofbirth, $gender, $complete_address, $email_address, $mobile_number, $username, $password, $account_status, $date_created);
    }

    echo "<div class='alert alert-success'>Excel file imported successfully.</div>";
} else {
    echo "<div class='alert alert-danger'>Failed to upload Excel file.</div>";
}
?>
