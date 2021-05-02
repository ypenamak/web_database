<?php 
	session_start(); 
	$session_username = (isset($_SESSION["username"]))? $_SESSION["username"] : '';
	$session_isAuthor = (isset($_SESSION["isAuthor"]))? $_SESSION["isAuthor"] : 2;
	$session_isAdmin = (isset($_SESSION["isAdmin"]))? $_SESSION["isAdmin"] : 2;
	$session_isUser = (isset($_SESSION["isUser"]))? $_SESSION["isUser"] : 2;
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">

  <style>
    .heading {
      text-align: left;
    }

    .instructions{
      text-align: left;
    }

    .upload {
      text-align: left;
    }

    * {box-sizing: border-box}
    body {
        background-image: url("../Pics/author.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        background-opacity: 0.5;
        /*background-color:  #cccccc(0, 128, 0, 0.4);*/
    } 


    .tabbutton {
      background-color: skyblue;
      font-family: 'Alice';
      font-weight: bold;
      color: black;
      font-size: 16px;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 10px;
    }

    /* Change background color of buttons on hover */
   .tabbutton:hover {
      background-color: darkgray;
      opacity: 0.6;
    }

    /* Create an active/current tablink class */
    .tabbutton.active {
       background-color: #ccc;
    }

    html, body{       
        height: 100%;
        margin: 0;        
      }   
    
    .heading {        
        text-align: center;       
        
    }
    .instructions {
      text-align: center;
    }
    
    .search {
      text-align: center;
    }
    
    .button {
    border: none;
    color: white;
    padding: 4px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    font-weight: bold;
    margin: 2px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    }    
    .search1 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
    
    }
    .search1:hover {
    background-color: #008CBA;
    color: white;
    }
    .subscribe{
      background-color: darkred;
      color: white;
      width: 10%;
      font-size: 14px;
      
    }
    .subscribe:hover{
      background-color: #008CBA;
      color: brown;
      opacity: 2;
      animation: reverse;
      
    }

    /* Add a black background color to the top navigation */
    .topnav {
      background-color: #333;
      overflow: hidden;
    }

    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 10px 16px;
      text-decoration: none;
      font-size: 15px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Add a color to the active/current link */
    .topnav a.home {
      background-color: #008CBA;
      color: white;
    }
    table {
      width:100%;
      
    }
    table, th, td {
      border: 2px solid #008CBA;
      border-collapse: collapse;
      background-color: #ffc34d;
    }
    
    * {box-sizing: border-box}
    

  /* Style tab links */
  .tablinks {
    background-color: #b300b3;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 12px 14px;
    font-size: 15px;
    font-weight: bold;
    width: 20%;
  }

  .tablinks:hover {
    background-color: #777;
  }

  /* Style the tab content (and add height:100% for full page content) */
  .tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
  }

  .hidden {
      display: none;
  }

  .status {
      background-color: transparent;
      color: white; 
      float: right;
      text-align: center;
      padding: 10px 16px;
      font-weight: bold;
  }
  </style>
<head>

  <title>Author Uploads Stories</title>
  
</head>

<body> 
<main>        
  <div class="topnav">
          <a class="home" href="index.php "><i class="fa fa-home" aria-hidden="true"></i> Home</a>
          <a class = "admin" style= "float: right;" href="admin_view.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Page</a>
          <a class = "author" style= "float: right;" href="author_view.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Author Page</a>
          
          <a class = "login" style= "float: right;" href="../html/login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
          <a class = "signup" style="float: right;" href="../html/register.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>          
	  <a class = "logout hidden" style= "float: right;" href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i> | Logout</a>
	  <span class = "status hidden"></span>

        </div>
    </main>

<h2>Hello, Author!</h2>
<i><h3>Select a tab to proceed..</h3></i>

<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Upload Your Stories')" id="defaultOpen">Upload Your Stories</button>
  <button class="tablinks" onclick="openTab(event, 'Check Status')">Check Status</button>
  <button class="tablinks" onclick="openTab(event, 'User View')">Switch to User View</button>

</div>

<div id="Upload Your Stories" class="tabcontent">

  <p>You may upload your stories here!</p>
  <button class="tablinks" onclick="window.location.href='author_upload.php'">Click Here</button>
</div>

<div id="Check Status" class="tabcontent">

  <p>You may check the status of your uploaded stories here!</p> 
  <button class="tablinks" onclick="window.location.href='author_check_status.php'">Check Status</button>
</div>

<div id="User View" class="tabcontent">

  <p>You may click the below button to switch to user view!</p> 
  <button class="tablinks" onclick="window.location.href='index.php'">Home Page</button>
</div>


<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</script>
<script>
		const sessionUserName = '<?php echo $session_username;?>';
		const sessionIsAuthor = Number('<?php echo $session_isAuthor;?>');
		const sessionIsAdmin = Number('<?php echo $session_isAdmin;?>');
		const sessionIsUser = Number('<?php echo $session_isUser;?>');
	</script>
	<script src="../js/sess.js"></script>
</body>
</html>
