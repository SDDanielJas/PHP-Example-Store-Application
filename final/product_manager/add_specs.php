<?php include './view/header.php';?>
<main>
    <h1>Add specs</h1>
    <p><?php echo $product['productID']; ?></p>
    <form action="index.php" method="post">
    <input type="hidden" name="action" value="add_specs">
       <input type="hidden" name="product_id" value = '<?php echo $product['productID']?>' >
        <br>
    <lable>Amount of RAM: </lable>
    <input type="text" name="RAM" /> 
        <br>
    <lable>Processor: </lable>
    <input type="text" name="processor" />
      <br>
       <lable>&nbsp;</lable>
    <input type="submit" name="Add Specs" />  
        </form>
</main>

<?php include './view/footer.php'; ?>