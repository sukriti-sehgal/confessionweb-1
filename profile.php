<?php

session_start();

include 'conn.php';

$username=$_SESSION['name'];



 ?>

 <!DOCTYPE html>
 <html>
 <head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

 	<title>Update your profile! - ConfessionWeb</title>


<style>

#head {
	font-size: 25px;
	font-family: verdana;
	text-align: center;
}

button {
	float: left;
}

.navbar-nav {
	float: right;
}

#head2 {
	font-size: 50px;
	font-family: impact;
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




 </head>
 <body>
<br><br>

<center>

<img style="height: 120px; width: 120px; margin-top: 1px;" src="logo/logo.png">
	<h1 id="head2" class="col-md-8">ConfessionWeb</h1></center>

<br>

<div style="float: left;" class="col-md-2">


<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="home.php" role="tab" aria-controls="v-pills-home" aria-selected="true">Feed</a>
  <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="assets/about.html" role="tab" aria-controls="v-pills-settings" aria-selected="false">About</a>
<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="assets/freq_q_ans.html" role="tab" aria-controls="v-pills-settings" aria-selected="false">FAQs</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="logout.php" role="tab" aria-controls="v-pills-settings" aria-selected="false">Logout</a>
</div>






</div>

<center>
	<div class="tab-content" id="v-pills-tabContent">
<div class="col-md-10">
<div class="card">
	<div class="card-body">
		
<form class="form" method="post" action="links.php">
	<br>

	<h2 id="head" class="col-md-8">Update Your Profile!</h2>
	<hr><br>

   <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-8">
        <input type="text" name="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="Email" required>
      </div>
    </div>


    <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-8">
        <input type="password" name="pass" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="Password" required>
      </div>
    </div>


    <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Phone Number</label>
      <div class="col-sm-8">
        <input type="tel" name="number" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="Phone Number (with country code)" required>
      </div>
    </div>

<div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Age</label>
      <div class="col-sm-8">
        <input type="text" name="age" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="How old are you?" required>
      </div>
    </div>

    <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Position</label>
      <div class="col-sm-8">
        <input type="text" name="position" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="Position in a company?" required>
      </div>
    </div>


    <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Facebook</label>
      <div class="col-sm-8">
        <input type="text" name="facebook" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="Facebook profile Link" required>
      </div>
    </div>

    <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Linkedin</label>
      <div class="col-sm-8">
        <input type="text" name="linkedin" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="Linkedin Profile Link">
      </div>
    </div>

    <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Bio</label>
      <div class="col-sm-8">
        <textarea style="resize: none;" type="text" name="bio" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="Linkedin Profile Link" value="<?php $row['bio'] ?>" required></textarea>
      </div>
    </div><br>

    
						<button style="margin-left: 175px;" class="btn btn-primary" type="submit">
							Submit
						</button>
					


</form>






	</div>

</div>


</div>
</div>

<br><br>


<div style="margin-left: 110px;" class="col-md-9">
<div class="card mt-2">
	<div class="card-body">

<h2 id="head" class="col-md-8">Your Profile!</h2>

<hr>

<?php	$sql = "SELECT 	* FROM signup WHERE name='$username'";
                        
                        
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
    
          
          echo  "<br>"."<b>".$row['position']."</b>"."<br>"."Username: ".$row["name"]."<br>"."<br>"."Email: ".$row["email"]."<br>"."<br>"."Phone Number: ".$row["number"]."<br>"."<br>"."Age: ".$row["age"]."<br>"."<br>"."Facebook: ".$row["facebook"]."<br>"."<br>"."Linkedin: ".$row['linkedin']."<br>"."<br>"."Bio:"."<br>"."<br>"."<i>".$row['bio']."</i>";			

		
        echo "<br><br>";
    }
} else {
    echo "No Details!";
}

$conn->close();
?>


<hr>

		</div>
	</div>
</div>






</div>




</div>
</center>





<br><br><br>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Use of this Site is subject to express terms of use. By using this site, you signify that you agree to be bound by these <a href="assets/privacy_policies.html">Universal Terms of Service.</a><br/>Copyright &copy; ConfessionWeb 2018<br/>All Rights Reserved.</p>
      </div>
      <!-- /.container -->
    </footer>




 
 </body>
 </html>