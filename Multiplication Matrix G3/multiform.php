<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Matrix</title>
</head>
<body>
    <form method="post" action="generate.php">
        <label for="size">Enter Multiplication Table Size [>1 and <=20]:</label>
        <input name="msize" id="size"/><br/>
        <label for="divide">Enter Divisible by: <label>
        <input name="divby" id="divide"/><br/>
        <label for="color">Divisible Highlight Color: <label>
        <select name="color" id="color">
            <option>Red</option>
            <option>Yellow</option>
            <option>Blue</option>
        </select><br/>
        <input type='submit' value="Generate X Table"/>
    </form>
</body>
</html>