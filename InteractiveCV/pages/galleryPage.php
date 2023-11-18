<?php 
    echo "I am in main 1"; 
	session_start();
    echo "I am in main 2"; 
	
    if (!isset($_SESSION["fn"])){
        header("location:../index.php");
    }
 ?>   
   
   
   <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
      <link rel="stylesheet" href="../styles/CVStyles.css">
      <link rel="stylesheet" href="../styles/GalleryStyles.css">
      <link rel="stylesheet" href="../styles/menuStyles.css">
      <link rel="stylesheet" href="../styles/footer.css"> 
    <title>Image Gallery</title>
</head>
<body id="gallery-body">
<div class="row" id="header">
        <div id="dropdown-menu">
            <span><i class="ico burger-ico"></i>MENU</span>
            <div class="dropdown-content">
                <ul>
                  <a href="./mainPage.php">
                    <li><i ></i>Home Page</li>
                </a>
                <a href="./galleryPage.php">
                    <li><i ></i>Gallery</li>
                </a>
                <a href="./CVPage.php">
                    <li><i ></i>CV</li>
                </a>
                <a href="./contactPage.php">
                    <li><i ></i>Contact Page</li>
                </a>
                </ul>
            </div>
        </div>
        <div class="user-welcome"> <h3> Welcome <?php echo $_SESSION["fn"]; ?>!</h3></div>
        <a href="../index.php" class="logout-btn">Logout</a>

    </div> <br>
    <br>
  <div class='gallery-container'>
    <?php
    $jsonData = file_get_contents('../data/images.json');
    $images = json_decode($jsonData, true);

    if ($images && isset($images['images'])) {
        foreach ($images['images'] as $image) {
            $imageUrl = $image['url'];
            echo "<div class='container'> <img class='box' src='$imageUrl' alt='Image' width='300' height='200'></div><br>";
        }
    } else {
        echo "No images found.";
    }
    ?>
</div>
    <footer class='gallery-footer'>
    
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








