<?php
session_start();
if (!isset($_SESSION['mycart']) || empty($_SESSION['mycart']))
    die('Your Cart is Empty');
require('mydata.php');
?>
<html>
    <body>
        <table style="border: 1px solid black; margin: auto; width: 400px;">
        <caption><a href='productsArray.php'>View Cart</caption>
        <tr>
            <th>Picture</th><th>Name</th><th>Price</th>
            <th>Quantity</th><th>Remove</th>
            </tr>
        <form method='post' action='updateCart.php'>
            <?php
            foreach($_SESSION['mycart'] as $pid=>$qty)
            {
              echo "<tr>";
              echo "<td> <img src='images/".$products[$pid]['picture'].
                    "' width='100' height='100' /></td>";
              echo "<td>".$products[$pid]['name']."</td>";
              echo "<td>".$products[$pid]['price']."</td>";
              echo "<td>";
                  echo "<select name='qty[]'>";
                  for($i=1;$i<=$products[$pid]['qty'];++$i){
                    echo "<option ";
                    if ($i==$qty) echo "selected ";
                    echo ">$i</option>";
                  }
                  echo "</select>";
                  echo "<input type='hidden' name='pid[]' value='$pid' />";
              echo "</td>";
              echo "<td><a href='removeitem.php?pid=$pid'>Remove?</a></td></tr>";
            }
            ?>
            <tr>
              <th colspan='5'><input type='submit' value='Update All' /></th>
            </tr>
          </form>
          </table>
    </body>    
</html>