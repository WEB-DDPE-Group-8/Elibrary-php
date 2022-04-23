<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./resources/logo/logo.png"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        
        <script src="./js/toggle.js" defer></script>
        <title>registration form</title>
    </head>
    <body background="./multimedia/resources/banner-bg.jpg" >

    <?php include("inc/nav_bar.php") ?>

 

        <P align="center" style = "margin = 64px;">
           <h2>LIBRARY MANAGMENT SYSTEM<br>REGISTRATION FORM FOR ADMIN</h2>
        </P> 
        
        <form id=form_action action="regadmin.php" method="POST">
        
        <?php include("lib/db.php") ?>
            <table align="center" bgcolor="transparent" height="450" width="450">

                    <!-- beg of form -->
                <tr>
                    <td>FIRST <br> Name<span class=ast> *</span></td>
                    <td>:</td>
                    <td>
<input id=fname pattern="\w{2,15}" type="text" placeholder="First name" size="40" name="firstname"  ></td>
                
                </tr>
                <tr>
                    <td >LAST <br>Name<span class=ast> *</span></td>
                    <td>:</td>
                    <td>
<input id=lname pattern="\w{2,15}" name="lastname" type="text" placeholder="Last name" size="40"  ></td>
                
                </tr>
                
                <tr>
                    <td>Email <span class=ast> *</span> </td>
                    <td>:</td>
                    <td>
<input  pattern=[^@]+[@]+[^@]+\.[^@]+ id=email name="email" type="email" placeholder="name@domain.com" size="40"  ></td>
                </tr>
                <tr>
				    <td >Phone Number</td>
					<td>:</td>
                    <td>
<input id=mob type="tel" name="phonenumber"   placeholder="(###)-(###)-(####)" size="40" pattern="\(\d{3}\)+\d{3}-?\d{4}"  />
					</td>	
			  </tr> 
              <tr>
                <td >User name <span class=ast> *</span></td>
                <td>:</td>
                <td>
<input id=usrname pattern="\w{2,15}" name="username" type="text" placeholder="Userame" ></td>
            
            </tr>
                <tr>
                    <td >Password  <span class=ast> *</span></td>
                    <td>:</td>
                    <td>
<input id=pass type="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"
                    name="pass"
                     title="Number(s),Capitalized and Small letter(s) also symbols " 
                     placeholder="Password" min-length=4 max-length=14 size="40"   >
                        <i class="far fa-eye" id="togglePassword" style="margin-left: -50px; cursor: pointer;"></i></td>
                </tr>
                <tr>
                    <td >Confirm Password  <span class=ast> *</span></td>
                    <td>:</td>
                    <td>
<input id=pass2 type="password"
                    name="pass2"
                    pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$"  placeholder="Confirm Password" size="40"  >
                        <i class="far fa-eye frr" id="togglePassword2" style="margin-left: -50px; cursor: pointer;"></i></td>
                </tr>
                <tr>
                    <td >Admin<br>Code <span class=ast> *</span></td>
                    <td>:</td>
                    <td>
<input id=code name="admin_code" type="password" placeholder="Admin Code" size="40" pattern="\d{4}" ></td>
                </tr>
                <tr>   
                    <td align="center">
<input id= sub name="req_user" type="submit">
                    </td>
                    <td>
<input type="reset"   value="Clear">
                    </td>
                </tr>
                <!-- end of form -->
            </table>
             <P align="center">
                <B>Already a member<br><a href="login.php">Log in</a></B>
             </P>
        </form>
        
        <table align="center">
            <tr>
                <td>
                    
                    <details>
                        <summary>Our Privacy policy</summary>
                        <iframe id="inlineFrame"
      title="Privacy Policy"
      width="800"
      height="400"
      src="privacypolicyonly.php"></iframe>
  
                    </details>
                  </td>
            </tr>

<!-- registration -->

<!-- <script>
var fname = document.getElementById("fname")
var lname = document.getElementById("lname")
var email = document.getElementById("email")
var mob = document.getElementById("mob")
var sub = document.getElementById("sub")
var code = document.getElementById("code")

var usrname = document.getElementById("usrname")

var pass = document.getElementById("pass")
var pass2 = document.getElementById("pass2")
           

  class user {
    constructor(id, fname = "Annonymus", lname = "", username = "User", email, pass ="1234") {
      this.id = id;
      this.fname = fname;
      this.lname = lname;
      this.username = username;
      this.email = email;
      this.pass = pass;
      
    }
  }
function rest(){

if(pass.value == pass2.value)
{
    var admin = new user(id=6,fname.value,lname.value,usrname.value,email.value,pass.value)
    console.log(admin)
    localStorage.setItem("loggedin", JSON.stringify(admin))
    localStorage.setItem(admin.id, JSON.stringify(admin))
    console.log("last-loggedin:" + usrname.value)
    form_action = document.getElementById("form_action")

    form_action.setAttribute("action", "admin-profile.php")
    console.log(form_action)
}
else
{
    alert("The two passwords you entered do not match")
}

}

function test()
{
    var check = []
    var codes = JSON.parse(localStorage.getItem("Admincodes"))
    
    for(i=1;i<localStorage.length;i++)
    {
    check[i]=JSON.parse(localStorage.getItem(i)) 
    }

    var EmailList = []
    for(i=1;i<5;i++)
    {
        console.log(check[i].email)
        EmailList[i]= check[i].email; 
    }

    if(EmailList.includes(email.value))
    {
        console.log(email.value)
        alert(email.value + " already exists")
    
    }
    else if(codes.includes(code.value))
    {
        alert( "You'll need a correct admin code to Register")
        
    }
    else
    {
        rest()
    }
}

</script> -->

<?php include("./inc/footer.php") ?>

    </body>
    
</html>