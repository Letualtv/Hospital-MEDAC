

const firebaseConfig = {
  apiKey: "AIzaSyAPSNGFYh6A4zz27B3vUu4H2pqBXtGLq2Q",
  authDomain: "formulariomedac.firebaseapp.com",
  databaseURL: "https://formulariomedac-default-rtdb.firebaseio.com",
  projectId: "formulariomedac",
  storageBucket: "formulariomedac.appspot.com",
  messagingSenderId: "538716580446",
  appId: "1:538716580446:web:39dfaee90e617c39d6a2cf",
  measurementId: "G-85R9FCV943",
};

import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
firebase.initializeApp(firebaseConfig);

import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";

const auth = getAuth();
signInWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed in 
    const user = userCredential.user;
    // ...
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
  });



// // Initialize Firebase
// const app = initializeApp(firebaseConfig);
// const auth = getAuth(app);

// login.addEventListener("click", (e) => {
//   var email = document.getElementById("emaillog").value;
//   var password = document.getElementById("passwordlog").value;

//   signInWithEmailAndPassword(auth, email, password)
//     .then((cred) => {
//       alert("Usuario logeado");
//       console.log(cred.user);
//     })
//     .catch((error) => {
//       const errorCode = error.Code;

//       if (errorCode == "auth/invalid-email") alert("El correo no es válido");
//       if (errorCode == "auth/user-not-found") alert("El usuario no existe");
//       if (errorCode == "auth/wrong-password") alert("Contraseña incorrecta");
//     });
// });

// cerrar.addEventListener("click", (e) => {
//   auth
//     .signOut()
//     .then(() => {
//       alert("Sesión cerrada");
//     })
//     .catch((error) => {
//       alert("Error al cerrar sesión");
//     });
// });

// auth.onAuthStateChanged((user) => {
//   if (user) {
//     console.log("Usuario logeado");
//     var email = user.emailVerified;
//     if (emailVerified) {
//       window.open("https://www.google.com");
//     } else {
//       auth.signOut();
//     }
//   } else {
//     console.log("Usuario inactivo");
//   }
// });
