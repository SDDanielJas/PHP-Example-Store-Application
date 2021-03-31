<?php include './view/header.php';?>
<main>
    <h1>Add Computer</h1>
    <form action="index.php" method="post">
    <input type="hidden" name="action" value="add_product">
    <input type="hidden" name="product_id" value="<?php echo $product['productID']?>"> 
     
    <label>Brand: </label>
    <select name="brand_id">
        <?php foreach ($brands as $brand) : ?>
        <option value="<?php echo $brand['brandID']; ?>"> 
        <?php echo $brand['brandName']; ?> 
        </option>
        <?php endforeach; ?>
    </select>
     
        <br>
    <lable>Product name: </lable>
    <input type="text" name="name" /> 
        <br>
    <lable>Product Type (laptop/desktop): </lable>
    <input type="text" name="type" />
      <br>
       <lable>&nbsp;</lable>
    <input type="submit" name="Add Specs" />  
           <input type="hidden" name="product_id">   
        </form>
</main>

<?php include './view/footer.php'; ?>