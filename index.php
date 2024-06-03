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
  <title>passio architects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
 <link href="styles.css" type="text/css" rel="stylesheet">
  <script src="jquery.js"></script>
  <script src="js.js"></script>
 <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
<script>
$(document).ready(function(){
  $("#new").click(function(){
    $("#nav1").show();
    $("#footers").hide();
    $("#main1").show();
    $("#new").css("margin-top","330px");
    $(".main").css("background-color","rgba(0, 0, 0, 0.6)");
    $(".main").css("z-index",3);
     $(".main").css("height","100%");
     $(".main").css("background-size","cover");

  });
  $("#footers").mouseover(function(){
 $(".main").css("background-color","rgba(0, 0, 0, 0.5)");
    $(".main").css("z-index",3);
     $(".main").css("height","100%");
     $(".main").css("background-size","cover");
    });
    $("#footers").mouseout(function(){
$(".main").css("background-color","rgba(0, 0, 0, 0)");
    });
});

$(document).ready(function(){
  $('ul li a').click(function(){
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
		

		<div class="row" id="nav1" style="display:none">
			<div class="col-sm-12">
				
			
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
       <li><a href="https://sea-shared-38.hostwindsdns.com:2096/logout/?locale=en">webmail</a></li>
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

			<div class="row">
				<div class="col-sm-4" >
					
				</div>

				<div class="col-sm-8" id="title">
					<p id="new"><span style="color: red;cursor: ">passio</span> architects</p>
				</div>
					
			</div>
					<div class="footer" style="">
						<!--<a href="" id="footers" style="letter-spacing: 5px">@Passio Architect</a>-->
					</div>
			</div>
		
			
		
	</div>

	</div>
</body>
</html>