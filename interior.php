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
  <title>interior designs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="styles.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
  <script src="jquery.js"></script>
  <script src="js.js"></script>
  <link rel="stylesheet" type="text/css" href="Interior.css">
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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<style>
    .int:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
</head>
<body>
	<div class="test" id="home">
	<div class="container">
		<div class="main">
		
		<div class="row" id="nav1" style="display:;padding:10px 0px;">
			<div class="col-sm-12" id="
			topheader">
				
			
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
<div class="row" style="margin-top: 50px; padding:0 20px;">
  <h3 style="
  text-align: left;line-height: 20px;margin-left: 15px; font-weight: bold;opacity: .8"><SPAN style="color:red">interior</SPAN> designs</h3>
</div>


<div class="row" style="margin-top: 40px;font-size: 14px;padding: 0 20px;">

        	<div class="col-sm-3" id="" style="">
<div style="padding:8px 0 5px 8px;" class="int">
                 <a href="sucona.php" target="_blank"><img class="img-thumbnail" src="copys.png" width="97%";></a>
                  <a href="sucona.php" target="_blank" style="text-align: center;margin-top: 10px;color: blue;">suchana center point</a>
                  <p style="opacity: .5;margin-top: 5px;color: black">7 photos</p>

				</div>
				</div>

<div class="col-sm-3" id="" style="">
<div style="padding:5px 5px 5px 5px;"class="int">
                <a href="dunhil.php" target="_blank"><img class="img-thumbnail" src="dun1.png" width="100%";></a>

                <a href="dunhil.php" target="_blank" style="text-align: center;margin-top: 10px;color: blue;">dunhil-lounge, sheraton</a>
               <p style="opacity: .5;margin-top: 5px;color: black">3 photos</p>
        
        </div>
        </div>
        
         <div class="col-sm-3" id="" style="">
<div style="padding:5px 5px 5px 5px;"class="int">
               <a href="tec.php" target="_blank"><img class="img-thumbnail" src="tec1.png" width="100%";></a>

              <a href="tec.php" target="_blank" style="text-align: center;margin-top: 10px;color: blue;">tech-ven-moon-light</a>
              <p style="opacity: .5;margin-top: 5px;color: black">4 photos</p>
  
        </div>
        </div>
          <div class="col-sm-3" id="" style="">
<div style="padding:5px 5px 5px 5px;"class="int">
                      <a href="boro.php" target="_blank"><img class="img-thumbnail" src="s1.png" width="100%";></a>

                    <a href="boro.php" target="_blank" style="text-align: center;margin-top: 10px;color: blue;">boromia properties ltd</a>
                   <p style="opacity: .5;margin-top: 5px;color: black">5 photos</p>
                
        </div>
        </div>

				


        

					
	</div>



<div class="row" style="margin-top: 30px;margin-bottom: 30px;font-size: 14px;padding:0 20px;">

    


        <div class="col-sm-3" id="" style="">
<div style="padding:5px 5px 5px 5px;"class="int">
              <a href="sddl.php" target="_blank"><img class="img-thumbnail" src="boro1.png" width="100%";></a>

              <a href="sddl.php" target="_blank" style="text-align: center;margin-top: 10px;color: blue;">sddl residence</a>
              <p style="opacity: .5;margin-top: 5px;color: black">4 photos</p>

        
        </div>
        </div>
        
        <div class="col-sm-3" style="">
          
<div style="padding:5px 5px 5px 5px;"class="int">
              <a href="home.php" target="_blank"><img class="img-thumbnail" src="home1.png" width="100%";></a>

              <a href="home.php" target="_blank" style="text-align: center;margin-top: 10px;color: blue;">home design</a>
               <p style="opacity: .5;margin-top: 5px;color: black">5 photos</p>

        </div>
</div>
        		
				<div class="col-sm-3" style="">
					<div style="padding:5px 5px 5px 5px;"class="int">

                <a href="abu.php" target="_blank"><img class="img-thumbnail" src="abu1.png" width="100%";></a>
                <a href="abu.php" target="_blank" style="text-align: center;margin-top: 10px;color: blue;">abu-taleb duplex</a>
                 <p style="opacity: .5;margin-top: 5px;color: black">7 photos</p>

				</div>

      </div>
          
      </div>
					
			</div>
		
			
		
	</div>

	</div>
</body>
</html>