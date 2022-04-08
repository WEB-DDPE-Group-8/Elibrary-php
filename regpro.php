<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>registration form</title>

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="shortcut icon" href="./multimedia/resources/logo/logo.png"/>
        <script src= "./js/toggle.js" defer><script>

    </head>
    <body background="./multimedia/resources/banner-bg.jpg" >
        <P align="center">
           <B>LIBRARY MANAGMENT SYSTEM<br>REGISTRATION FORM FOR USER</B>
        </P>
        <form id="form_action">
            <table align="center" bgcolor="transparent" height="450" width="450">
                 <!-- beg of form -->
                 <tr>
                    <td>FIRST Name</td>
                    <td>:</td>
                    <td><input id=fname type="text" pattern="\w{2,15}" placeholder="First name" size="40" required></td>
                
                </tr>
                <tr>
                    <td >LAST Name</td>
                    <td>:</td>
                    <td><input id=lname type="text" pattern="\w{2,15}" placeholder="Last name" size="40" required></td>
                
                </tr>
                
                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input id=email pattern=[^@]+[@]+[^@]+\.[^@]+ type="email" placeholder="name@domain.com" size="40" required></td>
                </tr>
                <tr>
				    <td >Phone Number</td>
					<td>:</td>
                    <td>
					   <input id=mob type="tel" placeholder="(###)###-####" size="40"
					   pattern="\(\d{3}\)+\d{3}-\d{4}" />
					</td>	
			  </tr> 
              <tr>
                <td >User Name </td>
                <td>:</td>
                <td><input id=usrname type="text" pattern="\w{2,15}" placeholder="Username" size="40" required></td>
            </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input id=pass type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" title=" Minimum eight characters, at least one letter and one number"placeholder="Password" size="40" required></td>
                </tr>
                <tr>
                    <td >Confirm Password</td>
                    <td>:</td>
                    <td><input id=pass2 type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" title=" Minimum eight characters, at least one letter and one number" placeholder="Confirm Password" size="40" required>
                        </td>
                </tr>
                <tr>
                   
                    <td align="center">
                   
                           <input id= "sub" onclick="test()" type="submit" value="Submit">
                       
                    </td>
                    <td>
                           <input type="reset"   value="Clear">
                         </form>
                    </td>
                </tr>
                <!-- end of form -->
            </table>
             <P align="center">
                <B>Already a member<br><a href="loguser.php">Log in</a></B>
             </P>
       
        <table align="center">
            <tr>
                <td>
                    
                  <details>
                      <summary>Read our privacy policy</summary>
                      <iframe
                      title="policy"
                      width=800
                      height=400
src="privacypolicyonly.php" referrerpolicy="">
                     </iframe>
                     
                </td>
                
            </tr>
        </table>
        <table align="center">
            <tr>
                <td><a href="#">support@bookmail.org</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php#aboutus">About Us</a>
    
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="privacypolicyonly.php">Privacy Policy</a>
            </td>
            </tr>
        </table>
    
        

<script>            
var fname = document.getElementById("fname")
var lname = document.getElementById("lname")
var email = document.getElementById("email")
var mob = document.getElementById("mob")
var sub = document.getElementById("sub")

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

            
function rest()
{

if(pass.value == pass2.value)
{
    var admin = new user(id=7,fname.value,lname.value,usrname.value,email.value,pass.value)
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
    for(i=1;i<localStorage.length;i++)
    {
    check[i]=JSON.parse(localStorage.getItem(i)) 
    }

    var EmailList = []
    for(i=1;i<7;i++)
    {
        console.log(check[i].email)
        EmailList[i]= check[i].email; 
    }

    if(EmailList.includes(email.value))
    {
        console.log(email.value)
        alert(email.value + " already exists")
    
    }
    else
    {
        rest()
    }
}
        </script>
    </body>
    
</html>