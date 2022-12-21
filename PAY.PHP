<html>
<head>
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
<style type="text/css">'

  body{
        padding: 30px;

  }
  nav{
    padding: 20px 1px 10px 1px;


  }
  ul {
    list-style-type: none;
     padding: 0px;
    background-color: #00FF7F;
    border-spacing: 5px;
     
    }
    li a{
      display:block;
         color: #000;
         padding: 20px 0px 7px 20px;
          text-decoration: none;
           box-shadow: 0 8px 16px 0 rgba(7,0,4,3.2), 0 0px 20px 0 rgba(6,5,4,2.19); border-radius: 60px;    }
  li a #hover {
   background-color: #555;
    color: white;
}
.active {
    background-color: #8470FF;
   color: white;
}
header{
    background-color: #7588;
    height: : 30px;

           padding: 10px;

      }
  p{
    text-align: left;
    font-family: 20px;
  }
.button{
    width: 20%;
    height: 50px;
    
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);

  }
  .button:hover {
 background-color: #654;
    color: white;
  }
  
  tr{
    padding: 10px 10px 10px 10px;
  }

</style>
<tittle></tittle>
<style type="text/css">
  body{

    background-image: url(image/image8.jpg);
      }
  
</style>
<script type="text/javascript">
 
 $(document).ready( function() {
      var minDate = new Date();
    $( "#datepicker" ).datepicker({
            
            "dateFormat":"yy-m-d",
            minDate:0,
            
          });
     
    $("#datepicker2" ).datepicker({
      "dateFormat":"yy-m-d",
        minDate:0,
  });
  });

</script>
</head>
<body >
<div class="container-fluid">
  <div class="row">


  </div>  
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-2">
    
    </div>
    <div class="col-sm-7">
      <table class="table table-spried" style="background-color: #FFA500; width: 100%; border-radius: 20px;">
      <tr>
        
        <form action="pyment.php" method="post" class="form-control">
    <thead>
      <div class="col-ms-2">
         <th colspan="3"><h2><center>BILL  INFORMATION </center> </h2></th></thead>
          <tbody>
            <tr>
             
              <td colspan="3">
                
                  <table class="table table-striped" >
                   

<br> <h3>Tell about yourself all field are requiered</h3>
</tr>
              <tr><td colspan="3"><label>Email Address</label><input type="email" name="email" placeholder="Email" class="form-control" required></td></tr>


<tr><td>
            <label>First name </label> <input type="text" name="firstname" required class="form-control" placeholder="First name"></td>                    
                  
                  <td>
            <label>last name </label> <input type="text" name="lastname" class="form-control" required placeholder="last name"></td></tr> 
 <tr>                  
                  
                  <td>
            <label>Street address </label> <input type="text" name="street" required class="form-control" placeholder="Street address"></td>
            <td>
            <label>ZIP code </label> <input type="text" name="code" required class="form-control" placeholder="ZIP code"></td><tr><td><label>City </label> <input type="text" name="city" required class="form-control" placeholder="City"></td>

            <td colspan="3"> <h4>Country or Region <select name="country" style="width: 100%;" class="form-control"><option>United Republic of Tanzania</option>
                                                                                     <option>Uganda</option>
                                                                                     <option>Kenya</option>
                                                                                     <option>Rwannda</option>
                                                                                     <option>Burundi</option>
                                                                                    </td></select></h4></td></tr>
              <tr style="background-color: #FFA500; height: 50px"><td colspan="3"></td></tr>
              <tr><td colspan="2"> <h3><center>PAYMENT INFORMATION</center></h3></td></tr>
              <tr><td colspan="3"><table><tr><td><input type="radio" name="credit" value="Credit card" class="form-control" style="width: 30px" ></td><td><label>Credit card </label></td></tr></table></td></tr>
              <tr><td><label>Creadit card number </label><input type="text" name="number" placeholder="Creadit card number" class="form-control">
              </td>
              <td><img src="images\nbv.jpg" style="width: 90px;"><img src="images\cr.jpg" style="width: 90px;"><img src="images\nmb.jpg" style="width: 90px;"></td>
            </tr>
            <tr><td><label>Security code </label><input type="number" maxlength="10" name="numb" placeholder="3- or 4 digit number" class="form-control" required= "required" ng-model="number" onKeyPress="if(this.value.length==4) return false;"></td> <td><img src="images\nbv.jpg" style="width: 90px;"><img src="images\cr.jpg" style="width: 90px;"><img src="images\nmb.jpg" style="width: 90px;"></td></tr>
              

                       </table>         
                 


                
                 

                </select></h4>
           <button type="reset" class="btn btn-success" style="box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">RESET</button> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;    <button class="btn btn-success" name="submit" style="box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">SUBMIT</button>
                        


              </td>
            </tr>
           
            <tr style="height:  70px;"><td colspan="3">CLEAR</button></td>




            </tr>
           
     
        </tbody>

    </form>
  </div>
 
    </table></center>
 
  </article>
</section>



    </div>
    

</table>

    </div>
    

  </div>
  


<br><br>




</div></body></html>
