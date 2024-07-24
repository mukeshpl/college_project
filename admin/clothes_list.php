<?php

include("../db.php");


$product_id = $_GET['product_id'];

// Delete related rows from the order_products table
$sql_delete_orders = "DELETE FROM order_products WHERE product_id = $product_id";
if ($con->query($sql_delete_orders) === TRUE) {
    // Now, delete the product
    $sql_delete_product = "DELETE FROM products WHERE product_id = $product_id";
    if ($con->query($sql_delete_product) === TRUE) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
} else {
    echo "Error deleting orders related to the product: " . $conn->error;
}



header("Location: productlist.php");



?>