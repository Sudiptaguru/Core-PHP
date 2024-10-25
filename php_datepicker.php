<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Filter</title>
</head>
<body>

<form action="" method="post">
    <label for="date">Select Date:</label>
    <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDate = $_POST['date'];
    
    // Sample data array representing database records
    $dataRecords = [
        ['datetime' => '2024-10-25 06:53:12', 'data' => 'Record 1'],
        ['datetime' => '2024-10-25 12:20:30', 'data' => 'Record 2'],
        ['datetime' => '2024-10-26 08:15:45', 'data' => 'Record 3'],
    ];

    // Filter records for the selected date only (ignoring time)
    $matchingRecords = array_filter($dataRecords, function ($record) use ($selectedDate) {
        return strpos($record['datetime'], $selectedDate) === 0;
    });

    echo "Records for " . $selectedDate . ":<br>";
    foreach ($matchingRecords as $record) {
        echo $record['data'] . " (Timestamp: " . $record['datetime'] . ")<br>";
    }
}
?>

</body>
</html>
