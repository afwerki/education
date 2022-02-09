<?php 
//include("../includes/docheader.php");
?>
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
$query=$conn->query("insert into dnn(name)values('$name')");
if($query){
header("location:DNN.php");
}
else{
die(mysql_error());
}
}
?>
<html>
<head>
<html>
<head>
<!DOCTYPE html>
<html>
<title>Deep Neural Networks</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Deep Neural Networks</span>
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
    <a href="Csharp.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>C#</a>
    <a href="C.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> C</a>
    <a href="htmlandcss.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>HTML and CSS</a>
    <a href="java.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Java</a>
    <a href="JS.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  JS</a>
    <a href="PHP.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>PHP</a>
    <a href="python.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Python</a>
    <a href="SQL.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> SQL</a>
    <a href="database.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>Database Management System</a>
    <a href="analytics.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>Big Data/Analytics</a>
    <a href="AI.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Artificial Intelligence</a>
    <a href="ANN.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> ANN(Artificial neural network)</a>
    <a href="DNN.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>DNN(deep neural network)</a>
    
    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
<img src="techpic/data.png" alt="Girl in a jacket" width="1100" height="400">
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
		<h3>Deep Neural Networks</h3>	
    <p>Deep learning architectures such as deep neural networks, deep belief networks, recurrent neural networks and convolutional neural networks have been applied to fields including computer vision, machine vision, speech recognition, natural language processing, audio recognition, social network filtering, machine translation, bioinformatics, drug design, medical image analysis, material inspection and board game programs, where they have produced results comparable to and in some cases surpassing human expert performance.<br>

Artificial neural networks (ANNs) were inspired by information processing and distributed communication nodes in biological systems. ANNs have various differences from biological brains. Specifically, neural networks tend to be static and symbolic, while the biological brain of most living organisms is dynamic (plastic) and analog.<br><br>

The adjective "deep" in deep learning comes from the use of multiple layers in the network. Early work showed that a linear perceptron cannot be a universal classifier, and then that a network with a nonpolynomial activation function with one hidden layer of unbounded width can on the other hand so be. Deep learning is a modern variation which is concerned with an unbounded number of layers of bounded size, which permits practical application and optimized implementation, while retaining theoretical universality under mild conditions.<br> In deep learning the layers are also permitted to be heterogeneous and to deviate widely from biologically informed connectionist models, for the sake of efficiency, trainability and understandability, whence the "structured" part.</p>
		<br />

		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
				<h3>If you have any document reated to this Subject please Select File and upload it her!</h3>
					<input type="file" name="photo" id="photo" /></td>
					<input type="submit" name="submit" id="submit" value="Submit" />
			</form>
		<br />
		<br />
		<table cellpadding="" cellspacing="0" border="1" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<h1><th width="100%" align="center">Deep Neural Networks Files to Downlonad</th></h1>
					<th align="center">Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from dnn order by id desc");
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
