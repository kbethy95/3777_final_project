<html>
<?php
include('connect.php');
echo '<h2>List Product Items</h2>
        <form action="products_edit2.php" method="post">
        
        <p>Which product do you wish to edit?
        <select name="product_ID">';

// ... <option> entries go in here
// Build the query
$query = "SELECT * FROM products ORDER BY product_id";
$result = @mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo '<option
        value="' . $row['product_id'] . '">' . $row['product_name'] . '
        </option>';
}

echo '</select>
        </p>';

echo '<p><input type="submit" name="edit" value="Edit"
        /></p>
        <input type="hidden" name="submitted" value="TRUE" />
        </form>';

?>

<a href='products_script.php'>Cancel</a>

</html>