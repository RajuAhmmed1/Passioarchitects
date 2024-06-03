<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>reset_password</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
 <link href="styles.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <script src="jquery.js"></script>
  <script src="js.js"></script>
  <link rel="stylesheet" type="text/css" href="global.css">


  <script>
$(document).ready(function(){
	 $("#menu").mouseover(function(){
 	$("#main1").css("color",'red');
    });
    $("#menu").mouseout(function(){
		$("#main1").css("color",'white');
    });
  
});


$(document).ready(function(){
  $('.aa span').click(function(){
    $('span').removeClass("active");
    $(this).addClass("active");
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

$( '#topheader .navbar-nav a' ).on( 'click', function () {
	$( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});


</script>
</head>
<body class="form-v5">
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
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="new_password.php" method="post">
			
				<h2 class="form-title">reset password</h2>

					<?php include('errors.php'); ?>
				<div class="form-row">
					<label for="password">new password</label>
					<input type="password" name="password_1" id="password" class="input-text" placeholder="your password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row">
					<label for="password1">confirm new password</label>
					<input type="password" name="password_2" id="password1" class="input-text" placeholder="your password" required>
					<i class="fas fa-lock"></i>
				</div>
				
				<div class="form-row-last">
          <input type="submit" name="new-password" class="register" value="submit">
			
				</div>
				
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>