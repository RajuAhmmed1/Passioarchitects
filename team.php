<?php 
  session_start(); 

 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>team</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <link href="styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">

  <script src="jquery.js"></script>
  <script src="js.js"></script>
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
<script>

$(document).ready(function(){
  $('.aa span').click(function(){
    $('span').removeClass("active");
    $(this).addClass("active");
});
});

$(document).ready(function(){
  $('.navbar ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});


jQuery(document).ready(function($){
  var path=window.location.pathname.split("/").pop();
  var target=$('#nav a[href="'+path+'"]');
  target.addClass('active');
});



</script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


</head>
<body>
	<div class="test" id="home">
	<div class="container">
		<div class="main">
		<div class="row" id="nav1" style="display:;padding:10px 0px;">
      <div class="col-sm-12" id="topheader">
        
      
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand active" href="index.php" style="">passioarchitects</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">project <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="interior.php">interior</a></li>
            <li><a href="exterior.php">extarior</a></li>
           
          </ul>
        </li>
       
         <li><a href="team.php">team</a></li>
    <li><a href="about.php">about us</a></li>
        <li><a href="contact.php">contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
         <li>
		  <?php 
if(!isset($_SESSION['username'])){?>
   <a href="register.php"><span class="glyphicon glyphicon-user"></span> sign up</a>
 <?php }

else
{?>   <a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?></a>
<?php } ?>
</li>
        <li>
		<?php 
if(!isset($_SESSION['username'])){?>
   <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> login</a>
 <?php }

else
{?>   <a href="index.php?logout='1'"><span class="glyphicon glyphicon-log-out"></span> logout</a>
<?php } ?>
		
		
      </ul>
    </div>
  </div>
</nav>
    </div>
</div>
<div class="row" style="margin-top: 35px; padding:0 30px;padding-bottom:20px">
  <h3 style="
  text-align: center;line-height: 20px;margin-left: ; font-weight: bold;opacity: .8">the <SPAN style="color:red">passio architects</SPAN> team</h3>
</div>

<div style="margin-top:50px;">

      <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px" style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person2" class="col-sm-5" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
          <p style="padding-bottom:6px;line-heigh:21px">name: touhidul islam</p>
          
          <p>designation: co-founder, creative director & principle-architect</p>
          <p></p>
        </div>
      </div>
</div>
<div style="margin-top:30px;">
 <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-4" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: jaber ahmed </p>
          <p>designation: co-founder & design architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
      
      <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person3" class="col-sm-4" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: arnab banik</p>
         <p>designation: co-founder & design architect</p>
          <p></p>
        </div>
      </div>
      
      </div>
      
      
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: mushfique-us-salehin</p>
          <p>designation: lead-architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
      
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: ariful islam [ abir ] </p>
        <p>designation: design architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: muktadir rashedi </p>
          <p>designation: architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-4" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: rakib ul islam </p>
          <p>designation: visual artist & architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: asif shuvo </p>
          <p>designation: visual artist</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: ashikul islam </p>
          <p>designation: visual artist</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: raju tripura </p>
          <p>designation: architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: mosleh uddin raqib </p>
          <p>designation: architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px;border:2px solid black; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: haneen naffa</p>
          <p>designation: architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
       <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: salmon parker</p>
          <p>designation: architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin-top:30px;">
      <div class="row" id="about" style="height: 100%;padding:10px 0">
        <div class="col-sm-3" style="">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px;border:2px solid black; -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-3" style=" margin:10px 0px;padding-top: 33px;opacity:.8">
         <p style="padding-bottom:6px;">name: tanima hossain</p>
          <p>designation: architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      </div>
      
      <div style="margin:30px 0;" class="shadow">
      <div class="row" id="about" style="height: 100%; padding:10px 0;">
        <div class="col-sm-3 sh" style="border-radius: 2px; ">
          <img src="icon_man.jpg" width="60%" height="160px"style="border-radius: 3px;-webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
  filter: grayscale(100%);">
        </div>
         <div id="person1" class="col-sm-4 sh1" style=" margin:10px 0px;padding-top: 33px;opacity:.8;">
         <p style="padding-bottom:6px;">name: shohrub hossain</p>
          <p style="width:100%">designation: co-founder, ceo & lead-architect</p>
          <p></p>
          <p></p>
        </div>
      </div>
      
      
      
      

		
</div>

			</div>
		
			
		
	</div>

	</div>
</body>
</html>