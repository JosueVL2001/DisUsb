<!DOCTYPE html>
<html>
<head>
  <title>Selector de color</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/colorPicker.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<h1 style="text-align: center; position: relative; top: 40px">Aqui puedes configurar el color de la lampara</h1>


  <img onclick="redireccionar()" src="Imagenes/Atras.png" alt="Icono" height="40px" weight="60px" style="position: relative; top: 10px; left: 100px; transform: translate(-50%, -50%);">


<div class="my-button" > lamparas

  <label class="switch">
    <input type="checkbox" id="miSwitch" checked>
    <span class="slider round"></span>
  </label>
</div>



  <div class="color-picker">

    <div id="color-picker">
      <div id="color-indicator" class="color-indicator">  </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
</body>
<script>
  let colorIndicador = document.getElementById("color-indicator");
  const colorPicker = new iro.ColorPicker("#color-picker",{
    with:180, color: "#fff"
  });
  colorPicker.on('color:change', function(color){
    colorIndicador.style.backgroundColor = color.hexString;
  });


  function redireccionar() {
    window.location.href = "http://localhost/Ricardo/Dispositivos.php"; // Reemplaza con la URL de la página a la que deseas redireccionar
  }

  const switchElement = document.getElementById('miSwitch');

    switchElement.addEventListener('change', function() {
      if (this.checked) {
        alert('Se encendio la lampara');
      } else {
        alert('Se desactivo la lampara');
      }
    });
</script>
</html>
