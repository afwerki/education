//<?php 
//include("../includes/docheader.php");
//?>
<?php
$conn=new PDO('mysql:host=localhost:3306; dbname=studeqt0_social', 'studeqt0_afwerki', 'Ag.1231212.') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['photo']['name'];
  $size=$_FILES['photo']['size'];
  $type=$_FILES['photo']['type'];
  $temp=$_FILES['photo']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"upload/".$name);
$query=$conn->query("insert into combinatory(name)values('$name')");
if($query){
header("location:combinatory.php");
}
else{
die(mysql_error());
}
}
?>
<!DOCTYPE html>
<html>
<title>Combinatorics</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Combinatorics</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    
   
  </div>
  <hr>
  <div class="w3-container">
    <h5>More</h5>
  </div>
  <div class="w3-bar-block">
    <a href="../index.php" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="../index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bank fa-fw"></i>Home page</a>
    <a href="../index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views Other Departments </a>
    <a href="../index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>Request Document</a>
    <a href="../index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News Page</a>
    <a href="../index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="aljebra.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Alijebra</a>
    <a href="applied.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Applied Maths</a>
    <a href="calculus.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Calulus</a>
    <a href="combinatory.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Combinatorics</a>
    <a href="geometry.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Geometry</a>
    <a href="logic.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Logic</a>
    <a href="mathsPhysics.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Maths pysics</a>
    <a href="probability.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Probablity </a>
    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<img src="mathspic/Combinatorics.jpg" alt="Girl in a jacket" width="1100" height="300">
  <!-- Header -->
  <!--<header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Views</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shares</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>-->

  <div class="w3-panel">
   <style>
</style>
<body>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h3>Combinatorics</h3>	
    <p>
Combinatorics is an area of mathematics primarily concerned with counting, both as a means and an end in obtaining results, and certain properties of finite structures. It is closely related to many other areas of mathematics and has many applications ranging from logic to statistical physics, from evolutionary biology to computer science, etc.<br>

To fully understand the scope of combinatorics requires a great deal of further amplification, the details of which are not universally agreed upon. According to H.J. Ryser, a definition of the subject is difficult because it crosses so many mathematical subdivisions. Insofar as an area can be described by the types of problems it addresses, combinatorics is involved with<br>

the enumeration (counting) of specified structures, sometimes referred to as arrangements or configurations in a very general sense, associated with finite systems,<br>
the existence of such structures that satisfy certain given criteria,
the construction of these structures, perhaps in many ways, and
optimization, finding the "best" structure or solution among several possibilities, be it the "largest", "smallest" or satisfying some other optimality criterion.</p>
		<br />

		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
				Select File
					<input type="file" name="photo" id="photo" /></td>
					<input type="submit" name="submit" id="submit" value="Submit" />
			</form>
		<br />
		<br />
		<table cellpadding="" cellspacing="0" border="1" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<h1><th width="100%" align="center">Files</th></h1>
					<th align="center">Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from combinatory order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="alert-success"><a href="download.php?filename=<?php echo $name;?>">Download</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
            

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
  
    <p>created by : <a href="https://www.facebook.com/afework.grumnhe.1" target="_blank">afwork grumnhe</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>