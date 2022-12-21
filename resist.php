<?php

session_start();
$form   =   $_SESSION['form'];
$date   =   $_SESSION['come'];
$to     =   $_SESSION['to'];
$dat    =   $_SESSION['dat'];
$co     =   $_SESSION['num'];
$day2   =   $_SESSION['amount'];
$fname  =   $_SESSION['fname'];
$email  =   $_SESSION['email'];
$phone  =   $_SESSION['phone'];
$number =   $_SESSION['ran'];


 $conn   = mysqli_connect("localhost","root","","carrentaldb");

 $result = mysqli_query($conn, "SELECT * FROM `carreg` WHERE `carno`='$co'");
 $my     = mysqli_fetch_assoc($result);
 $resu   = mysqli_query($conn, "SELECT * FROM `buy` WHERE `email`='$email'");
 $m      = mysqli_fetch_assoc($resu);

 $money = $my['cost'] * $day2;

?>

<meta charset="UTF-8">
  <title>car rental system our car </title>
  <head>
  <link href="css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script  src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script   src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"  ></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  

</head>
<body>
   <div class="row">
    <div class="col-sm-3">
      
    </div>
    <div class="col-sm-7">
      <table class="table table-striep" style="width: 100%">
        <tr><th colspan="3"> <center><h1><b>N CAR RENTAL STSYEM RESIT </b></h1></center></th></tr>
        <tr><th colspan="3"> <center>your can get your comrfimation on your email address</center></th></tr>
        <tr><th>SUBJECT</th><TH>CONTENT</TH></tr>
        <tr><td>SERIAL </td><td><?php  echo "$number";  ?></td></tr>
        <tr><td>NAME</td><td><?php  echo "$fname";  ?></td></tr>
        <tr><td>EMAIL</td><td><?php  echo "$email";  ?></td></tr>
        <tr><td>PHONE NUMBER</td><td><?php  echo "$phone";  ?></td></tr>
        <tr><td>NATIONAL ID</td><td> <a href="resist.php?file_id=<?php echo $m['id'] ?>">Download</a></td></tr>
        <tr><td>PICK UP LOCATION</td><td><?php  echo "$form";  ?></td></tr>
        <tr><td>PICK UP DATE</td><td><?php  echo "$date";  ?></td></tr>
        <tr><td>RETURN LOCATION</td><td><?php  echo "$to";  ?></td></tr>
        <tr><td>RETURN DATE</td><td><?php  echo "$dat";  ?></td></tr>
        <tr><td>CAR NO </td><td><?php  echo "$co";  ?></td></tr>
        <tr><td>CAR NAME</td><td><?php  echo $my['carname']  ?></td></tr>
        <tr><td>CAR IMAGE</td><td><?php echo "<div id='img_div'>";
          echo "<img src='images/".$my['image']."' height='150' width='150' alt='Lights'>"?></td></tr>
        <tr><td>PLAICE</td><td> USA $ <?php  echo "  $money";  ?></td></tr>
        
<tr><th><a href="index.php" class="btn btn-primary"><script type="text/javascript">alert('please note serial number for father identification')</script>DIRECT PAYEMENT </a></th><th><a href="pay.php" class="btn btn-primary">ONLINE PAYEMENT </a></th></tr>

      </table>

      
    </div>
     
   </div>
  
 
  
 
</body>
 
</html>