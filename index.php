<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
  <title>car rental</title>
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
<script type="text/javascript">
  

 $(document).ready( function() {
      var minDate = new Date();
    $( "#datepicker" ).datepicker({
            
            "dateFormat":"yy/mm/dd",
            minDate:0,
            
          });
  });
 
  

 $(document).ready( function() {
      var minDate = new Date();
    $( "#datepicker2" ).datepicker({
            
            "dateFormat":"yy/mm/dd",
            minDate:0,
            
          });
  });





</script>

<style>
  
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-image: url("image/gto.jpg");
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
                         



<center>
  <div class="row" style="margin-top: 22%  background-color #0000CD;" >
    <div class="col-sm" style="background-color: #0000CD;"></div>
  </div>
  <?php $conn = mysqli_connect("localhost","root","","carrentaldb");
    $select  = "SELECT * FROM `station`";
     $sl = mysqli_query($conn,$select);

   ?>

<div class="row" style="margin-top: 10%; background-color: silver; padding : 2px,2px,2px,2px">
  <div class="col-sm-3">
    
  </div>
  <form action="sess.php" method="post">
  <div class="col-sm-6">
    <center> <h1 style="font color: orangered;"> CAR RENTAL SYSTEM </h1></center>
    <br>
  </div>
  
</div>
<div class="row" style="margin-top: 0%; background-color: silver;">
  
 
  
  <div class="col-sm-3">
    <div class="input-group"><span class="input-group-addon">
              <i class='fas fa-bus' style='font-size:20px;color:silver;'></i></span> <select name="from" required="required" style="width: 100%" class="form-control stid">
                              <option selected  disabled="disabled"> PICK UP LOCATION  </option>
                        <?php

                             
                         while ($wi= $sl->fetch_array(MYSQLI_BOTH)) { ?>
                   <option value="<?php echo htmlentities($wi['station']) ?> ">                                   
                                                 
          <?php  echo htmlentities($wi['station']);          ?> 
                                                </option>
                                              <?php } ?>
                                            </select></div>
  </div>
<div class="col-sm-3">
  <div class="input-group"><span class="input-group-addon">
              <i class='fas fa-calendar-alt' style='font-size:20px;color:blue'></i></span><input type="text" required name="come" id="datepicker"  placeholder="PICK UP DATE" class="form-control"></div>
</div>


  <div class="col-sm-3">
    <div class="input-group"><span class="input-group-addon">
 <i class='fas fa-bus' style='font-size:20px;color:blue'></i></span> <select name="to" required style="width: 100%" class="form-control stid">
                                            <option selected disabled> RETURN CITY & LOCATION </option>

                                            <?php  $select  = "SELECT * FROM `station`";
                                                $sl = mysqli_query($conn,$select);
  
                                             while ($will = $sl->fetch_array(MYSQLI_BOTH)) { ?>
                                            <option value="<?php echo htmlentities($will['station']) ;?> ">  
                                             
                                                 
                                                <?php  echo htmlentities($will['station']) ;?> 
                                                </option>
                                              <?php } ?>
                                            </select></div>
  </div>

<div class="col-sm-3">
  <div class="input-group"><span class="input-group-addon">
              <i class='fas fa-calendar-alt' style='font-size:20px;color:blue'></i></span><input type="text"  name="dat" id="datepicker2" placeholder="RETURN DATE" class="form-control"></div>
</div>
</div>
<div  class="row" style="margin-top: 0px; background-color: #0000FF;"  >
  <div class="col-sm">
    <br>
    <button class="btn btn-warning" style="margin-top: 22%  background-color #0000CD;" name="book">SEARCH</button>
  </div>
  
</div>
<br>



</form>


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

        </div>
    </div>
</div>

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
        COMPANY LOGIN</strong></h3>

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
          <input type="text"  id="password" name="username" class="form-control validate" required>
         
        </div>
<br><br>
        <div class="md-form pb-3">
          <label data-error="wrong" data-success="right" for="Form-pass1"> PASSWORD</label>
          <input type="password" id="username" name="password" class="form-control validate" required>
          <br>
          <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">

              Password?</a></p>




        </div>
<br>
        <div class="text-center mb-2">
          <button  name="login" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
        </div>

     
          
         
        </div>
         

       </div>
        </form>

        
      <!--Footer-->


</div></div>
</html>



