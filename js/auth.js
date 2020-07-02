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