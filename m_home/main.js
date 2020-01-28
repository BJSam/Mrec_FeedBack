/*firebase.auth().onAuthStateChanged(function(user) {
  if (user) { 
    window.location="demo.html";
  }
  else{
    $("#loginBtn").click(function (){
    var email=document.getElementById("email").value;
    var pass=document.getElementById("pass").value;
    
            firebase.auth().signInWithEmailAndPassword(email, pass).catch(function(error) {
              // Handle Errors here.
              var errorCode = error.code;
              var errorMessage = error.message;
              window.alert("error :"+errorMessage);
            });
  });
  }
});*/

