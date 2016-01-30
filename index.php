

<?php
try {
    //$dbh = new PDO('mysql:host=127.0.0.1;dbname=mydb', 'root', 'root');
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
    $stmt = $dbh->prepare("INSERT INTO users (email, name_first, password, card_name, card_number, card_expdate, card_security)
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

<!DOCTYPE html>
<html>
<head>
    <title>Instruments Online</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div id="header">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </a></li>
        <li role="presentation"><a href="#">Contact Us</a></li>
    </ul>
</div>

<div id="content">
    <table id="products" border="100px">
    <tr>
        <td><img src="https://s-media-cache-ak0.pinimg.com/236x/23/9a/64/239a640191cdf50f386e54f4cab38f0d.jpg" width="250px" height="300px"></td>
        <td><img src="http://www.ozwinds.com.au/images/YRS-24B-700.jpg" width="250px" height="300px"></td>
        <td><img src="http://westmusic.cachefly.net/getDynamicImage.aspx?w=800&h=800&b=00ffffff&path=Studio-49-1600-Series-AX-1600-Rosewood-Alto-Diatonic-Xylophone.jpg" width="250px" height="300px"></td>
    </tr>
        <tr>
            <td><img src="http://drumshopglasgowonline.co.uk/images/CP221DWBongos.jpg" width="250px" height="300px"></td>
            <td><img src="http://www.raleighmusiclessons.com/wp-content/uploads/2013/06/DV016_Jpg_Large_H73551_violin_and_bow.jpg" width="250px" height="300px"></td>
            <td><img src="http://maton.com.au/assets/images/acoustic_product_MINID_2.jpg" width="250px" height="300px"></td>
        </tr>
        <tr>
            <td><img src="" width="250px" height="300px"></td>
            <td><img src="" width="250px" height="300px"></td>
            <td><img src="" width="250px" height="300px"></td>
        </tr>
        <tr><td>piano</td></tr>
    </table>
</div>
<div id="footer"><p>foot</p></div>


</body>
</html>



