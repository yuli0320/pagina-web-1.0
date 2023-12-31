<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="css/metotodopago1.css" />
    <link rel="stylesheet" href="css/metodopago2.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Open Sans:ital,wght@0,400;1,400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,400&display=swap"
    />
  </head>
  <body>
    <div class="rectangle-parent">
      <div class="frame-child"></div>
      <div class="frame-item"></div>
      <img class="image-9-icon" alt="" src="imgs/8.png" />

      <div class="frame-inner"></div>
      <div class="monto-de-pago"><input type="text" name="monto de pago" id="monto de pago" placeholder="monto de pago"></div>
        
      <div class="numero-de-la"><input type="text" name="numero de la targeta" id="nuemer de targeta" placeholder="numer de la targeta "></div>
      <div class="titular-de-la"><input type="text" name="titular de la targeta" id="titular de la targeta" placeholder="titular de la targeta"></div>                                                                                                                                                                                                                       
      <div class="tipo-de-cliente"><input type="text" name="tipo de cliente" id="tipo de cliente" placeholder="tipo de clinte"></div>
      <div class="tus-datos-de">Tus datos de pago</div>
      <div class="rectangle-div" id="rectangle6"></div>
      <div
        class="frame-child1"
        data-scroll-to="rectangle2"
        id="rectangle2"
      ></div>
      <div class="frame-child2" data-scroll-to="rectangle" id="rectangle"></div>
      <img class="rectangle-icon" alt="" />

      <div class="frame-child3"><input type="submit" value="pago ahora">                                          </div>
      <div class="pagar-ahora"></div>
      <div
        class="frame-child4"
        data-scroll-to="rectangle1"
        id="rectangle1"
      ></div>
    </div>

    <script>
      var rectangle6 = document.getElementById("rectangle6");
      if (rectangle6) {
        rectangle6.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle2']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangle2 = document.getElementById("rectangle2");
      if (rectangle2) {
        rectangle2.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle1']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangle = document.getElementById("rectangle");
      if (rectangle) {
        rectangle.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='pagarAhoraText']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangle1 = document.getElementById("rectangle1");
      if (rectangle1) {
        rectangle1.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      </script>
  </body>
</html>
