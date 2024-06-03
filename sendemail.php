<?php
  session_start(); 

 if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }

ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>send email</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="cs/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
<?php 
    if(isset($_POST['sendmail'])) {
      require 'PHPMailer/PHPMailerAutoload.php';
      require 'credential.php';

      $mail = new PHPMailer;

      //$mail->SMTPDebug = 4;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'mail.passioarchitects.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = EMAIL;                 // SMTP username
      $mail->Password = PASS;                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom(EMAIL, 'passio architects');
      $mail->addAddress($_POST['email']);     // Add a recipient

      $mail->addReplyTo(EMAIL);
      // print_r($_FILES['file']); exit;
      for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
        $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
      }
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $_POST['subject'];
      $mail->Body    = $_POST['message'];
      if(!$mail->send()) {
          header("location:failed.php");
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          header("location:success.php");
          ob_end_flush();
      }
    }
 ?>
		<div class="form-v5-content">
			<form class="form-detail" method="post" enctype="multipart/form-data">
			<h2>send email</h2>
				<div class="form-row">
					<label for="full-name">to</label>
					<input type="email" name="email" id="full-name" class="input-text" placeholder=""  required>
					<i class="fas fa-envelope"></i>
				</div>
				
				<div class="form-row">
					<label for="password">subject</label>
					<input type="text" name="subject" id="password" class="input-text"  >
					<i class=""></i>
				</div>
        <div class="form-row">
          <label for="password">message</label>
         <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4"></textarea>
        </div>

				<div class="form-row" style="margin-top: 30px">
          <label for="password1">file</label>
          <input name="file[]" type="file" id="password1" class="input-text" placeholder="your password" >
        
        </div>

				<div class="form-row-last">
					<input type="submit" name="sendmail" class="register" value="send">
				</div>
		
			</form>
		</div>
	</div>

</body>
</html>