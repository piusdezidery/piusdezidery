<?php

include_once("sess.php");


?>


<!DOCTYPE html>
<html>
<head>
  <title>  cars </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script  src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script   src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"  ></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<style>
  
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-image: url("image/FUONI KIBONDENI.JPG");
  width: 100%;
  height: 100%;


}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>
<img src="" style="width: 100% height : 100%" >
  <?php include_once('topbar.php');?>


<div id="main">

  <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
                         
<?php
 $conn = mysqli_connect("localhost","root","","carrentaldb");
 $result = mysqli_query($conn, "SELECT * FROM carreg");


?>
 

<center>
 

<div class="row">
  <div class="col-sm">

     <center><h1 style="color: #ffff;"><b>SELECT CAR YOU WANT</b> </h1></center>
      


</div>

</div>
   
      
    
      <?php while($row=$result->fetch_array(MYSQLI_BOTH)) {
  
?>  
<div class="col-sm-2">
 <div class="thumbnail">
      <a href="reg.php">
        
      <?php echo "<div id='img_div'>";
          echo "<img src='images/".$row['image']."' height='200' width='200' alt='Lights'>"; 


            
            $num = $row['carno'];
            $_SESSION['num'] = $num;

            $co = $_SESSION['num'];
            echo "$co";
           ?> 
          

        <div class="caption">
          <center><p><?php    echo $row['carno']; ?> <br><?php echo $row['carname'];?> TSH <?php   echo $row['cost']; ?> PER DAY </p></center>
        </div>
      </a>
    </div>
    <?php echo "</div>";?>
          
</div>
    <?php }  ?>

    
  </div>
  
</div>
    
  
 
  
  
 </center>
 
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
<div class="footer" style="margin-top: 10%;">
  <?php// include_once('include/footer.php');?>
</div>
<div align="center" id="myModal" class="modal" style="margin-top: 10%; margin-left: 10%"   >

    <!-- Modal content -->
    <div class="modal-content"  >
        <div class="modal-header" style="background-color: #5786;">
           
            <h2 id="popupHead">Cancel Ticket</h2>
        </div>
        <div class="modal-body" id="EnterSubject">
            <!--Admin Login Form-->
            <div style="display:none " id="addSubjectForm">
                <form action="addsubjectFormValidation.php" method="POST">
                    <div class="form-group">
                        <label for="subjectname">Mobile Number :</label>
                        <input type="text" class="form-control" id="subjectname" name="SN"
                               placeholder="Mobile Number :">
                    </div>
                    <div class="form-group">
                        <label for="subjectcode">Ticket Number :</label>
                        <input type="text" class="form-control" id="subjectcode" name="SC" placeholder="Ticket Number ">
                    </div>
                    
                    <div align="right" class="form-group">
                     
                        <input type="submit" class="btn btn-default" name="ADD" value="Cancel Ticket">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="close btn btn-primary" >&times CLOSE</span>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var addsubjectBtn = document.getElementById("subjectmanual");
    var heading = document.getElementById("popupHead");
    var subjectForm = document.getElementById("addSubjectForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    addsubjectBtn.onclick = function () {
        modal.style.display = "block";
        //heading.innerHTML = "Faculty Login";
        subjectForm.style.display = "block";
        //adminForm.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
        //adminForm.style.display = "none";
        subjectForm.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!-- Modal -->
<div class="login">
<div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content form-elegant">
      <!--Header-->
      <div class="modal-header text-center" style="background-color: #CDCDC1;">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>
        AGENT LONG IN</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form action="Login.php" method="post" id="">
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="md-form mb-5">
           <label data-error="wrong" data-success="right" for="Form-email1">USERNAME</label>
          <input type="text"  id="password" name="username" class="form-control validate">
         
        </div>
<br><br>
        <div class="md-form pb-3">
          <label data-error="wrong" data-success="right" for="Form-pass1"> PASSWORD</label>
          <input type="password" id="username" name="password" class="form-control validate">
          <br>
          <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">

              Password?</a></p>
        </div>
<br>
        <div class="text-center mb-2">
          <button  name="login" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
        </div>
        </form>

        
      <!--Footer-->


</div></div>
</html>



