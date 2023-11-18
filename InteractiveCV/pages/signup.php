
<html>
<head>
<h1>New user. Register here</h1>
<link rel="stylesheet" href="../styles/formsStyles.css">

</head>
<body>
    <div class='forms-center'>
    <form name="signup-form" action="../BE/register.class.php" method="post" enctype="multipart/form-data" autocomplete="off" class='signup-form'>
        <label for="fn">First name:</label><br>
        <input type="text" id="fn" name="fn" value=""><br>
        <label for="ln">Last name:</label><br>
        <input type="text" id="ln" name="ln" value=""><br><br>
        <input type="radio" name="sex" checked id="r-male">
                <label for="r-male">Male</label>
                <input type="radio" name="sex" id="r-female">
                <label for="r-female">Female</label>
                <br><br>
                <label for="dob"> Date of Birth</label><br>
        <input type="Date" id="dob" name="dob" value=""><br><br>
                <br>
        <label for="username">Email</label><br>
        <input type="email" id="username" name="username" value=""><br><br>
        <label for="pass">Password</label><br>
        <input type="password" id="pass" name="pass" value=""><br><br>
        <label for="cpass"> Confirm Password</label><br>
        <input type="password" id="cpass" name="cpass" value=""><br><br>
        
        <input type="checkbox" name="cbcaptcha" id="cbcaptcha">
        <label for="cbcaptcha">I am human</label>
        <br>
        <button type="submit" name="submit" onclick="signUp()">Register</button>
        <input type="button" value="Cancel" onclick="clearForm()">

<p class="error"><?php echo @$user->error ?></p>
      </form>
</div>
</body>

</html>

<script>
function signUp(){
  console.log("Hello");
  var mForm=document.querySelector("form[name='signup-form']");
        var fn=mForm.elements["fn"].value;
        var ln=mForm.elements["fn"].value;
        var dob=mForm.elements["dob"].value;
        var sex =""
        var email=mForm.elements["email"].value;
        var pass=mForm.elements["pass"].value;
        var confPass=mForm.elements["confpass"].value;
        var radios = mForm.elements["sex"];
        for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            sex = radios[i].value; // Get the checked radio button value (Male/Female)
            break;
        }
    }
        if (pass != confPass) {
        mForm.elements["pass"].value = ""; // Reset password field
        mForm.elements["confpass"].value = ""; // Reset confirm password field
        alert("Make sure your password is confirmed");
    } else {
        mForm.submit(); // Submit the form only if passwords match
    }

} 
function clearForm(){
        // document.getElementById("un").value="";
        // document.getElementById("pass").value="";
        window.open("../index.php");
    }


</script>