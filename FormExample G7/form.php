<html><body>
<?php
if (!isset($_POST['sb'])) {    // if page is not submitted to itself echo the form
?>
  <form method="post" >
      First Name:<input type="text" name="Fname"><br />
      Last Name:<input type="text" name="Lname"><br />

      Gender:<br />
      <input type="radio" value="Male" name="gender" checked> Male <br />
      <input type="radio" value="Female" name="gender"> Female<br />

      Please choose type of residence:<br />
      <input type="checkbox" value="Steak" name="food[]">Steak<br />
      <input type="checkbox" value="Pizza" name="food[]">Pizza<br />
      <input type="checkbox" value="Chicken" name="food[]">Chicken<br />
      <textarea rows="5" cols="20" name="quote">Enter your favorite quote!</textarea>
      <br />

      Select a Level of Education:<br />
      <select name="education">
        <option value="Jr.High" selected>Jr.High</option>
        <option value="HighSchool">HighSchool</option>
        <option value="College">College</option>
      </select><br />
      Select your favorite time of day:<br />
      <select name="TofD" size="3">
        <option value="Morning">Morning</option>
        <option value="Day" selected>Day</option>
        <option value="Night">Night</option>
      </select><br />

      <input type="submit" value="Process Me" name="sb">
  </form>
<?php
}
else {
  echo "Hello, ".$_POST['Fname']." ".$_POST['Lname'].".<br />";
  echo "You are ".$_POST['gender'].", and you like: <br /> ";
  foreach ($_POST['food'] as $f)
      echo $f."<br />";
  echo "<i>".$_POST['quote']."</i><br />";
  echo "You're favorite time is ".$_POST['TofD']
        .", and you passed ".$_POST['education']."!<br />";
  echo $_POST['sb'];      
}
?>
</body></html>