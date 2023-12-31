
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="css/facturas.css" />
    <link rel="stylesheet" href="css/facturas2.css" />
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
       <img class="image-7-icon" alt="" src="./image 7.png" />

       <div class="frame-item" id="rectangle6"></div>
       <div
        class="frame-inner"
        data-scroll-to="rectangle4"
        id="rectangle4"
      ></div>
      <div
        class="rectangle-div"
        data-scroll-to="rectangle3"
        id="rectangle3"
       ></div>
       <div
        class="frame-child1"
        data-scroll-to="rectangle2"
        id="rectangle2"
       ></div>
       <div
        class="frame-child2"
        data-scroll-to="rectangle1"
        id="rectangle1"
       ></div>
       <div class="frame-child3" data-scroll-to="rectangle" id="rectangle"></div>
       <div class="identidad-de-factura"><label for" iname">identidad de factura:</label>
        <input id="iname" tipe="text"name="name></div>
      
       <div class="identidad-de-cliente"><label for" iname">identidad de cliente :</label>
        <input id="iname" tipe="text"name="name></div>
      
       <div class="fecha"> <label for" iname">fecha</label><input id="iname" tipe ="text"name="name></div>
      
       <div class="hora"><label for" iname">hora</label><input id="iname" tipe="text"name="name></div>
       <div class=" producto"><label for" iname"> producto</label><input id ="iname" tipe="text"name="name></div>
       <div class=" total-de-compras"></div>
        <img 
        class="rectangle-icon"
        alt=""
        src="./Rectangle 28.png"
        data-scroll-to="rectangleImage"
        id="rectangleImage"
      />

      <div class="factura">FACTURA</div>
     </div>

     <script>
      var rectangle6 = document.getElementById("rectangle6");
      if (rectangle6) {
        rectangle6.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle4']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangle4 = document.getElementById("rectangle4");
      if (rectangle4) {
        rectangle4.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle3']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangle3 = document.getElementById("rectangle3");
      if (rectangle3) {
        rectangle3.addEventListener("click", function () {
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
      
      var rectangle1 = document.getElementById("rectangle1");
      if (rectangle1) {
        rectangle1.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangle']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangle = document.getElementById("rectangle");
      if (rectangle) {
        rectangle.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='rectangleImage']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var rectangleImage = document.getElementById("rectangleImage");
      if (rectangleImage) {
        rectangleImage.addEventListener("click", function (e) {
          // Please sync "Frame 5" to the project
        });
      }
      </script>
  </body>
</html>
  