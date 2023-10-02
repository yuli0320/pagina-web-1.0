<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="css/Nubes.css" />
    <link rel="stylesheet" href="css/contra.css"/>
    
  </head>
  <body>
    <div class="rectangle-parent">
      <div class="frame-child"></div>
      <div class="cambiar-contrasea">CAMBIAR CONTRASEÑA</div>
      <img class="image-5-icon" alt="" src="imgs/5.png" />

      
      <div class="frame-item"><input type="password"name="password"id="password"placeholder=" nueva contraseña"></div>
      <div class="frame-inner"><input type="password"name="password"id="password"placeholder=" confirmar contraseña"></div>
      <div class="rectangle-div" id="rectangle3"><input type="submit"value="modificar" placeholder=" modificar"></div>
      
    </div>

    <script>
      var rectangle3 = document.getElementById("rectangle3");
      if (rectangle3) {
        rectangle3.addEventListener("click", function (e) {
          window.location.href = "./Frame2.html";
        });
      }
      </script>
  </body>
</html>
