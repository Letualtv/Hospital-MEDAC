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

import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";

const auth = getAuth(firebaseApp);

createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    // Signed up 
    const user = userCredential.user;
    // ...
  })
  .catch((err) => {
    console.log(err.code);
    console.log(err.message);
  });


// // Initialize Firebase


// const app = initializeApp(firebaseConfig);
// const auth = getAuth(app);

// registro.addEventListener("click", (e) => {
//   var email = document.getElementById("emailreg").value;
//   var password = document.getElementById("passwordreg").value;

//   createUserWithEmailAndPassword(auth, email, password)
//     .then((cred) => {
//       alert("Usuario creado");
//       auth.singOut();
//       sendEmailVerification(auth.currentUser).then(() => {
//         alert("Verifique su email");
//       });
//     })
//     .catch((error) => {
//       const errorCode = error.Code;

//       if (errorCode == "auth/email-already-in-use")
//         alert("El correo ya está en uso");
//       if (errorCode == "auth/invalid-email") alert("El correo no es válido");
//       if (errorCode == "auth/weak-password")
//         alert("La contraseña debe tener al menos 6 caracteres");
//     });
// });
