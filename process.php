<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];
    $rainfall = $_POST['rainfall'];
    $vegetation = $_POST['vegetation'];
    $chemical = $_POST['chemical'];
    $biological = $_POST['biological'];
    $soil = $_POST['soil'];
    $date = $_POST['date'];

    // Display or process the received data
    echo "<h1>Data Received</h1>";
    echo "<p>Temperature: $temperature °C</p>";
    echo "<p>Humidity: $humidity %</p>";
    echo "<p>Rainfall: $rainfall mm</p>";
    echo "<p>Vegetation Type: $vegetation</p>";
    echo "<p>Chemical Data: $chemical</p>";
    echo "<p>Biological Data: $biological</p>";
    echo "<p>Soil Data: $soil</p>";
    echo "<p>Date: $date</p>";

    // Optional: Save data to a database or a file
}
?>
