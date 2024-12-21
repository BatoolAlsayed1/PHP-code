<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculity</title>
</head>
<body>
    <?php
    if (isset($_POST['BTN'])){
        $BTN= $_POST['BTN'];
        $name= $_POST['name'];
        $sname= $_POST['sname'];
        $descr= $_POST['descr'];
        $gender= $_POST['gender'];

        if ($BTN== "Tabular"){
            echo "<table border='1'><tr><th>Name</th><th>Surname</th><th>Gender</th> 
            <th>Occupation</th></tr>";
            echo "<tr><th>$name</th><th>$sname</th><th>$gender</th> 
            <th>$descr</th></tr>";
            echo "</table>";
        } elseif ($BTN== "List"){
            echo "<ul>";
            echo "<li>Name: $name</li>";
            echo "<li>Surname: $sname</li>";
            echo "<li>Gender: $gender</li>";
            echo "<li>Occupation: $descr</li>";
            echo "</ul>";
        }
    } else {
    ?>
    <form method="post">
        Enter your Details:
        Name: <input name="name"/><br/>
        Surname: <input name="sname"/><br/>
        Occupation Description:<br/>
        <textarea name="descr"></textarea><br/>
        Gender: <br/>
        <input type="radio" name="gender" value="M" checked/> Male<br/>
        <input type="radio" name="gender" value="F"/> Female<br/>
        <input type="submit" name="BTN" value="Tabular"/>
        <input type="submit" name="BTN" value="List"/>
    </form>   
    <?php }?>
</body>
</html>