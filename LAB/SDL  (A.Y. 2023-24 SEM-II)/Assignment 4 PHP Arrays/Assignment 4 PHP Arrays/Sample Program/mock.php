<!DOCTYPE html>
<html>
<head>
    <title>Tourist Information</title>
</head>
<body>

<?php
// Define an associative array to store tourist information
$tourist1 = array("name" => "John", "age" => 30, "country" => "USA");
$tourist2 = array("name" => "Emily", "age" => 25, "country" => "UK");
$tourist3 = array("name" => "Luis", "age" => 35, "country" => "Spain");

// Define a multidimensional array to store tourist information
$tourists = array($tourist1, $tourist2, $tourist3);

// Display the tourist information using associative array
echo "<h2>Tourist Information using Associative Array</h2>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Age</th><th>Country</th></tr>";

foreach ($tourists as $tourist) {
    echo "<tr>";
    echo "<td>".$tourist['name']."</td>";
    echo "<td>".$tourist['age']."</td>";
    echo "<td>".$tourist['country']."</td>";
    echo "</tr>";
}

echo "</table>";

// Display the tourist information using multidimensional array
echo "<h2>Tourist Information using Multidimensional Array</h2>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Age</th><th>Country</th></tr>";

foreach ($tourists as $tourist) {
    echo "<tr>";
    foreach ($tourist as $key => $value) {
        echo "<td>".$value."</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

