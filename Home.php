<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>PharmaZ Home</title>
    <!-- this is the code that will allow icon to be visible in the title bar of the brower -->
    <link rel="icon" type="image/ico" href="Logo.png" />
    <!-- you can also say this:  <link rel="icon" type="image/png" href="location/image.png" /> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<style>

    #parent{
      border-color: #FFFFFF;
    background-color: #d3d3d3;
    padding:10px;
    }
    #b1,#b2,#b3,#b4{
	     float: center;
	     margin: 10px;
	     background-color: #05aaca;
	     border-color: #2ea6cf;
}
    #i1{
      padding-top: 50px;
    padding-right: 50px;
    padding-bottom: 50px;
    padding-left: 50px;
    }

</style>
<body >


  <div id="parent">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Home.php">PharmaZ</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="login.html">Login</a></li>
      <li><a href="signup.html">Sign Up</a></li>
      <li><a href="aboutus.html">About Us</a></li>
      <li><a href="contactus.html">Contact Us</a></li>
      <li><a href="logout.php">Logout</a></li>
      
      <?php if(isset($_COOKIE["user_name"])) echo $_COOKIE["user_name"]; ?>
      <form class="navbar-form navbar-left" >
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </ul>
  </div>
</nav>

  <img src="Logo.png" alt="PharmaZ Logo" align="right" width=320px height=150px><br>
  <h1 style="color:#000366;"><i>Welcome to PharmaZ!</i> </h1>
  <h2>Your favourite online pharmacy and medical test portal.</h2><br><br>
  <h4>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Buy Meds Online &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
    Search Prescriptions &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Order Tests at Home &nbsp; &nbsp; &nbsp; &nbsp;
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;See Doctors      </h4>
  <a href="store.html"><img src="menu1.jpg" alt="Shop for meds" height=350px width=329px /></a>
  <a href="pres.html"><img src="menu2.jpg" alt="Prescriptions" height=350px width=329px/></a>
  <a href="test.html"><img src="menu3.png" alt="Home Tests" height=350px width=329px /></a>
  <a href="doctor.html"><img src="menu4.png" alt="Doctors" height=350px width=329px/></a>


</div>
</div>
</body>
<script src="https://www.gstatic.com/firebasejs/5.5.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCG2eq-BVkC8BKCL-CsjUmQTbklu_EzrLk",
    authDomain: "pharmz-219413.firebaseapp.com",
    databaseURL: "https://pharmz-219413.firebaseio.com",
    projectId: "pharmz-219413",
    storageBucket: "pharmz-219413.appspot.com",
    messagingSenderId: "663650845726"
  };
  firebase.initializeApp(config);
</script>
</html>
