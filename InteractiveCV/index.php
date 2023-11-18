<html>
<head>
<h1>Login</h1>
<link rel="stylesheet" href="styles/formsStyles.css">

</head>
<body>
    <div class='forms-center'>
    <form action='BE/login.php' method="POST" id='login-form' enctype="multipart/form-data" autocomplete="off">
        <label for="username">Email</label><br>
        <input type="username" id="username" name="username" value=""><br><br>
        <label for="pass">Password</label><br>
        <input type="password" id="pass" name="pass" value=""><br><br>
        <button type="submit" value="submit" onclick="login()">Submit</button>
        <input type="button" value="Cancel" onclick="clearForm()">
<br> <br>
        <p class="error"><?php echo @$user->error ?></p>
      </form>
            <div class='signup-here'>
    <h4 >New account? <a href="./pages/signup.php">Sign up here.</a></h4>
  
</div>
</div>
</body>

</html>

<script>
    function login(){
        var username=document.getElementById("username").value;
        var pass=document.getElementById("pass").value;
        if ((username=="")||(pass=="")){
            console.log("in the condition")
          alert("Please enter all fields.")            
        }else{
            console.log(username);
            console.log(pass);
            
            document.getElementById("login-form").submit();
        }

   }
    function clearForm(){
        document.getElementById("username").value="";
        document.getElementById("pass").value="";
    }



</script>