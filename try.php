<!--</body>
</html>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

Sidebar/menu
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h4 class="w3-wide" style="font-weight:bold"><b>ከ6ኛ እስከ 12ኛ ላሉ ተማሪዎች ጥያቄ እና መልስ</b></h4>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="grade6">
      ራስን ፈትን Q&A<i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#" class="w3-bar-item w3-button">Grade 6 Physics</a>
      <a href="#" class="w3-bar-item w3-button">Grade 6 Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Grade 6 Biology</a>
      <a href="#" class="w3-bar-item w3-button">Grade 6 Maths</a>
      <a href="#" class="w3-bar-item w3-button">Grade 6 English</a>
      <a href="#" class="w3-bar-item w3-button">Grade 7 Physics</a>
      <a href="#" class="w3-bar-item w3-button">Grade 7 Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Grade 7 Biology</a>
      <a href="#" class="w3-bar-item w3-button">Grade 7 Maths</a>
      <a href="#" class="w3-bar-item w3-button">Grade 7 English</a>
      <a href="#" class="w3-bar-item w3-button">Grade 8 Physics</a>
      <a href="#" class="w3-bar-item w3-button">Grade 8 Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Grade 8 Biology</a>
      <a href="#" class="w3-bar-item w3-button">Grade 8 Maths</a>
      <a href="#" class="w3-bar-item w3-button">Grade 8 English</a>
      <a href="#" class="w3-bar-item w3-button">Grade 9 Physics</a>
      <a href="#" class="w3-bar-item w3-button">Grade 9 Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Grade 9 Biology</a>
      <a href="#" class="w3-bar-item w3-button">Grade 9 Maths</a>
      <a href="#" class="w3-bar-item w3-button">Grade 9 English</a>
      <a href="#" class="w3-bar-item w3-button">Grade 10 Physics</a>
      <a href="#" class="w3-bar-item w3-button">Grade 10 Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Grade 10 Biology</a>
      <a href="#" class="w3-bar-item w3-button">Grade 10 Maths</a>
      <a href="#" class="w3-bar-item w3-button">Grade 10 English</a>
      <a href="#" class="w3-bar-item w3-button">Grade 11 Physics</a>
      <a href="#" class="w3-bar-item w3-button">Grade 11 Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Grade 11 Biology</a>
      <a href="#" class="w3-bar-item w3-button">Grade 11 Maths</a>
      <a href="#" class="w3-bar-item w3-button">Grade 11 English</a>
      <a href="#" class="w3-bar-item w3-button">Grade 12 Physics</a>
      <a href="#" class="w3-bar-item w3-button">Grade 12 Chemistry</a>
      <a href="#" class="w3-bar-item w3-button">Grade 12 Biology</a>
      <a href="#" class="w3-bar-item w3-button">Grade 12 Maths</a>
      <a href="#" class="w3-bar-item w3-button">Grade 12 English</a>
    </div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:100px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  
<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>


