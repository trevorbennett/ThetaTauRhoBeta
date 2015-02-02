<html>
<head profile="http://gmpg.org/xfn/11">
<title>Register, Login, Database Display App</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar">
    <p>Created by Trevor Bennett | Contact me at: tb684611@ohio.edu</p>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#">Register, Login, Database Display App</a></h1>
    </div>
    <div class="fl_right"> <a href="#"><img src="images/demo/468x60.gif" alt="" /></a> </div>
    <br class="clear" />
  </div>
</div>

 <?php

    // First we execute our common code to connection to the database and start the session
    require("common.php");
    
    // We remove the user's data from the session
    unset($_SESSION['user']);
    
    // We redirect them to the login page
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';    
exit;
    die("Redirecting to: login.php"); 
   ?>