<?php

// passing hiddens variables 
$name = $_POST['packageName'];
$email = $_POST['packageEmail'];
$phone = $_POST['packagePhone'];
$dates = $_POST['packageDate'];
$selection = $_POST['packageSelection'];
$month  = $_POST['packageMonth'];
$price = $_POST['radio']; // pick up or no pick up
$package = '';

// passing else if package from package.php

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow, nosnippet">
    <meta name="viewport" content="width=device-width">
    <title>Walnut Ridge Wedding Rentals - Extra</title>

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
    <nav class="navbar navbar-expand-sm logo" style = "background-image: url('https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1641339958956-BPPM6K9WWU37ZG49162W/OliviaMark-297.jpg?format=2500w');">
        <div class = "desc-wrapper">
            <a href="00_home.php"> <img src="https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/4ee74135-1a9c-47a5-ad20-3c796b60ef0c/WRNEWLOGOnobkground.png?format=1500w" class="d-inline-block align-top logo" alt="Walnut Ridge Wedding Rentals" width=200px>
            </a>
        </div>
    </nav>

    <!--container-fluid-->
    <div class="container-fluid">

    <div class = "row">
        <div class = "col-lg-12 breadcrumbcontainer">
            <!-- breadcrumb -->
            <ol class = "breadcrumb">
                <li class = "breadcrumb-item"><a href = "00_home.php" class = "bread-link">Set</a></li>
                <li class = "breadcrumb-item"><a href = "01_package.php" class = "bread-link">Packages</a></li>
                <li class = "breadcrumb-active breadcrumb-item">Extras</li>
            </ol>
        </div>
        </div>
        
        <form method="post" action="03_reserve.php"><!-- start of form --> 
            <div class = "row">
                <div class = "col-12">
                    <h1>Pick Your Extras</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <?php // start of php

                if($selection == "Layered Arch"&& $price==849) {
                    //Layered Arch
                    $package = "Full LA Rental Set";
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Full Set Rental $849</div>
                        <span class = "note">(Includes each of the following items)</span>
                    </h5>';
                    echo'

                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664458998899-IIMB5FQRSQH1DQKFZU03/Donnie+Rosie+Photos-872edit.jpg?format=750w" 
                            width = "60%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <ul>
                                <li>
                                Customized welcome sign (choice of trellis half arch or smooth half arch insert up to 25 words text)
                                </li>
                                <li>
                                3 piece seating chart half arch set (print service for cards is available for a small additional fee)
                                </li>
                                <li>
                                Table numbers 1-30
                                </li>
                                <li>
                                Gold Card Terrarium with choice of “Gifts & Cards” sign
                                </li>
                                <li>
                                5 “Reserved” signs
                                </li>
                                <li>
                                Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Dont Mind if I Do,” “In Loving Memory”)
                                </li>
                                <li>
                                Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)
                                </li>
                                <li>
                                1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)
                                </li>
                                <li>
                                1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text) 
                                </li>
                                <li>
                                Unplugged Ceremony sign
                                </li>
                                <li>
                                Hairpin Record Player Prop
                                </li>
                                <li>
                                Mr & Mrs Custom Head Table Keepsake is a free gift in addition to the items above
                                </li>
                            </ul>
                        </div>
                    </div>      
                ';
                }elseif($selection == "Layered Arch"&& $price==699) {
                    $package = "Pick 4 Rental Set";
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Pick 4 Rental $699</div>
                        <span class = "note">(Choose 4 of the following items)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664458970707-WENQ72GUF01C4RSHTITI/Donnie+Rosie+Photo-1140edit.jpg?format=750w" 
                            width = "60%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <input type="checkbox" name="01_Layered" value="Layered">
                            <label for="01_Layered">Customized welcome sign<br>(choice of trellis half arch or smooth half arch insert up to 25 words text)</label><br>

                            <input type="checkbox" name="02_Layered" value="Layered">
                            <label for="02_Layered">3 piece seating chart half arch set<br>(print service for cards is available for a small additional fee)</label><br>

                            <input type="checkbox" name="03_Layered" value="Layered">
                            <label for="03_Layered">Table numbers 1-30</label><br>

                            <input type="checkbox" name="04_Layered" value="Layered">
                            <label for="04_Layered">Gold Card Terrarium with choice of “Gifts & Cards” sign</label><br>

                            <input type="checkbox" name="05_Layered" value="Layered">
                            <label for="05_Layered">5 “Reserved” signs</label><br>

                            <input type="checkbox" name="06_Layered" value="Layered">
                            <label for="06_Layered">Up to 2 Double Half Arch Small signs<br>(“Gifts & Cards,” “Take One,” “Don t Mind if I Do,” “In Loving Memory”)</label><br>

                            <input type="checkbox" name="07_Layered" value="Layered">
                            <label for="07_Layered">Up to 2 Sunset Small signs<br>(“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</label><br>

                            <input type="checkbox" name="08_Layered" value="Layered">
                            <label for="08_Layered">1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text) </label><br>

                            <input type="checkbox" name="09_Layered" value="Layered">
                            <label for="09_Layered">1 Double Half Arch Medium sign<br>(“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</label><br>

                            <input type="checkbox" name="10_Layered" value="Layered">
                            <label for="10_Layered">Unplugged Ceremony sign</label><br>

                            <input type="checkbox" name="11_Layered" value="Layered">
                            <label for="11_Layered">Hairpin Record Player Prop</label><br>

                            <input type="checkbox" name="12_Layered" value="Layered">
                            <label for="12_Layered">"Mr & Mrs" Custom Head Table Keepsake <br>is a free gift in addition to the 6 items you choose</label><br>
                        </div>
                    </div>    
                    ';

                }elseif($selection == "Modern Rounds"&& $price==799) {
                    $package = "Full MR Rental Set";
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">FULL Set Rental $799</div>
                        <span class = "note">(Includes each of the following items)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664458970707-WENQ72GUF01C4RSHTITI/Donnie+Rosie+Photo-1140edit.jpg?format=750w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <ul>
                                <li>
                                    Large Custom Welcome (round center becomes a keepsake)
                                </li>
                                <li>
                                    Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)
                                </li>
                                <li>
                                    1-30 free standing table numbers
                                </li>
                                <li>
                                    Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)
                                </li>
                                <li>
                                    Set of “Reserved” signs (5)
                                </li>
                                <li>
                                    2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)
                                </li>
                                <li>
                                    2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)
                                </li>
                                <li>
                                    1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.
                                </li>
                                <li>
                                    All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake
                                </li>
                            </ul>
                        </div>
                    </div>
                    ';

                }elseif($selection == "Modern Rounds"&& $price==699) {
                    $package = "Pick 6 Rental Set";
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Pick 6 Rental $699</div>
                        <span class = "note">(Choose 6 of the following items)</span>
                    </h5>';

                    echo '
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664458975195-3H08PNE87MSPUINLZ8KL/Donnie+Rosie+Photo-2109edit.jpg?format=750w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>
                        <div class = "col-lg-6 col-12">
                            <input type="checkbox" name="01_Modern" value="Modern">
                            <label for="01_Modern">Large Custom Welcome (round center becomes a keepsake)</label><br>

                            <input type="checkbox" name="02_Modern" value="Modern">
                            <label for="02_Modern">Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</label><br>

                            <input type="checkbox" name="03_Modern" value="Modern">
                            <label for="03_Modern">1-30 free standing table numbers</label><br>

                            <input type="checkbox" name="04_Modern" value="Modern">
                            <label for="04_Modern">Modern Locking Card Box </label><br>

                            <input type="checkbox" name="05_Modern" value="Modern">
                            <label for="05_Modern">Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</label><br>

                            <input type="checkbox" name="06_Modern" value="Modern">
                            <label for="06_Modern">2 Selections of Small Horizontal Bracket Signs <br>(“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</label><br>

                            <input type="checkbox" name="07_Modern" value="Modern">
                            <label for="07_Modern">Set of “Reserved” signs (5)</label><br>

                            <input type="checkbox" name="08_Modern" value="Modern">
                            <label for="08_Modern">2 Selections of Small Square Bracket Signs <br>(“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</label><br>

                            <input type="checkbox" name="09_Modern" value="Modern">
                            <label for="09_Modern">1 Medium Table Top <br>(“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</label><br>
                        </div>
                    </div>
                    ';

                }elseif($selection == "Modern Rounds"&& $price==599) {
                    $package = "Pick 4 Rental Set";
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Pick 4 Rental $599</div>
                        <span class = "note">(Choose 4 of the following items)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664456934373-CWR97YUZ3CUEV9EH5QIK/IMG_8090.jpg?format=750w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <input type="checkbox" name="01_Modern" value="Modern">
                            <label for="01_Modern">Large Custom Welcome (round center becomes a keepsake)</label><br>

                            <input type="checkbox" name="02_Modern" value="Modern">
                            <label for="02_Modern">Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</label><br>

                            <input type="checkbox" name="03_Modern" value="Modern">
                            <label for="03_Modern">1-30 free standing table numbers</label><br>

                            <input type="checkbox" name="04_Modern" value="Modern">
                            <label for="04_Modern">Modern Locking Card Box </label><br>

                            <input type="checkbox" name="05_Modern" value="Modern">
                            <label for="05_Modern">Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</label><br>

                            <input type="checkbox" name="06_Modern" value="Modern">
                            <label for="06_Modern">2 Selections of Small Horizontal Bracket Signs<br>(“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</label><br>

                            <input type="checkbox" name="07_Modern" value="Modern">
                            <label for="07_Modern">Set of “Reserved” signs (5)</label><br>

                            <input type="checkbox" name="08_Modern" value="Modern">
                            <label for="08_Modern">2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</label><br>

                            <input type="checkbox" name="09_Modern" value="Modern">
                            <label for="09_Modern">1 Medium Table Top <br>(“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</label><br>
                        </div>
                    </div>                            
                    ';

                }elseif($selection == "Vintage Mirrors"&& $price==849) {
                    $package = "Platinum VM Rental Set";
                    echo 
                    '<h5 class = "Vintage Mirror Platinum Package Rental">
                        <span class = "line"></span>
                        <div class = "packagename">Vintage Mirror Platinum Package Rental $849</div>
                        <span class = "note">(Includes all of the following items)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664456946957-4PU43Q90WI0CKQ626OI9/IMG_8102.jpg?format=750w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <ul>
                                <li>
                                Welcome Sign with custom names & date & large wrought iron easel
                                </li>
                                <li>
                                Antique Typewriter Rental with customized message (100 words or less)
                                </li>
                                <li>
                                Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application
                                </li>
                                <li>
                                Table Numbers 1-30
                                </li>
                                <li>
                                Leather Domed Trunk with “cards” mirror with stand
                                </li>
                                <li>
                                “Enjoy the Moment- no photography please” mirror with stand
                                </li>
                                <li>
                                “Guestbook” mirror with stand
                                </li>
                                <li>
                                “Take One” small vanity mirror
                                </li>
                                <li>
                                1 Large Full Custom Mirror (50 words or less) with large wrought iron easel
                                </li>
                                <li>
                                1 Medium Full Custom Mirror (20 words or less)  with large wrought iron easel
                                </li>
                                <li>
                                1 Small Custom Mirror (10 words or less) with wrought iron easel
                                </li>
                            </ul>
                        </div>
                    </div>
                    ';

                }elseif($selection == "Vintage Mirrors"&& $price==649) {
                    $package = "Gold VM Rental Set";
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Vintage Mirror Pick 6 Rental Package $649</div>
                        <span class = "note">(Choose 6 of the following items)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664456934373-CWR97YUZ3CUEV9EH5QIK/IMG_8090.jpg?format=750w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <input type="checkbox" name="01_Vintage" value="Vintage">
                            <label for="01_Vintage">Welcome Sign with custom names & date & large wrought iron easel</label><br>

                            <input type="checkbox" name="02_Vintage" value="Vintage">
                            <label for="02_Vintage">Antique Typewriter Rental with customized message (100 words or less)</label><br>

                            <input type="checkbox" name="03_Vintage" value="Vintage">
                            <label for="03_Vintage">Pair of 2 Linen Stringers with wrought iron easels </label><br>

                            <input type="checkbox" name="04_Vintage" value="Vintage">
                            <label for="04_Vintage">Large Custom Mirror for gold seal application</label><br>

                            <input type="checkbox" name="05_Vintage" value="Vintage">
                            <label for="05_Vintage">Table Numbers 1-30</label><br>

                            <input type="checkbox" name="06_Vintage" value="Vintage">
                            <label for="06_Vintage">Leather Domed Trunk with “cards” mirror with stand</label><br>

                            <input type="checkbox" name="07_Vintage" value="Vintage">
                            <label for="07_Vintage">“Enjoy the Moment- no photography please” mirror with stand</label><br>

                            <input type="checkbox" name="08_Vintage" value="Vintage">
                            <label for="08_Vintage">“Guestbook” mirror with stand</label><br>

                            <input type="checkbox" name="09_Vintage" value="Vintage">
                            <label for="09_Vintage">“Take One” small vanity mirror</label><br>
                        </div>
                    </div>
                    ';

                }elseif($selection == "Dark Walnut"&& $price==299) {
                    $package = "Full DW Rental Set";
                echo
                '<h5 class = "packagetitle">
                    <span class = "line"></span>
                    <div class = "packagename">Dark Walnut Full Package Rental</div>
                    <span class = "note">(299 plus tax)</span>
                </h5>';

                echo '
                <div class = "row">
                    <div class = "col-lg-6 col-12">
                        <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1664463107080-1LIRP0W3IO9VCK8FGNX3/IMG_9617.jpg?format=750w" 
                        width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                    </div>

                    <div class = "col-lg-6 col-12">
                        <ul>
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
                </div>
                    ';

                }elseif($selection == "Dark Walnut"&& $price==245) {
                    $package ='“No Seating” DW Rental';
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Dark Walnut “No Seating” Rental</div>
                        <span class = "note">($245 plus tax)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1656356634378-M6CNS7ZLG0ZNAM95MGDU/JM1_5917.jpg?format=750w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <ul>
                                <li>“Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</li>
                                <li>Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc) </li>
                                <li>“Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</li>
                                <li>“We know that you would be here today if Heaven weren’t so far away” <br>(10” x 10.5” memorial sign or seat saver with small easel)</label><br>
                                <li>“Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</li>
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
                    </div>  
                    ';

                    }elseif($selection == "Rustic Wood" && $price==299) {
                    $package = 'Full RW Rental Set';
                    echo 
                    '<h5 class = "packagetitle">
                    <span class = "line"></span>
                    <div class = "packagename">Rustic Wood Full Package Rental</div>
                    <span class = "note">($299 plus tax)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1656359485083-C8L0FZ4A7TD6PJNB12AS/IMG_0696.jpg?format=500w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <ul>
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
                    </div>
                    ';

                }elseif($selection == "Rustic Wood"&& $price==245) {
                    $package = '“No Seating” RW Set';
                    echo 
                    '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Rustic Wood “No Seating” Rental</div>
                        <span class = "note">($245 plus tax)</span>
                    </h5>';

                    echo'
                    <div class = "row">
                        <div class = "col-lg-6 col-12">
                            <center><img src = "https://images.squarespace-cdn.com/content/v1/5d5c1c761244af000131c2bb/1656359519908-1QGI8ITYPY4PSHB7I9ME/_DSC0725.JPG?format=750w" 
                            width = "50%" style = "padding-top: 10px; border-radius: 50%;" alt = "image"></center>
                        </div>

                        <div class = "col-lg-6 col-12">
                            <ul>
                                <li>“Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</li>
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
                    </div>
                    ';
                }else {
                    if (empty($selection) || empty($email) || empty($dates)){
                        echo '<p class="text-center">Invalid Access, to make a reservation navigate back to <a href = "00_home.php">Home</a></p> ';
                    }
                    else {
                        echo '<center><p style = "padding-bottom: 25px;">Please select your package, click <a href = "01_package.php">here</a> to return to the package page!</p></center>';
                    }
                }
                ?> <!-- end of php-->

                <!--Start of div col for extra sets-->
                <div class="col-12 col-m-12">
                    <?php // start of extra php
                  
                        if (empty($selection) || empty($price) || empty($dates)){
                            echo '';
                        } else{
                            echo
                            '<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Extras</div>
                            <span class = "note">(Pick your extras of the following items)</span>
                        </h5>';

                            echo '
                        <div class = "row">
                            <div class = "col-12 checkboxStyle">
                                <input type="checkbox" name="Hexagon" value="350">
                                <label for="Hexagon">Add Hexagon Arch - $350</label><br>

                                <input type="checkbox" name="Jars" value="750">
                                <label for="Jars">Add Blue Antique Ball Jars Set - $750</label><br>

                                <input type="checkbox" name="Coach" value="99">
                                <label for="Coach">Add Vintage Coach - $99</label><br>

                                <input type="checkbox" name="Jugs" value="48">
                                <label for="Jugs">Add Antique Gallon Jugs Set - $48</label><br>
                            </div>
                        </div>
                        ';
                        }

                    
                        
                    ?> <!-- end of extra php-->
                </div> <!-- end of div  for extra  --> 
            

                <!--Start of div col for upgrade sets-->
                <div class="col-12 col-m-12">
                    <?php // start of upgrade php
                        /*
                            upgrade roserade
                            $price==849 full
                             "Modern Rounds"&& $price==799 full
                              "Vintage Mirrors"&& $price==849 full
                              walnut"&& $price==299  & rustic full 
                            ($selection == "Modern Rounds"&& $price==699)
                            $selection == "Modern Rounds"&& $price==699
                            ($selection == "Modern Rounds"&& $price==599)
                            $selection == "Vintage Mirrors"&& $price==649
                            $selection == "Dark Walnut"&& $price==245
                            $selection == "Rustic Wood"&& $price==245)
                            
                        */
                        if($selection == "Layered Arch"&& $price==699) {
                            echo'<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Upgrade - FULL SET</div>
                            <span class = "note">(with a $150 difference)</span>
                            </h5>';
                            echo'
                            <div class = "row">
                                <div class = "col-12">
                                    <ul class = "upgradeList">
                                        <li>You get 12 piece vs. the 4 piece</li>
                                        <li>You can bundle and save on extras</li>
                                    </ul>

                                    <input type="checkbox" name="Upgrade" value="150" class = "checkboxStyle">
                                    <label for="Upgrade">Add UPGRADE </label><br>

                                </div>
                            </div>';

                        } elseif ($selection == "Modern Rounds"&& $price==699) {
                            echo'<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Upgrade - FULL SET</div>
                            <span class = "note">(with a $100 difference)</span>
                            </h5>';
                            echo'
                            <div class = "row">
                                <div class = "col-12">
                                    <ul class = "upgradeList">
                                        <li>You get 9 piece vs. the 6 piece</li>
                                        <li>You can bundle and save on extras</li>
                                    </ul>

                                    <input type="checkbox" name="Upgrade" value="100" class = "checkboxStyle">
                                    <label for="Upgrade">Add UPGRADE </label><br>

                                </div>
                            </div>';

                        } elseif ($selection == "Modern Rounds"&& $price==599) {
                            echo'<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Upgrade - FULL SET</div>
                            <span class = "note">(with a $200 difference)</span>
                            </h5>';
                            echo'
                            <div class = "row">
                                <div class = "col-12">
                                    <ul class = "upgradeList">
                                        <li>You get 9 piece vs. the 4 piece</li>
                                        <li>You can bundle and save on extras</li>
                                    </ul>

                                    <input type="checkbox" name="Upgrade" value="200" class = "checkboxStyle">
                                    <label for="Upgrade">Add UPGRADE </label><br>

                                </div>
                            </div>';

                        } elseif ($selection == "Vintage Mirrors"&& $price==649) {
                            echo'<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Upgrade - FULL SET</div>
                            <span class = "note">(with a $200 difference)</span>
                            </h5>';
                            echo'
                            <div class = "row">
                                <div class = "col-12">
                                    <ul class = "upgradeList">
                                        <li>You get 11 piece vs. the 6 piece</li>
                                        <li>You can bundle and save on extras</li>
                                    </ul>

                                    <input type="checkbox" name="Upgrade" value="200" class = "checkboxStyle">
                                    <label for="Upgrade">Add UPGRADE </label><br>

                                </div>
                            </div>';

                        } elseif ($selection == "Dark Walnut"&& $price==245) {
                            echo'<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Upgrade - FULL SET</div>
                            <span class = "note">(with a $54 difference)</span>
                            </h5>';
                            echo'
                            <div class = "row">
                                <div class = "col-12">
                                    <ul class = "upgradeList">
                                        <li>You get 17 piece vs. the 15 piece</li>
                                        <li>You can bundle and save on extras</li>
                                    </ul>

                                    <input type="checkbox" name="Upgrade" value="54" class = "checkboxStyle">
                                    <label for="Upgrade">Add UPGRADE </label><br>

                                </div>
                            </div>
                            ';

                        } elseif ($selection == "Rustic Wood"&& $price==245) {
                            echo'<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Upgrade - FULL SET</div>
                            <span class = "note">(with a $54 difference)</span>
                            </h5>';
                            echo'
                            <div class = "row">
                                <div class = "col-12">
                                    <ul class = "upgradeList">
                                        <li>You get 15 piece vs. the 13 piece</li>
                                        <li>You can bundle and save on extras</li>
                                    </ul>

                                    <input type="checkbox" name="Upgrade" value="54">
                                    <label for="Upgrade">Add UPGRADE </label><br>

                                </div>
                            </div>
                            ';

                        } 
                    ?> <!-- end of upgrade php-->
                </div> <!-- enf of div  for are upgrade set  --> 

        <!--Start of div col for delivery sets-->
        <div class = "row">
            <div class = "col-12">
                <?php // start of php
                    if($month != 05) {
                        if (empty($selection) || empty($price) || empty($dates)){
                            echo '';
                        }else{
                            echo
                            '<h5 class = "packagetitle">
                        <span class = "line"></span>
                        <div class = "packagename">Delivery & Pick Up Option</div>
                        <span class = "note">(Free for delivery in 30 mile radius)</span>
                        </h5>';

                            echo'
                        <div class = "row">
                        <div class = "col-12 delistyle">
                        <input type="radio" id="Delivery" name="Delivery" value="Delivery">
                        <label for = "Delivery">Delivery</label><br>

                        <input type="radio" id="Pickup" name="Delivery" value="Pick Up">
                        <label for="Pickup">Pick Up</label><br>
                        </div>
                        </div>
                        ';
                        }


                    } elseif($month == 05) {
                        echo 
                        '<h5 class = "packagetitle">
                            <span class = "line"></span>
                            <div class = "packagename">Delivery & Pick Up Option</div>
                            <span class = "note">(Free for delivery in 30 mile radius)</span>
                        </h5>';
                        echo'
                        <input type = "radio" id="Delivery" name="Delivery" value="No Delivery">
                        <label for="Delivery">Sorry, Delivery not avaliable during May</label><br>';   
                        } else {
                        echo'';
                    }
                ?> <!-- end of php --> 
            </div> <!-- enf o col-->
        </div> <!-- end of row -->

        <?php // hidden values
            echo '<input type = "hidden" name="extraName" value="'.$name.'">';
            echo '<input type = "hidden" name="extraEmail" value="'.$email.'">';
            echo '<input type = "hidden" name="extraPhone" value="'.$phone.'">';
            echo '<input type = "hidden" name="extraDate" value="'.$dates.'">';
            echo '<input type = "hidden" name="extraSelection" value="'.$selection.'">';
            echo '<input type = "hidden" name="extraMonth" value = "'.$month.'">';
            echo '<input type = "hidden" name="extraRadio" value = "'.$price.'">';
            echo '<input type = "hidden" name="extraPackage" value = "'.$package.'">';

        ?>
        <?php
        // submit 
            if(!empty($selection) && !empty($price)) {
                echo'<p><button class="w3-button w3-black" type="submit" style = "width:100%; margin-top: 25px; margin-bottom: 25px; font-weight: bold; font-size: 20px;">CHECK OUT</button></p>';
            }
        ?>

        </form>  <!-- end of form --> 
    </div> <!--End container-fluid-->


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