<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>



<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo "$username" ?> | ConfessionWeb</title>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


	
	<style>
		
		hr { 

    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    width: 80%;

    border: 1px solid brown;
			
			
			
} 
		#post{
			
			text-align: center;
		}
		#head{
			background-color: brown;
			color: white;
		}

	#head2{
text-align: right;
margin-bottom: 10px;
		}
		#img{
			height: 180px;
			width: 180px;
			border-radius: 100px;
			border: ;
                       
		}



#img2{
			height: 25px;
			width: 25px;
			border-radius: 100px;
			border: 1px solid brown;
                       
		}



		
		#pro3{
			text-align: right;
		}
		 input[type=submit], input[type=reset] {
    background-color:brown;
    border: 1px solid black;
    color: white;
   height: 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			 border-radius: 8px;
}
		input[type=text] {
    
    border: 2px solid brown;
    
  
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			border-radius: 5px;
}

textarea{
   outline: blue;
   resize: none;
   overflow: auto;
   width: 350px;
   height: 40px;
   padding: 5px;
   border: 3px solid brown;

} 

#body {
box-shadow: ;
transition: 0.3s;
width: 100%;
background-color: ;

}





.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

body {

  background-color: #e6e6e6;
  background-image: url("assets/img/.jpg");
  height: 100%;
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.details {

   font-size: 30px;

}

.animation {
text-align: center;

}











	</style>


<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



<script>    
$(function(){ /* to make sure the script runs after page load */

	$('.item').each(function(event){ /* select all divs with the item class */
	
		var max_length = 90; /* set the max content length before a read more link will be added */
		
		if($(this).html().length > max_length){ /* check for content length */
			
			var short_content 	= $(this).html().substr(0,max_length); /* split the content in two parts */
			var long_content	= $(this).html().substr(max_length);
			
			$(this).html(short_content+
						 '<a href="#" class="read_more">...Read More</a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Alter the html to allow the read more functionality */
						 
			$(this).find('a.read_more').click(function(event){ /* find the a.read_more element within the new html and bind the following code to it */
 
				event.preventDefault(); /* prevent the a from changing the url */
				$(this).hide(); /* hide the read more button */
				$(this).parents('.item').find('.more_text').show(); /* show the .more_text span */
		 
			});
			
		}
		
	});
 
 
});
</script>





</head>
<body>


<div class="container-fluid">
	
	<div id="head" class="row">
		
		
	<div class="col-xs-7"><h2><b>ConfessionWeb</b></h2>
	</div>
    
	<h3><?php echo "Welcome back, $username"  ?></h3>

   <h3><a class="button" style="text-decoration: none; color: white; float: right; width: 100px;" href="logout.php">Logout</a></h3>
  <h3><a class="button" style="text-decoration: none; color: white; float: right; width: 100px;" href="profile.php">Profile</a></h3>


	</div>
    <br>
	<br>
	
	
	<br>
	
	<div id="profile" class="row">
		
		
               

	<div class="col-xs-8">
		<?php	
		      $username=$_SESSION['name'];

		       $sql = "SELECT 	* FROM signup where name='$username'";
              $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                // output data of each row
               while($row = $result->fetch_assoc()) {
		       $location= $row["image"];
              echo "<img id='img' src='$location'>";
              }
             } else {
            echo "0 results";
           }
          $conn->close();
             ?>
             	</div>
    <div id="pro2" class="col-xs-6" style="margin-top: 100px; margin-right: 80px;">
		<?php



                 include("conn.php"); 


           $username=$_SESSION['name'];


           if(isset($_POST['submit']))

               {
	$name=$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	
	
	
	if($name)
	{
	$location="image/$name";
    move_uploaded_file($tmp_name,$location);	
		
	$query=mysqli_query($conn,"UPDATE signup SET image='$location' WHERE name='$username'");
		
		
		header("Location: suc.php");
		
	}
	else 
		die("Please select a file");
}

 

echo "<br>";
echo "


<form action='home.php' method='post' enctype='multipart/form-data'>
	
<input type='file' name='myfile' required>
<input type='submit' name='submit' value='Submit'>
</form>
";


?>

	

</div>
  <div id="pro3" class="col-xs-8">
<br><br>

     

  </div>

</div>
	<br><br>
    
    

<div id="post" class="row">
		

                





       
	<div class="col-xs-12">
<form method="post" action="post.php">
	<textarea type="text" name="title" placeholder="Thinking to confess? Give it a title!" style="height: 50px;" required></textarea><br><br>
<textarea size="50" style="height: 100px;" type="text" name="des" placeholder="Confess Something..." required></textarea><br>
                

<br>
	

		
<button type="submit" class="button"><span>Confess </span>
		
</form>
	<br>
	</div>
	
    
</div>


	<br><br><br>

<br>
	<center>
    <div id="body" class="col-xs-2">
		

	<div class="col-xs-12">



        
		<?php	$sql = "SELECT * FROM posts ORDER BY id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


   ?>
	

<div style="background-color: white;" class="card mt-5">
	<div class="card-header">
		
		<b><span style="font-size: 20px;"><a href="profile.php?id=<?php echo $row['id'];?>"><?php echo $row["name"]; ?></a></span></b>
                <span class="icon fa fa-stack fa-md">
    <i class="icon fa fa-certificate fa-stack-2x"></i>
    <i class="icon fa fa-check fa-stack-1x fa-inverse"></i>
</span><br>
	<div class="card-body">
		<h5 style="font-size: 15px;" class="card-title"><?php echo $row["title"]; ?></h5><br>
                <div class="item">
		<p class="card-text"><?php echo $row["post"]; ?></p><br>
                </div>
		<div class="card-footer text-muted"><?php echo $row["time"]; ?></div>
		
	</div>
</div>
</div>
         
				
  <?php 
		
            }
} else {
    echo "No Confessions yet.<br> Start making confessions!";
}
$conn->close();
?>

</div>

</div>











	</div>
	</div>
</center>

<br><br>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p style="color: white;" class="m-0 text-center text-white">Use of this Site is subject to express terms of use. By using this site, you signify that you agree to be bound by these <a href="/assets/privacy_policies.html">Universal Terms of Service.</a><br/>Copyright &copy; <a href = "/assets/about.html">ConfessionWeb</a> 2018<br/>All Rights Reserved.</p>
      </div>
      <!-- /.container -->
    </footer>


<!--"<img id='img2' src='$location'>"--->


</body>
</html>