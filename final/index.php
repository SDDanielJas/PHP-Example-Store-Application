<?php
require('./model/database.php');
require('./model/product_db.php');
require('./model/category_db.php');
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}

switch ($action) {
    case 'list_products' :
        $brand_id = filter_input(INPUT_GET, 'brand_id', FILTER_VALIDATE_INT); 
        if ($brand_id == NULL || $brand_id == FALSE ) {
            $brand_id = 1; 
        }
        $brand_name = get_brand_name($brand_id); 
        $brands = get_brands(); 
        $products = get_computer_by_brand($brand_id);
    include('./product_manager/computer_list.php');
        break;
        
    case 'show_product' :
        $product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT); 
        if ($product_id == NULL || $product_id == FALSE ) {
            $product_id = 1; 
        } 
        $specs = get_computer_specs($product_id);
        if ($specs == FALSE ){
            $product=get_computer($product_id);
            include('./product_manager/add_specs.php');
        } else {
        
        $product=get_computer($product_id);
        
        $specs = get_computer_specs($product_id);
    include('./product_manager/product_view.php');
        }
        break;
        
    case 'add_product_form' : 
        $brands = get_brands(); 
 include('./product_manager/add_product.php');
        break;
        
    case 'add_product' :
        
        
        $brand_id = filter_input(INPUT_POST, 'brand_id', FILTER_VALIDATE_INT);
        $name = filter_input(INPUT_POST, 'name');
        $type = filter_input(INPUT_POST, 'type');
        add_product($brand_id, $name, $type); 
        header("Location: .?brand_id=$brand_id");
        break;
        
    case 'add_specs' : 
        $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT); 
        $RAM = filter_input(INPUT_POST, 'RAM');
        $processor = filter_input(INPUT_POST, 'processor');
        add_specs($product_id, $RAM, $processor); 
        header("Location: .?product_id=$product_id");
        break;
        
    case 'delete_product' : 
        $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT); 
        
        delete_product($product_id);
        delete_specs($product_id);
        break;
            
}
        
        

?>