

<?php
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=mydb', 'root', 'root');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = null;
// form one
    if(empty($_POST['email']))
    {
        $errorMessage = "You forgot to enter your email.";
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

    if(!$errorMessage) {
        $stmt = $dbh->prepare("INSERT INTO users (email, name_first, password, card_name, card_number, card_expdate, card_security)
      VALUES (:email, :name_first, :password, :card_name, :card_number, :card_expdate, :card_security)");
        $result = $stmt->execute(array
        (
            'email' => $_POST['email'],
            'name_first' => $_POST['name_first'],
            'password' => $_POST['password'],
            'card_name' => $_POST['card_name'],
            'card_number' => $_POST['card_number'],
            'card_expdate' => $_POST['card_expdate'],
            'card_security' => $_POST['card_security']
        ));
    }
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
        <li role="presentation" class="" onclick="changeHome()"><a href="#">Home</a></li>
        <li role="presentation" onclick="changeShop()"><a href="#">Shop</a></li>
        <li role="presentation" onclick="changeCart()"><a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            </a></li>
        <li role="presentation" onclick="changeSignUp();"><a href="#">Sign Up</a></li>
        <li role="presentation" onclick="changeLogin()"><a href="#">Login</a></li>
        <li role="presentation" onclick="changeContactUs()"><a href="#">Contact Us</a></li>
        <h1>Instruments Online</h1>
    </ul>
</div>

<div id="content">




    <table id="products" border="100px">
    <tr>
        <td><img id="instrumentPic"  src="https://s-media-cache-ak0.pinimg.com/236x/23/9a/64/239a640191cdf50f386e54f4cab38f0d.jpg" width="250px" height="300px"></td>
        <td><img id="instrumentPic" src="http://www.ozwinds.com.au/images/YRS-24B-700.jpg" width="250px" height="300px"></td>
        <td><img  id="instrumentPic" src="http://westmusic.cachefly.net/getDynamicImage.aspx?w=800&h=800&b=00ffffff&path=Studio-49-1600-Series-AX-1600-Rosewood-Alto-Diatonic-Xylophone.jpg" width="250px" height="300px"></td>
    </tr>
        <tr>
            <td><img  id="instrumentPic" src="http://drumshopglasgowonline.co.uk/images/CP221DWBongos.jpg" width="250px" height="300px"></td>
            <td><img id="instrumentPic" src="http://www.raleighmusiclessons.com/wp-content/uploads/2013/06/DV016_Jpg_Large_H73551_violin_and_bow.jpg" width="250px" height="300px"></td>
            <td><img id="instrumentPic" src="http://maton.com.au/assets/images/acoustic_product_MINID_2.jpg" width="250px" height="300px"></td>
        </tr>
        <tr>
            <td><img id="instrumentPic" src="https://www.engr.colostate.edu/~echong/images/SA500.jpg" width="250px" height="300px"></td>
            <td><img  id="instrumentPic" src="https://brucemusicstore.com/dynamic/2015/08/91b4eb129c2ce40a4658b70081b2f48a.image_.550x550.jpg" width="250px" height="300px"></td>
            <td><img id="instrumentPic"  src="http://s3.lonestarpercussion.com/resize/images/Gretsch/Gretsch-GBJ683SM-full.jpg" width="250px" height="300px"></td>
        </tr>
        <tr>
            <td><img  id="instrumentPic" src="http://quirkyberkeley.com/wp-content/uploads/2014/02/Red-Hohner.jpg" width="250px" height="300px"></td>
            <td><img  id="instrumentPic" src="http://cdn1.bigcommerce.com/server600/h6qlog4f/products/74/images/379/trumpet_gold_1__51792.1358323252.1280.1280.jpg?c=2" width="250px" height="300px"></td>
            <td><img id="instrumentPic" src="http://www.amromusic.com/assets/1942/steinway-b-grand-new-ebony-1.jpg" width="250px" height="300px"></td>

        </tr>
    </table>
</div>

<table id="productsInfo">
    <tr>
        <td>a</td>
        <td></td>
        <td>a</td>
    </tr>
    <tr>
        <td>a</td>
        <td>a</td>
        <td>a</td>
    </tr>
    <tr>
        <td>a</td>
        <td>a</td>
        <td>a</td>
    </tr>
    <tr>
        <td>a</td>
        <td>a</td>
        <td>a</td>
    </tr>
</table>

<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_POST['formSubmit'] == "Submit")
{
    $varEmail = $_POST['index.php'];
}

?>

<div id="signUp">
    <form style="text-align: center; color:black" action="connect.php">
        <input name="email" type="text" placeholder="email">
        <input name="name_first" type="text" placeholder="first name">
        <input name="password" type="text" placeholder="password">
        <input name="card_name" type="text" placeholder="card name">
        <input name="card_number" type="text" placeholder="card number">
        <input name="card_expdate" type="text" placeholder="card expiration date">
        <input name="card_security" type="text" placeholder="card security">
        <input type="submit" name="formSubmit" value="Submit">
    </form>

    <p>Welcome</p> <?php echo $_POST["name_first"]; ?>
    <p>Your email address is:</p> <?php echo $_POST['email'];?>
</div>

<div id="cart">cart</div>

<div id="login">
    <form style="text-align: center; color:black">
        <input name="email" type="text" placeholder="email">
        <input name="password" type="text" placeholder="password">
    </form>
</div>

<div id="contactUs">contact us</div>

<div id="shop">shop</div>




<!--
<form>
    <input name="name_first" type="text" placeholder="first name">
</form>

<form>
    <input name="password" type="text" placeholder="password">
</form>

<form>
    <input name="card_name" type="text" placeholder="card name">
</form>

<form>
    <input name="card_number" type="text" placeholder="card number">
</form>

<form>
    <input name="card_expdate" type="text" placeholder="card expiration date">
</form>

<form>
    <input name="card_security" type="text" placeholder="card security">
</form>
-->


<div id="footer"><p>   Copyright &copy; 2016 Erick Ciudad
    </p></div>



<script src="scripts.js"></script>

</body>
</html>



