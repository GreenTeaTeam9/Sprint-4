<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow, nosnippet">
<meta name="viewport" content="width=device-width">
<title>Walnut Ridge Wedding Rentals - Adminitration</title>

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
            <li class = "breadcrumb-active breadcrumb-item">Reservation</li>
          </ol>
      </div>
    </div>
    
    <div class = "row">
      <div class = "col-lg-12">
        <h1>Reservation</h1>
      </div> <!-- end of col --> 
        <!-- Contact/Area Container -->
      <div class="middle"> 
        <?php
            $username = 'greente1';
            $password = 'z9s116[K(ZyPMu';
            $hostname = 'localhost';
            $database = 'greente1_reservation';
            
            $conn = new mysqli($hostname, $username, $password, $database) or die("Error Connecting to DB: " . mysqli_connect_error());
            $query = "SELECT fullName, gender, email, mobile, address, city, state FROM developers";
            $result = mysqli_query($conn, $query);
            $getReserve = "SELECT customer_name, email, phone, customer.date, sets.set_selection FROM `customer` INNER JOIN `sets` ON customer.customer_id=sets.customer_id ORDER BY customer.date";

            $result = @mysqli_query($conn, $getReserve);    
            ?>
            <table class="table" border ="1px" cellspacing="0" cellpadding="10" align="center">
              <tr class='head'>
                <th class='text-center th'>Reservation</th>
                <th class='text-center th'>Date</th>
                <th class='text-center th'>Name</th>
                <th class='text-center th'>Set</th>
                <th class='text-center th'>Phone</th>
                <th class='text-center th'>Email</th>
              </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
              $sn=1;
              while($data = mysqli_fetch_assoc($result)) {
             ?>
             <tr>
               <td class='text-center'><?php echo $sn; ?> </td>
               <td class='text-center'><?php echo $data['date']; ?> </td>
               <td class='text-center'><?php echo $data['customer_name']; ?> </td>
               <td class='text-center'><?php echo $data['set_selection']; ?> </td>
               <td class='text-center'><?php echo $data['phone']; ?> </td>
               <td class='text-center'><?php echo $data['email']; ?> </td>
             <tr>
             <?php
              $sn++;}} else { ?>
                <tr>
                 <td colspan="8">No data found</td>
                </tr>
             <?php } ?>
             </table
      </div>
    </div>  <!-- end of row -->
  </div> <!-- end of CF -->
  <div class = "row">
  <div class = "col-12">

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