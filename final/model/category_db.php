<?php
function get_brands() {
global $db;
$query = 'SELECT * FROM brands
          ORDER BY brandID';
$statement2 = $db->prepare($query);
$statement2->execute();
$brands = $statement2->fetchAll();
$statement2->closeCursor();
return $brands;
}

function get_brand_name ($brand_id) {
global $db;
$query = 'SELECT * FROM brands
          WHERE brandID = :brand_id';
$statement1 = $db->prepare($query);
$statement1->bindValue(':brand_id', $brand_id);
$statement1->execute();
$brand = $statement1->fetch();
$brand_name = $brand['brandName'];
$statement1->closeCursor();
return $brand_name;
}

?>