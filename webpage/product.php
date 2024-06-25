<?php include 'includes/header.php'; ?>
<h2>Products</h2>
<?php
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<img src='assets/images/" . $row['image'] . "' alt='" . $row['name'] . "'>";
        echo "<h3>" . $row['name'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>$" . $row['price'] . "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
?>
<?php include 'includes/footer.php'; ?>
