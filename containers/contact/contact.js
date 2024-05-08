const form = document.getElementById('contactForm');
const alert = document.querySelector('.alert');

const firebaseConfig = {
  apiKey: "AIzaSyAPSNGFYh6A4zz27B3vUu4H2pqBXtGLq2Q",
  authDomain: "formulariomedac.firebaseapp.com",
  databaseURL: "https://formulariomedac-default-rtdb.firebaseio.com",
  projectId: "formulariomedac",
  storageBucket: "formulariomedac.appspot.com",
  messagingSenderId: "538716580446",
  appId: "1:538716580446:web:39dfaee90e617c39d6a2cf",
  measurementId: "G-85R9FCV943"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);


const database = firebase.database()

const ref = database.ref('messages')

form.addEventListener('submit',(e)=>{

  e.preventDefault();

  const nombre = document.getElementById('nombre').value;
  const telefono = document.getElementById('telefono').value;
  const email = document.getElementById('email').value;
  const cp = document.getElementById('cp').value;
  const pregunta = document.getElementById('pregunta').value;
  const check1 = document.getElementById('check1').checked;
  const check2 = document.getElementById('check2').checked;


ref.push({
  nombre:nombre,
  telefono:telefono,
  email:email,
  cp:cp,
  pregunta:pregunta,
  check1:check1,
  check2:check2,
})

  alert.style.display='block'
  setTimeout(()=>{
    alert.style.display="none"
  },5000)
  form.reset()
})



