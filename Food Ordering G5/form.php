<html>
<body>
<?php
/*
Add the necessary HTML/PHP code to display the detailed bill of the user enchant_broker_set_ordering
showing clearly item name, price, quantity and total amount

Note: Only ticked checkboxes are stored in the array food[]
On the other hand, all quantity values will be stored in qty[] array
causing inconsistent relation between the selected item and its Quantity

Another problem you need to fix: the price isn't sent to your program, you
need to add/modify the HTML to let the form pass the price as well
*/

  if (isset($_POST['btn'])) //the user submitted the form
  {
    if (!isset($_POST['food'])) die("You should select at least one item");
    ?>
    <table style="border: 1px solid black; margin: 0 auto; width: 300px;">
      <tr>
        <th>Item</th>
        <th>Unit Price</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    <?php
    /*
      $_POST['food']: it contains only checked checkboxes (user-selections) as name#price
      $_POST['qty']: it contains all form quantity in ordering
    */
    $t=0;
    foreach($_POST['food'] as $f){
      $details=explode("#",$f);
      $name=$details[0];
      $unitprice=$details[1];
      $qty = $_POST['qty'];
      $q=$qty[$details[2]]; //$details[2] refer to the item position
      $iprice=$unitprice*$q;
      $t+=$iprice;
      echo "<tr>";
      echo "<td>$name</td>";
      echo "<td>$unitprice</td>";
      echo "<td>$q</td>";
      echo "<td>$iprice</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "<div align='center'>Total Amount is BD $t<br />";
    die("Thank you for ordering from my restaurant</div></body></html>");
  }
 ?>
<form method="post" >

<table alignment='center' width='400'>
  <caption>Order your food here: </caption>
<tr>
  <td><input type="checkbox" value="Steak#10.4#0" name="food[]">Steak</td>
  <td>Price: BD 10.400</td>
  <td>Quantity: <input type="number" value='1' name="qty[]" min="1" max="10"></td>
</tr>
<tr>
  <td><input type="checkbox" value="Pizza#5.7#1" name="food[]">Pizza</td>
  <td>Price: BD 5.700</td>
  <td>Quantity: <input type="number" value='1' name="qty[]" min="1" max="10"></td>
</tr>
<tr>
  <td><input type="checkbox" value="Fried Chicken#3.9#2" name="food[]">Fried Chicken</td>
  <td>Price: BD 3.900</td>
  <td>Quantity: <input type="number" value='1' name="qty[]" min="1" max="10"></td>
</tr>
<tr>
  <td><input type="checkbox" value="Chinese Rice#2.9#3" name="food[]">Chinese Rice</td>
  <td>Price: BD 2.900</td>
  <td>Quantity: <input type="number" value='1' name="qty[]" min="1" max="10"></td>
</tr>
</table>
<div alignment='center'>
<input type='submit' name='btn' value='Generate Bill' />
</div>
</form>

</body>
</html>
