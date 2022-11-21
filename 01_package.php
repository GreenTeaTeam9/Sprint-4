<?php
// passing hiddens variables 
$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$date = $_POST['Date'];
$selection = $_POST['set'];
$dates = date("Y-m-d", strtotime($date));
$month  = date("m",strtotime($dates));




?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex, nofollow, nosnippet">
  <meta name="viewport" content="width=device-width">
  <title>Walnut Ridge Wedding Rentals - Package</title>

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
  <nav class="navbar navbar-expand-sm logo" style = "background-image: url('https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/44671419-2cc7-49cf-9a2d-50797b5ef6fd/JM1_5129.jpg?format=2500w');">
    <div class = "desc-wrapper">
      <a href="00_home.php"> <img src="https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/4ee74135-1a9c-47a5-ad20-3c796b60ef0c/WRNEWLOGOnobkground.png?format=1500w" class="d-inline-block align-top logo" alt="Walnut Ridge Wedding Rentals" width=200px>
      </a>
    <!-- <p class style="white-space:pre-wrap">Pick Your Set</p> -->
    </div> <!-- end of div wrapper -->
  </nav> <!-- end of nav -->

  <!--container-fluid-->
  <div class="container-fluid">

  <div class = "row">
        <div class = "col-lg-12 breadcrumbcontainer">
              <!-- breadcrumb -->
            <ol class = "breadcrumb">
              <li class = "breadcrumb-item"><a href = "00_home.php" class = "bread-link">Set</a></li>
              <li class = "breadcrumb-active breadcrumb-item">
              Packages</li>
          </ol>
        </div>
      </div>
      
    <form method="post" action="02_extras.php">
      <div class = "row">
        <div class = "col-12 package-content">
        <!-- adding content pakages option -->
        <!-- php -->
        <?php // start of else if PHP 
        if($selection =="Layered Arch") {
        //Layered Arch Div
        echo'
        <!-- Display pieces -->
        <div class = "col-lg-12">
        <h1>Layer Arch Rental Pieces</h1>
          <ul class="no-bullet">
            <li>Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)</li>
            <li>3 piece seating chart half arch set (print service for cards is available for a small additional fee)</li>
            <li>Table numbers 1-30</li>
            <li>Gold Card Terrarium with choice of “Gifts & Cards” sign</li>
            <li>5 “Reserved” signs</li>
            <li>Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Dont Mind if I Do,” “In Loving Memory”)</li>
            <li>Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</li>
            <li>1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</li>
            <li>1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</li>
            <li>Unplugged Ceremony sign</li>
            <li>Hairpin Record Player Prop</li>
            <li>Mr & Mrs Custom Head Table Keepsake is a free gift in addition to the items above</li>
          </ul>
        </div>
        <h1>Pick Your Package</h1>
          <!-- First Package -->
          <input type="radio" id = "layered849" name="radio" value="849">
          <label for="layered849"><h5>FULL SET Rental $849</h5></label><br>
          <!-- Third Package -->

          <input type="radio" id = "layered699" name="radio" value="699">
          <label for="layered699"><h5>PICK 4 Rental $699</h5></label><br>
        ';
        
        }elseif ($selection =="Modern Rounds") {
        // Modern Round 
        echo'
          <!-- Modern Round Pieces --->
          <div class = "col-lg-12">
          <h1>Modern Round Rental Pieces</h1>
            <ul class="no-bullet">
              <li>Large Custom Welcome (round center becomes a keepsake)</li>
              <li>Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</li>
              <li>1-30 free standing table numbers</li>
              <li>Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</li>
              <li>Set of “Reserved” signs (5)</li>
              <li>2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</li>
              <li>2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,</li>
              <li>1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</li>
              <li>All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</li>
            </ul>
          </div>

          <!-- First Package -->
          <input type="radio" id = "modern799" name="radio" value="799">
          <label for="modern799"><h5>Full Set Rental $799</h5></label><br>

          <!-- Second Package -->
          <input type="radio" id = "modern699" name="radio" value="699">
          <label for="modern699"><h5>Pick 6 Rental $699</h5>
          </label><br>

          <!-- Third Package -->
          <input type="radio" id = "modern599" name="radio" value="599">
          <label for="modern599"><h5>Pick 4 Rental $599</h5>
          </label><br>
          ';
        }elseif ($selection=="Vintage Mirrors") {
          // Vintage Mirror
          echo'
          <!-- Vintage Mirror Pieces --->
          <div class = "col-lg-12">
          <h1>Vintage Mirror Rental Pieces</h1>
              <ul class="no-bullet">
              <li>Welcome Sign with custom names & date & large wrought iron easel</li>
              <li>Antique Typewriter Rental with customized message (100 words or less)</li>
              <li>Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</li>
              <li>Table Numbers 1-30</li>
              <li>Leather Domed Trunk with “cards” mirror with stand</li>
              <li>“Enjoy the Moment- no photography please” mirror with stand</li>
              <li>“Guestbook” mirror with stand</li>
              <li>“Take One” small vanity mirror</li>
              <li>1 Large Full Custom Mirror (50 words or less) with large wrought iron easel</li>
              <li>1 Medium Full Custom Mirror (20 words or less)  with large wrought iron easel</li>
              <li>1 Small Custom Mirror (10 words or less) with wrought iron easel</li>
            </ul>
          </div>

          <input type="radio" id = "vintage849" name="radio" value="849">
          <label for="vintage849"><h5>Vintage Mirror Platinum Package Rental $849</h5>
          </label><br>
          <input type="radio" id = "vintage649" name="radio" value="649">
          <label for="vintage649"><h5>Vintage Mirror Gold Package Rental $649</h5>
          </label><br>
          '; 
        }elseif($selection=="Dark Walnut") {
          //Dark Walnut 
          echo '
          <!-- Dark Walnut Pieces --->
          <div class = "col-lg-12">
          <h1>Dark Walnut Rental Pieces</h1>
            <ul class="no-bullet">
              <li>“Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</li>
              <li>Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc) </li>
              <li>“Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</li>
              <li>“We know that you would be here today if Heaven weren’t so far away” <br>(10” x 10.5” memorial sign or seat saver with small easel)</label><br>
              <li>“Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</li>
              <li>“Find your Seat” (35.5” x 21” organizer with 30 clips & easel)</li>
              <li>Table Numbers, double-sided (Numbers 1-30, 3.5” x 9”)</li>
              <li>“Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</li>
              <li>“Better” & “Together” Chair Hangers (with cord 10.25” x 17.25”) (2pc)</li>
              <li>“Please Sign our Guestbook” (self standing 7.25” x 16”)</li>
              <li>“Just Married” & “Thank You” (reversible photo-shoot prop 7.25” x 31”)</li>
              <li>“Take One” (7.25” x 7.25”)</li>
              <li>“Programs” (7.25” x 16”)</li>
              <li>“Enjoy the Moment, no photography please” 10.5” x 17” with small easel</li>
              <li>8 Reserved signs (3.5” x 12”  4 with cord hanger option) (8pc)</li>
              <li>Antique Leather and Wooden Trunk with “Cards” Banner</li>
            </ul>
          </div>
          <input type="radio" id = "dark299" name="radio" value="299"> 
          <label for="dark299"><h5>Dark Walnut Full Package Rental $299</h5>
          </label><br>

          <input type="radio" id = "dark245" name="radio" value="245">
          <label for="dark245"><h5>Dark Walnut “No Seating” Rental $245</h5>
          </label><br>
        ';
  
        }elseif($selection=="Rustic Wood") {
        // Rustic Wood 
        echo '
        <!-- Rustic Wood --->
        <div class = "col-lg-12">
          <h1>Rustic Wood Rental Pieces</h1>
          <ul class="no-bullet">
            <li>“Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</li>
            <li>“Find your Seat” (32.5” x 18.5” framed organizer with 25 clips & easel) </li>
            <li>Table Numbers (1-25 3.5”x 3.5” with mini easels) (50 pc)</li>
            <li>Antique Glass Jug with “Honeymoon Fund” (jug & mini- hanger 4.75”x 10”) (2pc)</li>
            <li>“Mr. & Mrs.” Head Table Blocks (3pc)</li>
            <li>“We know that you would be here today if Heaven weren’t so far away” (9.75” x 16” framed memorial seat saver)</li>
            <li>Here Comes Your Bride” ring bearer carrier (9.75 x 15” framed with cord)</li>
            <li>“Mr. & Mrs.” Chair Hangers (with cord 9.75” x 15”) (2pc)</li>
            <li> “Guestbook please sign” (self standing 5.5” x 20”)</li>
            <li>“Just Married” & “Thank You” (Reversible photo-shoot prop 5.5” x 29.5”)</li>
            <li>"Take One” (5.5” x 6”)</li>
            <li>“Programs” (15.75” x 5.5”)</li>
            <li>“In Loving Memory of those who are forever in our hearts” (6”x 5.5” self standing)</li>
            <li>8 “Reserved” signs (2.75” x 10” 4 with cord hanger option) (8pc)</li>
            <li>Antique Whitewashed Trunk with “Cards” Banner</li>
          </ul>
        </div> 

        <input type="radio" id = "rustic299" name="radio" value="299">
        <label for="rustic299"><h5>Rustic Wood Full Package Rental $299</h5>
        </label><br>

        <input type="radio" id ="rustic245" name="radio" value="245">
        <label for="rustic245"><h5>Rustic Wood “No Seating” Rental $245</h5>
        </label><br>
        ';
        } else {
            if (empty($selection) || empty($price) || empty($dates)){
              echo '<p class="text-center">Invalid Access, to make a reservation navigate back to <a href = "00_home.php">Home</a></p1> ';
            } else {
              echo
              '<div class = "errormessage">
                <p>Sorry, this set is currently unavailable at this time, <a href = "00_home.php"> Click here to Return</a></p>
              </div>';
            }
         // end error message
        }

        ?> <!-- End of PHP for else if-->
        <?php // hidden values
        echo '<input type = "hidden" name="packageName" value="'.$name.'">';
        echo '<input type = "hidden" name="packageEmail" value="'.$email.'">';
        echo '<input type = "hidden" name="packagePhone" value="'.$phone.'">';
        echo '<input type = "hidden" name="packageDate" value="'.$dates.'">';
        echo '<input type = "hidden" name="packageSelection" value="'.$selection.'">';
        echo '<input type = "hidden" name="packageMonth" value="'.$month.'">';
        ?>
      </div> <!-- end row div -->

      <div class = "row">
        <div class = "col-12 nextbutton">
          <center>
            <button id ="button1" class="w3-button w3-black" type="submit" style = "width:100%; font-weight: bold; font-size: 20px;">
              NEXT
            </button>
          </center>
        </div> <!-- enf of div next button -->
      </div><!-- end row -->
    </form> <!-- end of form --> 
  </div> <!-- end of div container -->

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