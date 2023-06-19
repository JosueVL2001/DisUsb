<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dispositivos Conectados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style >
  body {font-family: Arial, Helvetica, sans-serif;}

  /* Full-width input fields */
  input[type=text], input[type=password ] , input[type=email ] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 24px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 90%;

  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 240px;
    height:240px;

    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
  .my-button {
    text-align: left;
    background-color: #03DAC5;
    color: #010100;
    border-radius: 10px; /* Establece el radio de las esquinas */
    padding: 10px 20px; /* Ajusta el padding según tus necesidades */
  }

  .contenedorIcono{
    position: absolute;
     top: 5%;
     left: 80%;
  }
  .dropbtn {
  background-color: transparent;
  color: #000000;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;

  top: 5%;
  left: 85%;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

  </style>
</head>
<body>
  <img onclick="redireccionar()" src="Imagenes/Atras.png" alt="Icono" height="40px" weight="60px" style="position: relative; top: 50px; left: 100px; transform: translate(-50%, -50%);">

  <h1 style="text-align: center;">Dispositivos</h1>
  <h2 style="text-align: center;">Se muestran los dispositivos vinculados a tu cuenta</h2>
  <div class="dropdown">
  <img class="dropbtn" src="Imagenes/Configuracion.png" alt="Icono" class="icono" width="80" height="80" >
  <div class="dropdown-content">

    <a href="#" onclick="document.getElementById('id01').style.display='block'">Perfil</a>
    <a href="#" onclick="document.getElementById('id02').style.display='block'">Sobre Nosotros</a>
    <a href="#" onclick="myFunction()">Cerrar Sesion</a>
  </div>
  </div>



<div class="container mt-3">
  <div class="d-grid gap-3">
    <button onclick="redireccionarDispositivo()" type="button" class="my-button">Lampara 1</button>
    <button onclick="alert('no se pudo conectar al dispositivo')" type="button" class="my-button">Lampara 2</button>
    <button onclick="alert('no se pudo conectar al dispositivo')" type="button" class="my-button">Lampara 3</button>
  </div>
</div>


<div id="id01" class="modal">

  <form class="modal-content animate" action="http://localhost/Ricardo/Dispositivos.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Imagenes/Valo.jfif" alt="Avatar" class="avatar" >
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="dir"><b>Direccion</b></label>
      <input type="text" placeholder="Enter Direccion" name="psw" required>

      <label for="correo"><b>E-mail</b></label>
      <input type="email" placeholder="Enter email" name="psw" required>

      <button type="submit" onclick="alert('Informacion guardada con exito')">Guardar</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  </div>


  <div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="Imagenes/informacion.png" alt="Avatar" class="avatar" >
      </div>

      <div class="container">
        <p>Somos una empresa lider en el desarrollo de lamparas inteligentes personalizadas
        Contamos con un equipo altamente capacitado de ingenieros de software, diseñadores
        de interfaces y consultores tecnológicos. Nuestro personal está comprometido en proporcionar
        soluciones de calidad y un servicio excepcional a nuestros clientes.
      </p>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">OK</button>
      </div>
    </form>
    </div>




  </body>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function myFunction() {
  let text = "Estas seguro de cerrar sesion?";
  if (confirm(text) == true) {
    window.location.href = "http://localhost/Ricardo/Presentacion.php";
  }
}
function redireccionar() {

  let text = "Estas seguro de cerrar sesion?";
  if (confirm(text) == true) {
      window.location.href = "http://localhost/Ricardo/Presentacion.php"; // Reemplaza con la URL de la página a la que deseas redireccionar
  }

}
function redireccionarDispositivo() {
      window.location.href = "http://localhost/Ricardo/Aplicacion.php"; // Reemplaza con la URL de la página a la que deseas redireccionar
}


</script>

</html>
