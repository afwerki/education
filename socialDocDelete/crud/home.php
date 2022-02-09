<?php 
	include('../functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">




<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  font-size: 40px;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 80px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
</style>
</head>
<body>

<div class="go fly-go-shopifay">
  <!--<img src=".\upload\logo.png" width="1300" height="2">-->
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="espctial.php">espctial deal</a>
  <a href="index.php">contact us</a>
  <a href="login.php">login</a>

</div>
</div>
</body>
</html>
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			<!--<img src="../images/admin_profile.png"  >-->

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<h1><a href="home.php?logout='1'" style="color: red;">logout</a></h1>
						&nbsp; <H1><a href="index.php">&nbsp; CRUD the website</a></H1>
					</small>

				<?php endif ?>
				
			</div>
		</div>



	</div>
		
</body>
</html>