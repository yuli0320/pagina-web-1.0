<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/frame1.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,400&display=swap" />
</head>

<body>
    <div class="image-2-parent">
        <img class="image-2-icon" alt="" src="imgs/2.png" />

        <div class="iniciar-sesion">INICIAR SESION</div>
        <div class="frame-child10"> <input type="password" name="password" id="password" placeholder="contraseña"></div>
         <div class="frame-child11"><input type="text" name="usuario" id="usuario" placeholder="usuario"></div>
        
        
        <div class="frame-child13"><input type="submit" value="acceso"></div>
        
        
        
        <div class="frame-child1"><input type="submit"value= "cambiar contraseña"> <li><a href="cambiar.php">cambiar contraseña</a></li>
                   </div>
        

        <div class="no-tiene-una"> <input type="submit"value=" ¿no tienes una cuenta?"></div>
    </div>

    <script>
        var rectangle4 = document.getElementById("rectangle4");
        if (rectangle4) {
            rectangle4.addEventListener("click", function (e) {
                window.location.href = "/";
            });
        }

        var seTeOlvido = document.getElementById("seTeOlvido");
        if (seTeOlvido) {
            seTeOlvido.addEventListener("click", function (e) {
                // Please sync "Frame 3" to the project
            });
        }
    </script>
</body>

</html>