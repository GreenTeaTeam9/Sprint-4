<?php

//order Number generator
$purchase = "";
$ePurchase = "";
// passing hiddens variables
$name = $_POST['moreName'];
$email = $_POST['moreEmail'];
$phone = $_POST['morePhone'];
$dates = $_POST['moreDate'];
$selection = $_POST['moreSelection'];
$month = $_POST['moreMonth'];
$price = $_POST['moreRadio'];
// delivery option
$delivery = $_POST['moreDelivery'];
$Addon = $_POST['moreAddon'];
$total = $_POST['moreTotal'];
$package = $_POST['morePackage'];

//The letter is generated based on what customer purchase
//Order Number generator
if($selection == 'Layered Arch')
{
    $purchase = "LA";
}
else if($selection == 'Modern Rounds')
{
    $purchase = "MR";
}
else if($selection == 'Vintage Mirrors')
{
    $purchase = "VM";
}
else if($selection == 'Dark Walnut')
{
    $purchase = "DW";
}
else if($selection == 'Rustic Wood')
{
    $purchase = "RW";
}
//generate a number based on what package a customer has.
if($package == 'Full DW Rental Set')
{
    $ePurchase = "FDWRS";
}
else if($package == 'Pick 4 Rental Set')
{
    $ePurchase = "P4RS";
}
else if($package == 'Full MR Rental Set')
{
    $ePurchase = "FMRRS";
}
else if($package == 'Pick 6 Rental Set')
{
    $ePurchase = "P6RS";
}

else if($package == 'Platinum VM Rental Set')
{
    $ePurchase = "PVMRS";
}
else if($package == 'Gold VM Rental Set')
{
    $ePurchase = "GVMS";
}
else if($package == '"No Seating” DW Rental')
{
    $ePurchase = "NSDWR";
}
else if($package == '"No Seating” RW Set')
{
    $ePurchase = "NSRWS";
}
//generate a number
$orderNumber = rand(0,100)."_".$purchase."_".$ePurchase;
$number = $orderNumber;


// delivery
if ($delivery == 'Delivery'){
    $Option = 'Your rental set will be delivery in the next 2 weeks!';
} elseif ($delivery == 'Pick Up'){
    $Option = 'You can pick your rental set in the next 2 days!';
}



$subject = "Reservation confirmation";


$message = 'Hello, '.$name. '<br>
        Thank you for shopping with us, your order #'.$number. '<br>
        Date: ' .$dates. '<br>
        Selection: '.$selection.'<br>
        Package: '.$package.'<br>
        Extra add on: '.$Addon. '<br>
        Delivery Option: '.$Option.'<br>
        Estimated Price w/o Tax: '.$total;


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <WALNUTRIDGELEATHERCOMPANY@GMAIL.COM>' . "\r\n";
$headers .= 'Cc: WALNUTRIDGELEATHERCOMPANY@GMAIL.COM' . "\r\n";

mail($email, $subject, $message, $headers);

// inserting data into SQL 
require '/home/greente1/db.php';
$username = 'greente1';
$password = 'z9s116[K(ZyPMu';
$hostname = 'localhost';
$database = 'greente1_reservation';

// inserting data into SQL 
require '/home/greente1/db.php';


// customer sql
$sql = "INSERT INTO `customer`(`customer_id`, `customer_name`, `email`, `phone`, `delivery`,`date`)
VALUES ('$orderNumber','$name','$email','$phone','$delivery','$dates');";
$result = @mysqli_query($cnxn, $sql);

// item set
$sql = "INSERT INTO `sets`(`set_selection`, `package`, `extra`, `price`, `customer_id`,`date`) 
VALUES ('$selection','$package','$Addon','$price','$orderNumber','$dates');";
$result = @mysqli_query($cnxn, $sql);


// put check function under insert queries. After a user completes the reservation process, the check function will check if the set is available.
$item = "set_selection";
$items = "extra";
$table = "sets";
$date = "$dates";

$count = checkItemDataOverlap($item,$table,$date, $selection);
//check extra
$countOne = checkItemDataOverlap($items,$table,$date,$Addon);

function checkItemDataOverlap($item,$table,$date , $selection) // returns a count of how many items overlap with this item on the given data range.
{
    global $cnxn;
    $start = date('Y-m-d', strtotime($date. '- 2 days'));
    $finish = date('Y-m-d',strtotime($date. ' + 2 days'));

    // A reservation is considered to last from the wedding date +/- 2 days( this may impact the SQL fields for "begin reservation" and "end reservation"
    $sql = "SELECT * FROM $table WHERE $item = '$selection' AND date BETWEEN '$start' AND '$finish'";

    $result = @mysqli_query($cnxn,$sql);
    $howmany = mysqli_num_rows($result);
    return  $howmany;
}

function setAvailable($selection, $count,$email, $headers)
{
    $noAvail = "Regarding Your Set";
    switch ($selection) 
    {
        case "Layered Arch":
            if($count == 0 || $count == 1)
            {
                echo "";
            }
            else
            {
                $noLA = 'Hey there, we are contacting you that the Layared Arch is currently not available at this time. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noLA , $headers);
            }
            break;
        case "Modern Rounds":
            if($count == 0 || $count == 1)
            {
                echo "";
            }
            else
            {
                $noMR = 'Hey there, we are contacting you that the Modern Round is currently not available at this time. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noMR , $headers);
            }
            break;
        case "Vintage Mirrors":
            if($count == 0 || $count == 1 || $count == 2)
            {
                echo "";
            }
            else
            {
                $noVM = 'Hey there, we are contacting you that the Vintage Mirror is currently not available at this time. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noVM , $headers);
            }
            break;
        case "Dark Walnut":
            if($count == 0 || $count == 1 || $count == 2)
            {
                echo "";
            }
            else
            {
                $noDW = 'Hey there, we are contacting you that the Dark Walnut is currently not available at this time. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noDW , $headers);
            }
            break;        
        case "Rustic Wood":
            if($count == 0 || $count == 1)
            {
                echo "";
            }
            elseif($count == 2)
            {
                echo "";
            }
            else
            {
                $noRW = 'Hey there, we are contacting you that the Rustic Wood is currently not available at this time. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noRW , $headers);
            }
            break;
        default:
            return "";
    }
}
    


/*
    This functions looks through the insert data in our sql. If the insert overlap with a date or set selection 1+ or 2+, it will notify the user's email
    to email us back regarding which item is not avaliable. 
*/
function extraAvailable($Addon, $countOne, $email, $headers)
{
    $noAvail = "Regarding Your Extra(s)";
   
    switch($Addon)
    {
        case "Hexagon Arch, ":
            if($countOne == 0 || $countOne == 1)
            {
                echo " ";
            }
            else
            {
                $noHexagon = 'Hey there, we are contacting you that the Hexagon extra is currently not available. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noHexagon , $headers);
                
            }
            break;
        case "Blue Antique Ball Jars Set, ":
            if($countOne == 0 || $countOne == 1)
            {
                echo "";
            }
            else
            {
                $noBlue = 'Hey there, we are contacting you that the Blue Antique Jars extra is currently not available. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noBlue , $headers);
            }
            break;
        case "Vintage Coach, ":
            if($countOne == 0 || $countOne == 1)
            {
                echo "";
            }
            else
            {
                $noVC = 'Hey there, we are contacting you that the Vintage Coach extra is currently not available. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noVC , $headers); 
            }
            break;
        case "Gallon Jugs Set, ":
            if($countOne == 0 || $countOne == 1)
            {
                echo "";
            }
            else
            {
                $noGallon = 'Hey there, we are contacting you that the Gallon Jugs extra is currently not available. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noGallon , $headers);
            }
            break;
        case "Antique Gallon Jugs Set, " :
            if($countOne == 0 || $countOne == 1)
            {
                echo "";
            }
            else
            {
                $noAntiqueGallons = 'Hey there, we are contacting you that the Antique Gallon Jugs extra is currently not available. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noAntiqueGallons , $headers);
            }
            /*
            break;
        case "Hexagon Arch, Blue Antique Ball Jars Set, ":
            if($countOne == 0 || $countOne == 1)
            {
                echo "";
            }
            else
            {
                $noHexagon = 'Hey there, we are contacting you that the Hexagon extra is currently not available. Please email
                us back regarding a different option';
                mail($email, $noAvail, $noHexagon , $headers);
            }

            break;
        case "Hexagon Arch, Vintage Coach, Blue Antique Ball Jars Set, " :
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Hexagon Arch, Vintage Coach, and Blue Antique Ball Jars Set are free and open </h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Hexagon Arch, Vintage Coach, and Blue Antique Ball Jars Set are not available at this time</h2>";
            }

            break;
        case "Hexagon Arch, Vintage Coach, Blue Antique Ball Jars Set, Antique Gallon Jugs Set, ":
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Hexagon Arch, Vintage Coach, Blue Antique Ball Jars Set, and Antique Gallon Jugs Set are free and open</h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Hexagon Arch, Vintage Coach, Blue Antique Ball Jars Set, and Antique Gallon Jugs Set  are not available at this time</h2>";
            }

            break;
        case "Hexagon Arch, Vintage Coach, " :
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Hexagon Arch and Vintage Coach are free and open</h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Hexagon Arch and Vintage Coach are not available at this time </h2>";
            }
            break;
        case "Hexagon Arch, Antique Gallon Jugs Set, " :
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Hexagon Arch and Antique Gallon Jugs Set are open and free</h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Hexagon Arch and Antique Gallon Jugs Set are not available at this time</h2>";
            }
            break;
        case "Vintage Coach, Blue Antique Ball Jars Set, ":
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Vintage Coach and Blue Antique Ball Jars Set are open and free</h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Vintage Coach and Blue Antique Ball Jars Set are not available at this time</h2>";
            }
            break;
        case "Blue Antique Ball Jars Set, Antique Gallon Jugs Set, " :
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Blue Antique Ball Jars Set and Antique Gallon Jugs Set are open and free.</h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Blue Antique Ball Jars Set and Antique Gallon Jugs Set are not available at this time.</h2>";
            }
            break;
        case "Vintage Coach, Antique Gallon Jugs Set, " :
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Vintage Coach and Antique Gallon Jugs Set are open</h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Vintage Coach and Antique Gallon Jugs Set are not available at this time.</h2>";
            }
            break;
        case "Vintage Coach, Blue Antique Ball Jars Set, Antique Gallon Jugs Set, ";
            if($countOne == 0 || $countOne == 1)
            {
                echo " <h2 class = ' text-center'> Vintage Coach, Blue Antique Ball Jars Set, and Antique Gallon Jugs Set are open</h2>";
            }
            else
            {
                echo " <h2 class = ' text-center'> Vintage Coach, Blue Antique Ball Jars Set, and Antique Gallon Jugs Set are not available at this time.</h2>";
            }
            break;
            */
        default:  echo "";

    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width">
    <title>Walnut Ridge Wedding Rentals - Reserve</title>

    <!--w3school-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script&display=swap" rel="stylesheet">

    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!--https://getbootstrap.com/docs/4.0/components/navbar/-->
<nav class="navbar navbar-expand-sm logo" style = "background-image: url('https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1656358274577-CTWSSK9U5YD1UDC5BN85/JM1_5903.jpg?format=2500w');">
    <div class = "desc-wrapper">
        <a href="00_home.php"> <img src="https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/4ee74135-1a9c-47a5-ad20-3c796b60ef0c/WRNEWLOGOnobkground.png?format=1500w" class="d-inline-block align-top logo" alt="Walnut Ridge Wedding Rentals" width=200px>
        </a>
        <!-- <p class style="white-space:pre-wrap">Pick Your Set</p> -->
    </div>
</nav>

<!--container-fluid-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Thank You</h1>
            <?php
            setAvailable($selection, $count,$email, $headers);
            extraAvailable($Addon, $countOne, $email, $headers);
            if (empty($selection) || empty($email) || empty($dates) || ($count >1 && $selection == "Layered Arch") || ($count >1 && $selection == "Modern Rounds") || ($count >2 && $selection == "Vintage Mirrors") || ($count >2 && $selection == "Dark Walnut") || ($count >2 && $selection == "Rustic Wood") )
            {
                echo
                "<div class='row'>
                <div class = 'col-12 text-center'> 
                <p>Thank you, <strong> $name </strong>. <br> Your reservation number is: <strong>$number</strong> 
                <br> We sent an email to <strong>$email</strong> in regards to your reservation.
                <br> We look forward to hearing back from you and to discuss some alternatives. 
                </p>    
                <br>
                ";
                echo '<h1>Follow Us</h1>
                <a href="https://twitter.com/home" target = "_blank" "><ion-icon name = "logo-twitter" class = "icon"></ion-icon></a>
                <a href="https://www.instagram.com/" target = "_blank"><ion-icon name = "logo-instagram" class = "icon"></ion-icon></a>
                <br>         
                </div> ';
            }
            elseif(($Addon == "Hexagon Arch, " && $countOne > 1) || ($Addon == "Blue Antique Ball Jars Set, " && $countOne > 1) || ($Addon == "Vintage Coach, " && $countOne > 1)  || ($Addon == "Gallon Jugs Set, " && $countOne > 1)  || ($Addon == "Antique Gallon Jugs Set, " && $countOne > 1)  || ($Addon == "Hexagon Arch, Blue Antique Ball Jars Set, " && $countOne > 1)  || ($Addon == "Hexagon Arch, Vintage Coach, Blue Antique Ball Jars Set, " && $countOne > 1)  || ($Addon == "Hexagon Arch, Vintage Coach, Blue Antique Ball Jars Set, Antique Gallon Jugs Set, " && $countOne > 1)  || ($Addon == "Hexagon Arch, Vintage Coach, " && $countOne > 1)  || ($Addon == "Hexagon Arch, Antique Gallon Jugs Set, " && $countOne > 1)  || ($Addon == "Vintage Coach, Blue Antique Ball Jars Set, " && $countOne > 1)  || ($Addon == "Blue Antique Ball Jars Set, Antique Gallon Jugs Set, " && $countOne > 1)  || ($Addon == "Vintage Coach, Antique Gallon Jugs Set, " && $countOne > 1)  || ($Addon == "Vintage Coach, Blue Antique Ball Jars Set, Antique Gallon Jugs Set, " && $countOne > 1))
            {
                echo
                "<div class='row'>
                <div class = 'col-12 text-center'> 
                <p>Thank you, <strong> $name </strong>. <br> Your reservation number is: <strong>$number</strong> 
                <br> We sent an email to <strong>$email</strong> in regards to your reservation.
                <br> We look forward to hearing back from you and to discuss some alternatives. 
                </p>    
                <br>
                ";
                echo '<h1>Follow Us</h1>
                <a href="https://twitter.com/home" target = "_blank" "><ion-icon name = "logo-twitter" class = "icon"></ion-icon></a>
                <a href="https://www.instagram.com/" target = "_blank"><ion-icon name = "logo-instagram" class = "icon"></ion-icon></a>
                <br>         
                </div> ';
                
            }            
            else 
            {
                echo
                "<div class='row'>
                <div class = 'col-12 text-center'> <p>Thank you, <strong> $name </strong>. <br> Your order number is: <strong>$number</strong> 
                <br>
                We sent an email confirmation to <strong>$email</strong> and 
                <br>We will contact you in 7-12 business days <br>Email us at WALNUTRIDGELEATHERCOMPANY@GMAIL.COM <br>with any questions or
                suggestions.</p>    
                <br>
                ";
                echo '
                    <h1>Follow Us</h1>
                    <a href="https://twitter.com/home" target = "_blank" "><ion-icon name = "logo-twitter" class = "icon"></ion-icon></a>
                    <a href="https://www.instagram.com/" target = "_blank"><ion-icon name = "logo-instagram" class = "icon"></ion-icon></a>
                    <br>         
                    </div> ';
            }

            ?>
        </div>
    </div>
</div> <!--End container-fluid-->

<!--Slide Show-->
<div class="col-12">
    <div id="slider">
    </div>
</div>

<!--Footer-->
<div class = "row">
    <div class = "col footer-style">
        <div class = "contact">
            <a href="#">CONTACT US</a>
        </div>
        <div class = "company">
            <p>WALNUT RIDGE LEATHER COMPANY<br>
                ORRVILLE, OHIO</p>
        </div>
        <div class = "email">
            <a href="mailto:Walnutreidgeleathercompany@gmail.com" target="_blank"><u>WALNUTRIDGELEATHERCOMPANY@GMAIL.COM</u></a>
        </div>
    </div>
</div>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
