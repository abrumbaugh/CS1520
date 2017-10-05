function validateForm() {
  var fname = document.forms["form"]["firstname"].value;
  if(fname == null || fname == "") {
    alert("First name cannot be left blank.");
    return false;
  }

  var lname = document.forms["form"]["lastname"].value;
  if(lname == null || lname == "") {
    alert("Last name cannot be left blank.");
    return false;
  }

   var email = document.forms["form"]["user_email"].value;
   if(email == null || email == "") {
     alert("Email cannot be left blank.");
     return false;
   }

   var birthdate = document.forms["form"]["birthday"].value;
   if(birthdate == null || birthdate == "") {
     alert("Birthday cannot be left blank.");
     return false;
   }

   var city = document.forms["form"]["city"].value;
   if(city == null || city == "") {
     alert("City cannot be left blank.");
     return false;
   }

   var state = document.forms["form"]["state"].value;
   if(state == null || state == "") {
     alert("State cannot be left blank.");
     return false;
   }

   var sport = document.forms["form"]["sport"].value;
   if(sport == null || sport == "") {
     alert("Favorite sport cannot be left blank!");
     return false;
   }

   var show = document.forms["form"]["show"].value;
   if(show == null || show == "") {
     alert("Favorite show cannot be left blank.");
     return false;
   }

   var color = document.forms["form"]["color"].value;
   if(color == null || color == "") {
     alert("Favorite color cannot be left blank!");
     return false;
   }

   var movie = document.forms["form"]["movie"].value;
   if(movie == null || movie == "") {
     alert("Favorite movie cannot be left blank!");
     return false;
   }

   else {
     alert("Form submitted!");
     return false;
   }
}
