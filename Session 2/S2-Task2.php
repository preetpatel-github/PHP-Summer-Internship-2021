<!-- Session 2 -> Task-2 -->
<html>
    <body>
        <form method="POST">
        <label>Please Select Task To Perform:</label>
        <select name="TaskSelector">
                <option selected disabled><-----------------Select--------------></option>
                <option> Varibles </option>
                <option> If Condition </option>
                <option> leap year </option>
                <option> Negative/Positive/Zero Number </option>
            </select>
        <input id="submit" type="submit" value="Submit" name="Submit"/>
        </form>
        <div>
            
        </div>
    </body>
</html>

<!-- PHP Switch Logic Code  -->
<?php

    if(isset($_POST['Submit']))
    {
        $gettask=$_POST['TaskSelector'];
        echo "<b>$gettask :</b> <br><br>";
    }  
switch ($gettask) {
  case "Varibles":
    echo "Variable (With 5 Method)";
    $a = 5;
    $b = 10;
    //Method 1
    echo "<br>The Value Of a is ".$a;
    echo "<br>The Value Of b is ".$a;
    //Method 2
    echo "<br>Value Of a is ".$a."<br>Value Of b is ".$b;
    //Method3
    echo "<br/>a value is $a<br/>b value is $b";
    //Method4
    echo '<br/>The Value of a is $a<br/>The Value Of b is $b';
    //Method5
    echo "<br/>Value Of a is $a<br/>Value Of b is $b<br/>Sum is".($a+$b);
    break;
  case "If Condition":
      echo "Checking age <br>";
      $age=20;
      if ($age==20) {
        echo"Age is 20";
}
      break;
  case "leap year":
      echo "Year is Leap Year or not";
      $my_year = 2022;
      echo "<br>year is :".$my_year;
    if ($my_year % 400 == 0) {
                echo"It is a leap year";
            }
        if ($my_year % 4 == 0) {
            echo("It is a leap year");
            } else if ($my_year % 100 == 0) {
                echo("<br>It is not a leap year");
            } else {
                echo("<br>It is not a leap year");
            }
      break;
  case "Negative/Positive/Zero Number":
      echo "Number is eithher +ve,-ve or 0";
      $x= -1;
      echo "<br>Number is :".$x; 
      if ($x > 0){
          $message = "<br>Positive number";}
  if ($x == 0){
      $message = "<br>Zero";}
  if ($x < 0){
      $message = "<br>Negative number";}
  echo $message."\n";
         break;
    default:
         echo "Invalid Choice";
}
?>

