<meta charset="UTF-8">
  <title>car rental system our car </title>
  <head>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  
<style type="text/css">
 

body{
font-family: 'Titillium Web', sans-serif;
 color: white;
 
/*background: linear-gradient(to left, #ffc3a0, #FFAFBD ); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
h1 {
  text-transform: uppercase;
  font-size: 3em;
}
img {
  height: 200px;
  width: 200px;
}
.cardholder {
  margin-top: 100px;
          perspective: 600px;
}
.card {
  width: 200px;
  height: 200px;
  background-color: transparent;
          transform: rotateY(50deg);
  box-shadow: -6px 5px 13px 2px rgba(0, 0, 0, 0.25);
  transition: all 1s ease;
  color: transparent;
}
.card:hover {
  width: 200px;
  height: 200px;
  background-color: transparent;
          transform: rotateY(0deg);
  box-shadow: 0px 0px 36px 2px rgba(0, 0, 0, 0.25);
  color: black;
}
.card:hover p {
  background-color: white;
}
p.desc {
  z-index:509;
  position: absolute;
  top: 10px;
  padding: 10px;
}
p.desc:hover {
}
</style>


<form class="form-inline">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

</form>


</head>
<body>






 <?php include_once('topbar.php');?>
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\2013_Ford_Escape_SEL_FWD_dealer.jpg" />
    <p class="desc">2013_Ford_Escape_SEL_FWD_dealer <br> TSH 175,000/= per day </p>
        </div>
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
           <img src="image\2013-Ford-Escape-Back-Angle.jpg" />
          <p class="desc">Ford-Escape-Back-Angle <br> TSH 200,000/= per day </p>
        </div>
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\BMW_M5-turbo_633_1024x768.jpg" />
    <p class="desc">BMW_M5-turbo <br> TSH 199,000/= per day</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\BMW X5-1.JPG" />
    <p class="desc">BMW X5-1 <br> TSH 150,000/= per day</p>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\Hummer Luxiuary Car.jpg" />
    <p class="desc">Hummer Luxiuary Car <br> TSH 180,000/= per day</p>
        </div>
      </div>
    </div>
 <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\bmw_6_2b.jpg" />
    <p class="desc">bmw_6_2b <br> TSH 177,000/= per day</p>
        </div>
      </div>
    </div>
    
    
  </div>

<div class="row">
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\2013-ssangyong-rodius-geneva.jpg" />
    <p class="desc">ssangyong-rodius-geneva <br> TSH 188,000/= per day </p>
        </div>
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
           <img src="image\Ferrari_612_236_1024x768.jpg" />
          <p class="desc">Ferrari <br> TSH 200,000 per day </p>
        </div>
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\2013-Corvette-C7.jpg" />
    <p class="desc">Corvette-C7 <br> TSH 178,000 per day</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\Ford_F150-harley_2007_02_1024x768.jpg" />
    <p class="desc">Ford_F150-harley <br> TSH 157,000 per day</p>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\FUONI KIBONDENI.JPG" />
    <p class="desc">FUONI KIBONDENI <br> TSH 155,000/= per day</p>
        </div>
      </div>
    </div>
    
    <div class="col-md-2">
      <div class="cardholder">
        <div class="card">
          <img src="image\ArdenRangeRover[1].jpg"/>
    <p class="desc">Arden Range Rover <br> TSH 350,000 per day </p>
        </div>
      </div>
    </div>
    
    
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
 
  
 
</body>
 
</html>