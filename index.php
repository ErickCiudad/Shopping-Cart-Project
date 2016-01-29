

<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=mydb', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = "";
// form one
    if(empty($_POST['email']))
    {
        $errorMessage = "<li>You forgot to enter your email.</li>";
    }
    if(empty($_POST['name_first']))
    {
        $errorMessage = "<li>You forgot to enter your name.</li>";
    }
    if(empty($_POST['password']))
    {
        $errorMessage = "<li>You forgot to enter a password.</li>";
    }
    if(empty($_POST['card_name']))
    {
        $errorMessage = "<li>You forgot to enter a name.</li>";
    }
    if(empty($_POST['card_number']))
    {
        $errorMessage = "<li>You forgot to enter your card number.</li>";
    }
    if(empty($_POST['card_expdate']))
    {
        $errorMessage = "<li>You forgot to enter your expiration date.</li>";
    }
    if(empty($_POST['card_security']))
    {
        $errorMessage = "<li>You forgot to enter your security.</li>";
    }
    $stmt = $dbh->prepare("INSERT INTO contact (email, name_first, password, card_name, card_number, card_expdate, card_security)
      VALUES (:email, :name_first, :password, :card_name, :card_number, :card_expdate, :card_security)");
    $result = $stmt->execute(array
    (
        'email'=>$_POST['email'],
        'name_first'=>$_POST['name_first'],
        'password'=>$_POST['password'],
        'card_name'=>$_POST['card_name'],
        'card_number'=>$_POST['card_number'],
        'card_expdate'=>$_POST['card_expdate'],
        'card_security'=>$_POST['card_security']
    ));
    if(!$result){
        print_r($stmt->errorInfo());
    }
    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }
}?>


