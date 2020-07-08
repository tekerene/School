var firebaseConfig = {
    apiKey: "AIzaSyDi7GpvzEDSU1cUHYQzId9paJ4Egda4RZQ",
    authDomain: "sevicti-fba28.firebaseapp.com",
    databaseURL: "https://sevicti-fba28.firebaseio.com",
    projectId: "sevicti-fba28",
    storageBucket: "sevicti-fba28.appspot.com",
    messagingSenderId: "483945013504",
    appId: "1:483945013504:web:ee3974f3ec5be8796c13e5",
    measurementId: "G-5ZHXEL8H1B"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  firebase.auth.Auth.Persistence.LOCAL;

  $("#login-user").click(function()
  {
      var email = $("#email").val();
      var password = $("#password").val();
      if(email != "" && password != ""){
        var result = firebase.auth().signInWithEmailAndPassword(email, password);

        result.catch(function(error) {
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorCode);
            console.log(errorMessage);
            window.alert('Message : ' + errorMessage);
        });
      } else {
          window.alert('Please fill out the required fields')
      }
  });
  
  // BACKEND CODE TO SIGNUP NEW USER to have admin access
  $("#signup").click(function()
  {
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var cPassword = $("#confirmPassword").val();

    if(username != "" && email != "" && password != "" && cPassword != "") {
        
      if(password == cPassword){
        var result = firebase.auth().createUserWithEmailAndPassword(email, password);

        result.catch(function(error){
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorCode);
            console.log(errorMessage);
            window.alert("message :" + errorMessage);
        });
      
    } else {
        window.alert("Passwords do not match");
      }
    } 
    else{
      window.alert("form is incomplete, Please fill out all the fields");
  
    }
  });



//  BACKEND CODE TO RESET PASSWORD
  $("#btn-resetPassword").click(function(){
    var auth = firebase.auth();
    var email = $('#email').val();

    if(email != "") 
    {
      auth.sendPasswordResetEmail(email).then(function()
      {
        window.alert("Email has been sent to your email, Please check and verify ");
      })
      .catch(function(error){
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorCode);
        console.log(errorMessage);
        window.alert('Message '+ errorMessage);
      })
    } else {
      window.alert("Please write your email first. ");
    }
});


// TO LOGOUT USER
  $("#btn-logout").click(function(){
      firebase.auth().signOut();
  });

   // TO UPDATE AND SET USER Account
   $("#btn-update").click(function(){
    var phone = $("#phone").val();
    var address = $("#address").val();
    var bio = $("#bio").val();
    var fName = $("#firstName").val();
    var sName = $("#secondName").val();
    var country = $("#country").val();
    var gender = $("#gender").val();
  var rootRef = firebase.database().ref().child("users");
  var userID = firebase.auth().currentUser.uid;
  var usersRef = rootRef.child(userID);
 
     if(fName !="" && sName !="" && phone != "" && bio !="" && address !="" && country != "" && gender !="")
     {
       var userData = 
       {
         "phone": phone,
         "address": address,
         "secondName": sName,
         "FirstName": fName,
         "gendere": gender,
         "bio": bio,
         "country": country,
       };
       usersRef.set(userData, function(error)
       {
           if(error) {
         var errorCode = error.code;
         var errorMessage = error.message;
 
         console.log(errorCode);
         console.log(errorMessage);
 
         window.alert('Message '+ errorMessage);
           } else {
             window.location.href = "";
           }
       })
     } else {
       window.alert("Form is incomplete, Please fill in all the fields")
     }
 });