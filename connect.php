
<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=mydb', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";}

//require_once('connect.php');
$error = false;
$success = false;

// Retrieve all the data from the "example" table
//$result = mysql_query("INSERT * F mydb.users")
//or die(mysql_error());



echo "We're tryign to save this: ".$_GET['name_first'];
echo "We're tryign to save this: ".$_GET['email'];


$name_first = $_GET['name_first'];
$email = $_GET['email'];
$password = $_GET['password'];
$card_name = $_GET['card_name'];
$card_number = $_GET['card_number'];
$card_expdate = $_GET['card_expdate'];
$card_security = $_GET['card_security'];



$sql = "INSERT INTO users (name_first, email, password, card_name, card_number, card_expdate, card_security)
VALUES ('$name_first' , '$email', '$password', '$card_name', '$card_number', '$card_expdate', '$card_security')";

$dbh->exec($sql);


echo $_GET['name_first'];

$result = mysql_query("INSERT * F mydb.users");


//echo "Success!";
// store the record of the "example" table into $row
$row = mysql_fetch_array( "result ".$result );
$row = mysql_fetch_array("dbh ". $sql );
// Print out the contents of the entry

echo "email: ".$row['email'];
echo " name_first: ".$row['name_first'];
?>


