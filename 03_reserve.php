<?php
// passing hiddens variables 
$name = $_POST['extraName'];
$email = $_POST['extraEmail'];
$phone = $_POST['extraPhone'];
$dates = $_POST['extraDate'];
$selection = $_POST['extraSelection'];
$month = $_POST['extraMonth'];
$month = date("F", mktime(0, 0, 0, $month, 10));
$price = $_POST['extraRadio'];
// delivery option
$delivery = $_POST['Delivery'];
$package = $_POST['extraPackage'];
//upgrade - else if 
if(isset($_POST['Upgrade']) && $selection =="Layered Arch") {
  $package = "Full LA Rental Set";
} 
if (isset($_POST['Upgrade']) && $selection =="Modern Rounds") {
  $package = "Full MR Rental Set";
} 
if (isset($_POST['Upgrade']) && $selection =="Vintage Mirrors") {
  $package = "Platinum VM Rental Set";
} 
if (isset($_POST['Upgrade']) && $selection =="Dark Walnut") {
  $package = "Full DW Rental Set";
} 
if (isset($_POST['Upgrade']) && $selection =="Rustic Wood") {
  $package = 'Full RW Rental Set';
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script&display=swap" rel="stylesheet">

  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <!--https://getbootstrap.com/docs/4.0/components/navbar/-->
  <nav class="navbar navbar-expand-sm logo" style = "background-image: url('https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1632275937036-GM4929A1P23TARNVLENE/_DSC0699.JPG?format=2500w');"> 

  <div class = "desc-wrapper">
    <a href="00_home.php"> <img src="https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/4ee74135-1a9c-47a5-ad20-3c796b60ef0c/WRNEWLOGOnobkground.png?format=1500w" class="d-inline-block align-top logo" alt="Walnut Ridge Wedding Rentals" width=200px>
    </a>
  </div>
  </nav> <!-- end nav -->

  
  <div class = "row">
        <div class = "col-lg-12 breadcrumbcontainer">
            <!-- breadcrumb -->
            <ol class = "breadcrumb">
                <li class = "breadcrumb-item"><a href = "00_home.php" class = "bread-link">Set</a></li>
                <li class = "breadcrumb-item"><a href = "01_package.php" class = "bread-link">Packages</a></li>
                <li class = "breadcrumb-item"><a href = "02_extras.php" class = "bread-link">Extras</a></li>
                <li class = "breadcrumb-active breadcrumb-item">Confirmation</li>
            </ol>
        </div>
        </div>
        


  <!-- Contact/Area Container -->
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <!--form-container  -->
      <form action = "04_confirm.php" method = "post">
        <h1>Confirmation</h1>

        <?php //sum calculation of price
        //extras add on
        $hexagonPrice = $_POST['Hexagon'];
        $jarsPrice = $_POST['Jars'];
        $coachPrice = $_POST['Coach'];
        $jugsPrice = $_POST['Jugs'];
        //upgrade to 
        $upgradePrice = $_POST['Upgrade'];

        // array list
        $arrayList = array($price, $hexagonPrice, $jarsPrice, $coachPrice, $jugsPrice,$upgradePrice );
        $AddOn = "";

        if(isset($_POST['Hexagon']) &&
        $_POST['Hexagon'] == '350')
        {
        $AddOn .= "Hexagon Arch, ";
        }
        if(isset($_POST['Coach']) &&
        $_POST['Coach'] == '99')
        {
        $AddOn .= "Vintage Coach, ";
        }
        if(isset($_POST['Jars']) &&
        $_POST['Jars'] == '750')
        {
        $AddOn .= "Blue Antique Ball Jars Set, ";
        }
        if(isset($_POST['Jugs']) &&
        $_POST['Jugs'] == '48')
        {
        $AddOn .= "Antique Gallon Jugs Set, ";
        }
        if(isset($_POST['upgrade']))
        {
        $AddOn .= "Upgrade to Full-Set, ";
        }



        if (empty($selection) || empty($email) || empty($dates)){
          echo '<h2 class="text-center">Invalid Access, to make a reservation navigate back to <a href = "00_home.php">Home</a></h2> ';
        }else{
            $total = '$'.array_sum($arrayList);
            echo '<h6>Name: '.$name.'</h6>
        <h6>Email: '.$email.'</h6>
        <h6>Phone: '.$phone.'</h6>
        <h6>Date: '.$dates.'</h6>
        <h6>Month: '.$month.'</h6>
        <h6>Selection: '.$selection.'</h6>
        <h6>Package: '.$package.'</h6>
        <h6>Extra add on: '.$AddOn.'</h6>
        <h6>Delivery Option: '.$delivery.'</h6>
        <h6>Estimated Price w/o Tax: '.$total.'</h6>
        <button class="w3-button w3-black" type="submit" style = "width:100%; margin-top: 25px; margin-bottom: 25px; font-weight: bold; font-size: 20px;">CONFIRM RESERVATION</button></p>';
        }

        ?>
        <?php // hidden values

        echo '<input type = "hidden" name="moreName" value="'.$name.'">';
        echo '<input type = "hidden" name="moreEmail" value="'.$email.'">';
        echo '<input type = "hidden" name="morePhone" value="'.$phone.'">';
        echo '<input type = "hidden" name="moreDate" value="'.$dates.'">';
        echo '<input type = "hidden" name="moreSelection" value="'.$selection.'">';
        echo '<input type = "hidden" name="moreMonth" value = "'.$month.'">';
        echo '<input type = "hidden" name="moreRadio" value = "'.$price.'">';
        echo '<input type = "hidden" name="moreAddon" value = "'.$AddOn.'">';
        echo '<input type = "hidden" name="moreDelivery" value = "'.$delivery.'">';
        echo '<input type = "hidden" name="moreTotal" value = "'.$total.'">';
        echo '<input type = "hidden" name="morePackage" value = "'.$package.'">';
        ?>

      </form> <!-- end of form -->
    </div> <!-- end of w3 content -->
  </div> <!--  end of Container -->

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


</body>
</html>