<html>
<title>Create New Products</title>

<head>Create a new products to be added to the database</head>

<body>
    <form action="products_script.php" method=post>
        <label for=category_id>Category ID # </label>
        <input type=text id=category_id name=category_id></br>
        <label for=product_code>Product Code: </label>
        <input type=text id=product_code name=product_code></br>
        <label for=product_name>Product Name: </label>
        <input type=text id=product_name name=product_name></br>
        <label for=description>Description: </label>
        <input type=text id=description name=description></br>
        <label for=list_price>List Price: </label>
        <input type=text id=list_price name=list_price></br>
        <label for=discount_percent>Discount Percent: </label>
        <input type=text id=discount_percent name=discount_percent></br>
        <label for=date_added>Date Added: </label>
        <input type=text id=date_added name=date_added></br>
        <input type=submit value=Submit>
</body>

</html>