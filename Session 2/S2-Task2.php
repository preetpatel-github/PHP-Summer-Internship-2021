<!-- Session 2 -> Task-2 -->
<html>
    <body>
        <form action="#" method="get" onsubmit="">
        <label>Please Select Task To Perform:</label>
            <select value="id">
                <option id="1"> Varibles </option>
                <option id="2"> If Condition </option>
                <option id="3"> leap year </option>
                <option id="4"> Negative/Positive/Zero Number </option>
                <option id="5"> Prime Number </option>
            </select>
        <input id="submit" type="submit" value="Submit" name="Submit"/>
        </form>
        <div>
            
        </div>
    </body>
</html>

<!-- PHP Switch Logic Code  -->
<?php
switch (5) {
  case 1:
    echo "Variable (With 5 Method)";
    $a = 10;
    $b = 20;
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
  case 2:
      echo "Checkinng age";
      $age=20;
      if ($age==20) {
        echo"Age is 20";
}
      break;
  case 3:
      echo "Year is Leap Year or not";
      $my_year = 2022;
{
    if ($my_year % 400 == 0) {
                echo"It is a leap year";
            }
        if ($my_year % 4 == 0) {
            echo("It is a leap year");
            } else if ($my_year % 100 == 0) {
                echo("It is not a leap year");
            } else {
                echo("It is not a leap year");
            }
        }
      break;
  case 4:
      echo "Number is eithher +ve,-ve or 0";
      $x=-10;
      if ($x > 0)
    {$message = "Positive number";}
  if ($x == 0)
    {$message = "Zero";}
  if ($x < 0)
    {$message = "Negative number";}
  echo $message."\n";
         break;
    default:
         echo "Invalid Choice";
}
?>

