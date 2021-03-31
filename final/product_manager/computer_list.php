<?php include './view/header.php';?>
    <h1>Product List</h1>
    <aside>
        <h2>Brands</h2>
        <nav>
        <ul>
         <?php foreach ($brands as $brand) : ?>
            <li>
                <a href="?brand_id=<?php echo $brand['brandID']; ?>">
                    <?php echo $brand['brandName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>           
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $brand_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Product Type</th>
                <th></th>
                <th></th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productID']; ?></td>
                <td><a href ="?action=show_product&amp;product_id=<?php echo $product['productID']; ?>" ><?php echo $product['productName']; ?></a></td>
                <padding>
                <td><?php echo $product['productType']; ?></td>
                <td><from action="." method="post"> 
                <input type="hidden" name="action" value="delete_product"> 
                <input type="hidden" name="product_id"
                value="<?php echo $product['productID'] ?>"> 
                
                
                <input type="submit" value="Delete"> 
                </from></td>
                <td>edit</td>
                </padding>
            </tr>
            <?php endforeach; ?>            
        </table>
        <p> <a href ="?action=add_product_form" >Add Product</a></p>
    </section>
<?php include './view/footer.php'; ?>