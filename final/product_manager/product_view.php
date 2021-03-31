<?php include './view/header.php'; ?>
   <?php
    $product_name = $product['productName'];
    $product_type = $product['productType'];
    $RAM = $specs['RAMAmount'];
    $processor = $specs['processor'];
    
?>
<h1> <?php echo $product_name; ?></h1>
<p>Product type: <?php echo $product_type; ?></p>
<p>Amount of Random Access Memory: <?php echo $RAM; ?>  GBs</p>
<p>Processor: <?php echo $processor; ?></p>
<?php include './view/footer.php'; ?> 
