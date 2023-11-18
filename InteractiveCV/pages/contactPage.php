<?php 
	session_start();
	
    if (!isset($_SESSION["fn"])){
        header("location:../index.php");
    }
 ?> 
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="stylesheet" href="../styles/CVStyles.css">
        <link rel="stylesheet" href="../styles/GalleryStyles.css">
        <link rel="stylesheet" href="../styles/menuStyles.css"> 
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="../styles/mainPageStyles.css">


        <title>My Contact Page</title>
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
        </div> <br> <br>
        
   

    <div class="page-center" style="height: 100%;">
        <div class="contact-card">
          <h2>Contact Information</h2>
          <p>Razan Ayoub</p>
          <p>Email: razan.ayoub398@gmail.com</p>
          <p>Phone: +961 81 808 347</p>
          <p>Beirut, Lebanon</p>
        </div>
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