window.addEventListener("load", function () {
  username = document.getElementById("usrname");
  profname =  document.getElementById("profname");
  emailval =  document.getElementById("emali_name");
 
  if(localStorage.getItem("loggedin")!="")
  {
  logged = JSON.parse(localStorage.getItem("loggedin"));
  console.log(logged);
 
if(username || profname)
{
  username.innerHTML = logged.username; //for the nav bar
  prof_name.innerHTML = logged.username; //for the name in the profile page
  emailval.innerHTML = logged.email
}
  }
});



document.getElementById("log").addEventListener("click", function () {

  var email = document.getElementById("email");
  var pass = document.getElementById("pass");

  console.log(email);

  // Iterates and matches login credentials with the stored values
  var valid = []
  for (i = 1; i <8; i++) 
        {
        valid[i] = JSON.parse(localStorage.getItem(i));//array of objects
        }


  for (i = 1; i <valid.length; i++) 
  {
    if((valid[i].email == email.value  || email.value==valid[i].username) && valid[i].pass== pass.value)
    {
      console.log("valid email info")
      localStorage.setItem("loggedin",JSON.stringify(valid[i]))
      console.log("last-loggedin:" + email.value)

      if(document.URL.includes("logadmin.html"))
      {
         location.href="admin-profile.html";
         break;
       }
     else
      {   
        location.href="profile.html"
        break;
      }
    }
  }
});


function subs()
{
  alert("You have successfully subscribed to our newsletter")
}
function logout()
{
localStorage.setItem("loggedin","")
location.href="indext.html"
}