<!-- $_GET , $_POST , $_REQUEST  Implementation-->

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$mode = $_POST['mode'];
$technology = $_POST['technology'];

echo "Hello, <b>$name</b> <br>";
echo "<br>your Email : <b>$email</b>";
echo "<br>Branch : <b>$branch</b>";
echo "<br>Mode : <b>$mode</b>";
echo "<br>Selected Technology : <b>$technology</b>";