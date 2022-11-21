<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow, nosnippet">
<meta name="viewport" content="width=device-width">
<title>Walnut Ridge Wedding Rentals</title>

  <!--w3school-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script&display=swap" rel="stylesheet">

  <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
      
<body>

<!--https://getbootstrap.com/docs/4.0/components/navbar/-->
  <nav class="navbar navbar-expand-sm logo">
    <div class = "desc-wrapper">
      <a href="00_home.php">
        <img src="https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/4ee74135-1a9c-47a5-ad20-3c796b60ef0c/WRNEWLOGOnobkground.png?format=1500w" class="d-inline-block align-top logo" alt="Walnut Ridge Wedding Rentals" width=200px>
      </a>
    <!-- <p class style="white-space:pre-wrap">Pick Your Set</p> -->
    </div>
  </nav>

  <!--container-fluid-->
  <div class="container-fluid">

  <div class = "row">
      <div class = "col-lg-12 breadcrumbcontainer">
          <!-- breadcrumb -->
          <ol class = "breadcrumb">
            <li class = "breadcrumb-active breadcrumb-item">Set</li>
          </ol>
      </div>
    </div>
    
    <div class = "row">
      <div class = "col-lg-12">
        <h1>Reservation Contact</h1>
      </div> <!-- end of col --> 
    </div>  <!-- end of row -->
  </div> <!-- end of CF -->
  <div class = "row">
  <div class = "col-12">

  <!-- Contact/Area Container -->
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <form action="01_package.php"  method="post">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name" value=""></p>
        <p><select name="set" class="w3-input w3-padding-16 w3-border">
        <option value="Select Your Set">Select Your Set</option>
        <option value="Layered Arch">Layered Arch</option>
        <option value="Modern Rounds">Modern Rounds</option>
        <option value="Vintage Mirrors">Vintage Mirrors</option>
        <option value="Dark Walnut">Dark Walnut</option>
        <option value="Rustic Wood">Rustic Wood</option>
        </select>
        <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Email" required name="Email" value=""></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="tel" placeholder="Phone : 123-456-7891" required name="Phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value=""></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="date" placeholder="Date" required name="Date" value=""></p>
        <p><button class="w3-button w3-black" type="submit" style = "width:100%; margin-top: 25px; margin-bottom: 25px; font-weight: bold; font-size: 20px;">NEXT</button></p>
      </form> <!-- end of form --> 
    </div> <!-- end of w3 content -->
  </div> <!--  end of Container -->

  <!--Footer-->
  <div class = "row">
    <div class = "col footer-style">
      <div class = "contact">
        <a href="#">CONTACT US</a>
      </div> <!-- end of contact div -->
    <div class = "company">
      <p>WALNUT RIDGE LEATHER COMPANY<br>
      ORRVILLE, OHIO</p>
    </div> <!-- end of company div -->
    <div class = "email">
      <a href="mailto:Walnutreidgeleathercompany@gmail.com" target="_blank"><u>WALNUTRIDGELEATHERCOMPANY@GMAIL.COM</u></a>
    </div> <!-- end of email div --> 
  </div> <!--End row-->
</body>
</html>