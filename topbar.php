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
 <!DOCTYPE html>

      
      <style type="text/css">
       body {
  margin: 0;
  padding: 0;
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
  max-width: 3000px;
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
  padding: 0 70px;
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
}
nav ul li ul li {
  min-width: 200px;
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
  padding: 5px;
}
      </style>
</head>
 
<body>
 
  <section class="nav-bar">
  <div class="nav-container-fluid">
  
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="index.php"><span style="font: 800 16px/24px 'Open Sans',sans-serif;">HOME</span></a></
        </li>
        
        
        
        <li>
           <a href="ourcar.php" ><span style="font: 600 16px/24px 'Open Sans',sans-serif; ">OUR CAR</span></a>
          
        </li>
      
        <li>
          <a  href="https://www.google.com/maps/dir/Mwanza,+Tanzania/Tunduru,+Tanzania/Kigoma/Arusha/Mtwara/Mwanza/@-6.745073,30.4113072,6z/data=!3m1!4b1!4m38!4m37!1m5!1m1!1s0x19ce64c6498cfb91:0x7529260a7f23a51d!2m2!1d32.9174517!2d-2.5164305!1m5!1m1!1s0x18eff650d5d2393f:0x9a462d9065fbe848!2m2!1d37.3292861!2d-11.0406923!1m5!1m1!1s0x19bf1b0c29c6b241:0xdc763d3095aead19!2m2!1d29.6615055!2d-4.8824092!1m5!1m1!1s0x18371c88f2387383:0xbc1907f7ec497152!2m2!1d36.6829927!2d-3.3869254!1m5!1m1!1s0x188d4504be72983b:0x7bb336e2eec34478!2m2!1d40.1759806!2d-10.3112236!1m5!1m1!1s0x19ce64c6498cfb91:0x7529260a7f23a51d!2m2!1d32.9174517!2d-2.5164305!3e0?hl=en-US" ><span style="font: 600 16px/24px 'Open Sans',sans-serif;">LOCATION</span></a>
        </li>
        <li>  <a  href="about.html" ><span style="font: 600 16px/24px 'Open Sans',sans-serif;">ABOUT US</span></a></li> 
      
     
      <li style="background: #7564;">
  <a href=""  data-toggle="modal" data-target="#elegantModalForm"><span class="glyphicon glyphicon-log-in"> </span><span style="font: 900 16px/24px 'Open Sans',sans-serif;">&nbsp;CAMPONY LOGIN</a>
</a></li>
    </ul>
    </nav>
  </div>
</section>
 
 
    
</body>
 <script type="text/javascript">

(function($) { 
  
  $(function() { 
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      $('.dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); 
})(jQuery);
 </script>




