
<?php 
	session_start();
	
    if (!isset($_SESSION["fn"])){
        header("location:../index.php");
    }

	// if(isset($_GET['logout'])){
	// 	unset($_SESSION['user']);
	// 	header("location: login.php");	exit();
	// }

 ?>


<html>
<head>
   <title>Main Page</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="../styles/CVStyles.css">
   <link rel="stylesheet" href="../styles/GalleryStyles.css">
   <link rel="stylesheet" href="../styles/menuStyles.css">
   <link rel="stylesheet" href="../styles/footer.css">
   <link rel="stylesheet" href="../styles/mainPageStyles.css">
   <link rel="stylesheet" href="../styles/formsStyles.css">

</head>
<body>
    <div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                    <a href="mainPage.php">
                        <li><i ></i>Home Page</li>
                    </a>
                    <a href="./GalleryPage.php">
                        <li><i ></i>Gallery</li>
                    </a>
                    <a href="./CVPage.php">
                        <li><i ></i>CV</li>
                    </a>
                    <a href="./ContactPage.php">
                        <li><i ></i>Contact Page</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="user-welcome">
        <h3> Welcome <?php echo $_SESSION["fn"]; ?>!</h3>        
    </div>
    
    <a href="../index.php" class="logout-btn">Logout</a>
    
    </div>
    <br>
    
    <div class="main-page-styles">
<p >Hi! I am very excited to be sharing more about myself with you. Let's start with my CV, which provides a clear summary 
    of my technical background and professional skills. </p>

    </div>
    <div class="page-center">
    <a href="CVPage.php" class="card">
    <img src="../images/CV.png" alt="Card Image" class="card-image">
  </a>
    </div>
    
    <footer class="pages-footer">
    
        <p>
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/razan-ayoub" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="mailto:razan.ayoub398@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
             
            
        </p>
        <h6>Beirut, Lebanon</h6>
      <h6>All rights reserved <i id="small" class="fas fa-copyright"></i>
      </h6>
    </footer>
</body>


</html>

<script>


</script>