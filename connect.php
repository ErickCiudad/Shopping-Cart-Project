
<?php

/*try {
    $dbh = new PDO('mysql:host=localhost;dbname=reservations', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";}*/

require_once('connect.php');
$error = false;
$success = false;

// Retrieve all the data from the "example" table
$result = mysql_query("INSERT * F mydb.products")
or die(mysql_error());

// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry

echo "email: ".$row['email'];
echo " name_first: ".$row['name_first'];
?>


