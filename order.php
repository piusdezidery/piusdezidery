
<?php
session_start();
if(isset(  $_SESSION['username']))
{

  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['insert'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $carno = mysqli_real_escape_string($conn, $_POST['carno']);
    $cname = mysqli_real_escape_string($conn, $_POST['cname']);
    $cost = mysqli_real_escape_string($conn, $_POST['cost']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    // image file directory
    $target = "images/".basename($image);
    echo "$carno $cname";

    $sql = "INSERT INTO `carreg`( `carno`, `carname`, `cost`, `date`, `image`) VALUES ('$carno','$cname','$cost','$date','$image') ";
    // execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
    $result = mysqli_query($conn, "SELECT * FROM carreg");
  }
  



?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

      
  <style type="text/css">
       body {
  margin: 0;
  padding: 2px,2px,2px,2px;
}
.nav-bar {
  height: 70px;
  background: #262626;
}
 
.brand {
  position: absolute;
  padding-left: 20px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
}
.brand a img {
  max-height: 70px;
}
.brand a,
.brand a:visited {
  color: #ffffff;
  text-decoration: none;
}
 
.nav-container-fluid {
  max-width: 2000px;
  margin: 0 auto;
}
 
nav {
  float: right;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  float: left;
  position: relative;
}
nav ul li a,
nav ul li a:visited {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #262626;
  color: #ffffff;
  text-decoration: none;
}
nav ul li a:hover,
nav ul li a:visited:hover {
  background: #2ab1ce;
  color: #ffffff;
}
nav ul li a:not(:only-child):after,
nav ul li a:visited:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
  position: absolute;
}
nav ul li ul li {
  min-width: 190px;
}
nav ul li ul li a {
  padding: 15px;
  line-height: 20px;
}
 
.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}
.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: #262626;
  height: 70px;
  width: 70px;
}
 
@media only screen and (max-width: 798px) {
  .nav-mobile {
    display: block;
  }
 
  nav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav ul {
    display: none;
  }
  nav ul li {
    float: none;
  }
  nav ul li a {
    padding: 15px;
    line-height: 20px;
  padding-left: 25%;
   
  }
  nav ul li ul li a {
    padding-left: 30%;
  }
 
  .nav-dropdown {
    position: static;
  }
  .brand a img {
    max-height: 60px;
    margin-top: 5px;
  }
}
@media screen and (min-width: 799px) {
  .nav-list {
    display: block !important;
  }
}
#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 5px;
  width: 35px;
  background: #ffffff;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -10px;
}
#nav-toggle span:after {
  bottom: -10px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}
 
article {
  max-width: 1000px;
  margin: 0 auto;
  padding: 10px;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid red;
}


      </style>
      <script type="text/javascript">
        



      </script>
</head>
 
<body>
 
  <section class="nav-bar">
  <div class="nav-container-fluid">
    <div class="brand">
       <a class="navbar-brand" href="#"> CAR RENTAL SYATEM </a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        
       
      
       <li>  <a href="company.php"   ><span style="font: 600 16px/24px 'Open Sans',sans-serif;">CAR REGSTRATION</span></a></li>
      <li>  <a  href="order.php"    ><span style="font: 600 16px/24px 'Open Sans',sans-serif;">ORDER</span></a></li>
        
         <li>  <a  href="report.php"    ><span style="font: 600 16px/24px 'Open Sans',sans-serif;">ADD USER</span></a></li> 


      
      <li>
  <a href="logout.php"  ><span class="glyphicon glyphicon-log-in"></span><span style="font: 600 16px/24px 'Open Sans',sans-serif;">AGENT LOG OUT</span></a>
</li>
  
    </ul>
    </nav>
  </div>
</section>
 
 
    










<div class="row">
  <div class="col-sm"></div>
  
<?php
$conn = mysqli_connect("localhost","root","","carrentaldb");

            $select =  "SELECT * FROM `buy`";
            $se = mysqli_query($conn,$select);

          


?>
  <div class="col-sm-12">

    <center><h1><b>SELECTED  CAR</b></h1></center>
    <table class="table table-striep">
   
      <tr><th>NO: </th>
        <th>PICK UP LOCATION </th><th>PICK UP DATE</th><th>RETURN LOACTION</th><TH>RETURN DATE</TH><TH>NAME OF PICKER</TH><TH>EMAIL</TH><TH>PHONE</TH><TH>NATIONAL ID</TH><TH>CAR NO</TH><TH>ACTION</TH>
      </tr>
       <?php while($row=$se->fetch_array(MYSQLI_BOTH)) {
  
?>
      <tr>
         <td><?php   echo $row['searial']; ?></td><td><?php   echo $row['pick']; ?></td><td><?php   echo $row['pdate']; ?></td><td> USA $ <?php   echo $row['rlocation']; ?> PER DAY</td><td><?php   echo $row['rdate']; ?></td><td><?php    echo $row['fname'];  // echo "<div id='img_div'>";
                    // echo "<img src='images/".$row['image']."' height='50' width='50' >";   ?></td><td><?php   echo $row['email']; ?><td><?php   echo $row['phone']; ?></td><td> <a href="resist.php?file_id=<?php echo $m['id'] ?> "> Download</a></td><td><?php   echo $row['carno']; ?></td><td><a href="confrm.php" class="btn btn-success">confrm</a></td>
      </tr>
    <?php } ?>

  </div>


</div>



</body>
</html>
<?php
}
  else
  {
   
echo "<script> location.href='../index.php'</script> ";
  }



   ?>