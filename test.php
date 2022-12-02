<?php 
  
    if(isset($_SESSION['cart'])){ 
          
        $sql="SELECT * FROM products WHERE id_product IN ("; 
          
        foreach($_SESSION['cart'] as $id => $value) { 
            $sql.=$id.","; 
        } 
          
        $sql=substr($sql, 0, -1).") ORDER BY name ASC"; 
        $query=mysql_query($sql); 
        while($row=mysql_fetch_array($query)){ 
              
?> 
            <p><?php echo $row['name'] ?> x <?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?></p> 
<?php 
              
        } 
?> 
        <hr /> 
        <a href="trangchu.php?page_layout=giohang">Go to cart</a> 
<?php 
          
    }else{ 
          
        echo "<p>Your Cart is empty. Please add some products.</p>"; 
          
        echo $_SESSION['tk'];
        echo '<br>';
        echo $_SESSION['mk'];
        echo '<br>';
        echo $_SESSION['auth'];
    } 
  
?>