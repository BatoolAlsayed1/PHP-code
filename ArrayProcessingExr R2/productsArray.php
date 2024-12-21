<?php
/*
Assume we have nested associative arrays holding some laptops products as shown below
*/
$products['A123']=array("name"=>"Sony Laptop X", "price"=>400,"qty"=>3,"picture"=>"p1.png");
$products['A124']=array("name"=>"Samsung Laptop Y", "price"=>299,"qty"=>10,"picture"=>"p3.jpg");
$products['A125']=array("name"=>"Toshiba Laptop N", "price"=>170,"qty"=>7,"picture"=>"p2.jpg");
$products['A126']=array("name"=>"MS Surface XX", "price"=>450,"qty"=>0,"picture"=>"p4.jpg");
$products['A127']=array("name"=>"MAC Laptop Pro", "price"=>720,"qty"=>2,"picture"=>"p5.jpeg");

/*
Another way to construct the array:
$products=[
    'A123'=>["name"=>"Sony Laptop X", "price"=>400,"qty"=>3,"picture"=>"p1.png"],
    'A124'=>["name"=>"Samsung Laptop Y", "price"=>299,"qty"=>10,"picture"=>"p3.jpg"]
];

In this exercise, write the necessary HTML/PHP code to let users view
and select their products using simple HTML form. At this stage, just focus
on displaying the products details as shown in the given screenshot. In later exercises,
continue to add more codes to build our shopping cart to save user selection.
*/
?>
<html>
<body>
  <table alignment='center' width='500'>
  <caption><a href='viewCart.php'>View Cart</caption>
    <?php
    foreach( $products as $pid => $details){ //open but not closed
     extract($details);  
    
    ?>
    <tr>
      <td>
        <img src='images/<?php echo $picture;?>' width='100' height='100' />
      </td>
      <td>
        Product Name:<?php echo $name;?> <br />
        Product Price: BD <?php echo $price;?>
      </td>
      <td>
        <?php
        if ($qty==0) echo "<h3 style='color:red'>Out of Stock</h3>";
        else{  //else open but not closed
        ?> 
        <form method='post' action='addToCart.php'>
          Quantity:
          <select name='qty'>
            <?php
                for($i=1;$i<=$qty;++$i)
                  echo "<option>$i</option>\n";
            ?>
          </select><br />
          <input type="hidden" name="pid" value='<?php echo $pid;?>'/>
          <input type='submit' value='Add to Cart' />
        </form>
        <?php
        } //closing else
        ?>
      </td>
    </tr>
    <?php
    }// close foreach loop
    ?>
  </table>
</body>
</html>