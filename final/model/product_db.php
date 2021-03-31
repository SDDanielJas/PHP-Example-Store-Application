<?php 
function get_computer_by_brand ($brand_id) {  
global $db;
$query = 'SELECT * FROM products
              WHERE brandID = :brand_id
              ORDER BY brandID';
$statement3 = $db->prepare($query);
$statement3->bindValue(':brand_id', $brand_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
return $products;
}
function get_computer_specs($product_id) {  
global $db;
$query = 'SELECT * FROM specs
        WHERE productID = :product_id';
    
$statement3 = $db->prepare($query);
$statement3->bindValue(':product_id', $product_id);
$statement3->execute();
$products = $statement3->fetch();
$statement3->closeCursor();
return $products;
}
function get_computer($product_id) {  
global $db;
$query = 'SELECT * FROM products
        WHERE productID = :product_id';
    
$statement3 = $db->prepare($query);
$statement3->bindValue(':product_id', $product_id);
$statement3->execute();
$products = $statement3->fetch();
$statement3->closeCursor();
return $products;
}
function add_product($brand_ID, $name, $type) {
global $db;
$query = 'INSERT INTO products
        (brandID, productType, productName)
        VALUES
        (:brand_ID, :type, :name)'; 
    
$statement3 = $db->prepare($query);
$statement3->bindValue(':brand_ID', $brand_ID);
$statement3->bindValue(':type', $type);
$statement3->bindValue(':name', $name);
$statement3->execute();
$statement3->closeCursor();
}
function add_specs($product_ID, $RAM, $processor) {
global $db;
$query = 'INSERT INTO specs
        (productID, RAMAmount, processor)
        VALUES
        (:product_ID, :RAM, :processor)'; 
    
$statement3 = $db->prepare($query);
$statement3->bindValue(':product_ID', $product_ID);
$statement3->bindValue(':RAM', $RAM);
$statement3->bindValue(':processor', $processor);
$statement3->execute();
$statement3->closeCursor();
}
function delete_product($product_ID) {
global $db;
$query = 'DELETE FROM products
        WHERE productID = :product_id';
    
$statement3 = $db->prepare($query);
$statement3->bindValue(':product_id', $product_ID);
$statement3->execute();
$statement3->closeCursor();
}
function delete_specs($product_ID) {
global $db;
$query = 'DELETE FROM specs
        WHERE productID = :product_id';
    
$statement3 = $db->prepare($query);
$statement3->bindValue(':product_id', $product_ID);
$statement3->execute();
$statement3->closeCursor();
}
?>