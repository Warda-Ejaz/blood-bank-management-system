<?php
include "db.php";

// Get request type
$action = $_POST['action'];

if($action == "signup"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert into database
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    if($conn->query($sql)){
        echo "Signup Success";
    } else {
        echo "Error: " . $conn->error;
    }
}

if($action == "login"){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "Login Success";
    } else {
        echo "Invalid Credentials";
    }
}

?>

function login(){

let email = document.getElementById("email").value.trim();
let password = document.getElementById("password").value.trim();
let msg = document.getElementById("msg");

msg.innerText = "";

// validation
if(email === "" || password === ""){
  msg.innerText = "❌ Please fill all fields";
  return;
}

//  FETCH START
fetch("backend/auth.php", {
  method: "POST",
  headers: {
    "Content-Type": "application/x-www-form-urlencoded"
  },
  body: `action=login&email=${email}&password=${password}`
})
.then(res => res.text())
.then(data => {

  console.log(data); // backend response

  if(data.includes("Success")){
    
    //  (localStorage)
    localStorage.setItem("currentUser", JSON.stringify({ email }));

    window.location.href = "home.html";

  } else {
    msg.innerText = "❌ Invalid credentials";
  }

});
}
