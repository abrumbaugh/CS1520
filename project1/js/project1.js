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

   var email = document.forms["form"]["email"].value;
   if(email == null || email == "") {
     alert("Email cannot be left blank.");
     return false;
   }

   var phone = document.forms["form"]["phone"].value;
   if(phone == null || phone == "") {
     alert("Phone number cannot be left blank.");
     return false;
   }
}
