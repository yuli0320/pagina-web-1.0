<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="css/cambis.css" />
    <link rel="stylesheet" href="css/emailcam.css" />
    
      
  </head>
  <body>
    <div class="rectangle-parent">
      <div class="frame-child"><</div>
      <div class="recuperar-contrasea">RECUPERAR CONTRASEÑA</div>
      <img class="image-3-icon " alt="" src="imgs/4.png" />

      <div class="frame-item" id="rectangle1"><input type="text" name="email" placeholder=" email"></div>
      
      <img class="image-4-icon" alt="" src="imgs/3.png" />

      <div class="frame-inner" id="rectangle2"><input type="submit" value="emviar " placeholder="enviar"></div>
      
      
    </div>

    <script>
      var rectangle1 = document.getElementById("rectangle1");
      if (rectangle1) {
        rectangle1.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='enviarText']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangle2 = document.getElementById("rectangle2");
      if (rectangle2) {
        rectangle2.addEventListener("click", function (e) {
          // Please sync "Frame 4" to the project
        });
      }
      </script>
  </body>
</html>
