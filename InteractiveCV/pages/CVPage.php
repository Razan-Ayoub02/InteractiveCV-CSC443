<?php 
    echo "I am in main 1"; 
	session_start();
    echo "I am in main 2"; 
	
    if (!isset($_SESSION["fn"])){
        header("location:../index.php");
    }
    ?>

<html>
    <head>
        <title>Razan's CV</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="stylesheet" href="../styles/CVStyles.css">
   <link rel="stylesheet" href="../styles/GalleryStyles.css">
   <link rel="stylesheet" href="../styles/menuStyles.css">
   <!-- <link rel="stylesheet" href="./styles/footer.css"> -->
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
            <div class="user-welcome"> <h3> Welcome <?php echo $_SESSION["fn"]; ?>!</h3></div>
            <a href="../index.php" class="logout-btn">Logout</a>

        </div> <br>
        
<div class="mainInfo">
    <h1 id="my-name">Razan Ayoub</h1>
    <div class="right50">
    <img src="../images/pPhoto.jpeg" alt="Razan's Image" class="img-style"/>
</div>
<div class="left50"> 
    <h1 style="color: rgb(241, 251, 251, 0.7);">HELLO!</h1>
    <p class="center-text">I'm a senior Computer Science student with a minor in Business Data Analytics at the Lebanese American University with strong academic achievements and volunteering experiences in many NGOs. Possess strong leadership and communication skills that enforce my passion for networking and my consistent pursuit of knowledge. Always looking to develop my skills in programming and software development through lifelong learning and working in a dynamic professional atmosphere.</p>
    
</div>
<br> 

     
</div> 
    <div class="left50">
        <h2>Education</h2>
        <h4 style="margin-bottom: 0%;">Lebanese American University, <b>Expected Graduation May 2024</b></h4>
        <h5 style="margin-top: 0%;"><li>BS in Computer Science</li></h5>
        <h4 style="margin-bottom: 0%;">Bissan Secondary School, <b>August 2021</b></h4>
        <h5 style="margin-top: 0%;"><li>Life Sciences Branch</li></h5>
    </div>
    <div class="right50">
        <h2>Certifications</h2>
        <h4>Angular Course, Udemy, <b>In Progress</b></h4>
        <h4>Artificial Intelligence Bootcamp, Zaka ai,  <b>March 2023</b></h4>
        <h4>Security Training, IS^2, <b>May 2022</b></h4>


    </div>
   
   
    <h2>Experience</h2>
    <ul>
        <li>Tutor at Geek Express, <b>Present</b> </li>
        <li>Software Engineering Intern at CME, <b>July-August 2023</b></li>
        <li>Programming Tutor at USAID LAU, <b>Present</b></li>
        <li>Student Mentor at USAID LAU, <b>Present</b> </li>

    </ul>
    <h2>Technical Skills</h2>
    <div class="left50" style="margin-bottom:10px">

        <div class="left50">
         <h4>Java</h4>
         <h4>Python</h4>
         <h4>C</h4>
         <h4>HTML, CSS</h4>
        </div>
        <div class="right50">
            <h4>Database Schema Design</h4>
            <h4>SQL Queries</h4>
            <h4>Oracle Server</h4>
            <h4>PostgreSQL Server</h4>
        </div>

    </div>
    <div class="right50">
        <div class="left50">
            <h4>Spring Boot</h4>
            <h4>ReactJS</h4>
            <h4>Flutter</h4>
            <h4>Angular</h4>
        </div>
        <div class="right50" s>
            <h4>Excel for Data Entry, Dashboards for building insights</h4>
            <h4>Story Telling using Tableau</h4>
            <h4>SPSS</h4>
            <h4>Design using Figma</h4>
        </div>
    </div>
  
  
    <h2>Languages</h2>
    <ul style="padding:0px">
        <li>English, Bilingual</li>
        <li>Arabic, Native</li>
        <li>French, Elementary</li>
        <li>Spanish, Elementary</li>
    </ul>
   
       <center><div class="circle1" style="margin-top:20px;" >
       <div > <h2 style="padding-top:20px">Interests and Hobbies</h2>
            <ul>
                <li class="no-style">Reading</li>
                <li class="no-style">Writing distopian fiction novels/novellas</li>
                <li class="no-style">Hiking</li>
            </ul></div> 
       
    </div></center> 
   
             <center><div class="circle2" >
  <div>
    <h2 style="padding-top:20px">Extra Curricular Acitivities</h2>
    <br> 
    <ul>
        <li class="no-style">LAU DDD Club, Vice President, <b>Present</b></li>
        <li class="no-style">LAU Palestinian Cultural Club, <b>Present</b></li>
        <li class="no-style">USAID Community Service Project, planning to provide aid for refugee students, <b>Present</b> </li>
        <li class="no-style">Universal Peace Federation, participant in the “Peace Spreading” initiative,   <b>Present</b>     </li>
        <li class="no-style">LAU Page Turner Club, Vice President, <b>Spring 2023</b></li>
</ul>

  </div>
             </div></center> 
   

   
  
   
  
  
   
<footer class="cv-footer">
    
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