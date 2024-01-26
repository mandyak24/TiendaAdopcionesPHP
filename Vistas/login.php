<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel=stylesheet href="../css/login.css">
  <style>
    /* Pagina login */
@import url('https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap');

body {
  background-image: url('../img/fondo-huellas.jpg');
  font-family: 'Indie Flower', cursive;
  display: grid;
  grid-template-columns: 0.5fr 2fr;
  margin: 0 auto;
  overflow-x: hidden;
}

.form {
  grid-column: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: #AA8F66;
  border-radius: 5px;
  height: 100vh;
}



h1 {
  color: whitesmoke;
  text-align: center;
  text-shadow: #333 4px 4px;
}


label {
  display: block;
  margin: 15px 10px 5px;
  padding: 10px;
  color: whitesmoke;
  font-size: 25px;
  text-shadow: #333 4px 4px;
}

input {
  width: 100%;
  padding: 5px;
  box-sizing: border-box;
  border: 4px solid palegoldenrod;
  border-radius: 5px;
  text-align: center;
  cursor: pointer;

}

select {
  width: 80%;
  padding: 10px;
  margin: 0 10px;
  border-radius: 5px;
  border: 4px solid palegoldenrod;
  text-align-last: center;
  font-family: 'Indie Flower', cursive;
  font-size: 18px;
  background-color: white;
  cursor: pointer;
}

option {
  font-size: 14px;

  text-align: center;
  padding: 5px;
}

button {
  background-color: #FF007F;
  color: white;
  padding: 10px 15px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
  width: 150px;
  height: 50px;
  font-family: 'Indie Flower', cursive;
  font-weight: bold;
}


.error-message {
  font-family: sans-serif;
  font-weight: bold;
  font-size: 14px;
  margin-top: 100px;
}

/* Imagenes */
.imagenes {
  grid-column: 2;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  overflow: hidden; 
}

.imagen-item {
  width: 350px;
  height: 300px;
  border-radius: 10px;
  margin:10px;
  animation: escala 5s infinite , opaco 2s infinite;
  animation-timing-function: ease-in-out;

}

@keyframes escala {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(0.9);
  }

  100% {
    transform: scale(0.8);
  }
}


@keyframes opaco {
  0% {
    opacity: 0.8;
  }

  50% {
    opacity: 1;
  }

  100% {
    opacity: 0.8;
  }
}

.corazon {
  width: 100px; /* Ajusta el ancho según tus necesidades */
  height: 100px; /* Ajusta la altura según tus necesidades */
  background-color: #ff0000; /* Color de fondo del corazón */
  clip-path: polygon(
      50% 0%,
      100% 35%,
      100% 75%,
      50% 100%,
      0% 75%,
      0% 35%
  );
}

/* Ajusta el estilo de la imagen dentro del corazón según tus necesidades */
.corazon img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Para ajustar la imagen al tamaño del contenedor */
  border-radius: 50%; /* Hacer que la imagen sea circular si no lo es ya */
}
  </style>
</head>

<body>

  <div class="form">
    <h1>Protectora de animales &#10084</h1>

    <form action="../Controladores/Controlador.php" method="POST">
      <label for="identificador">Usuario:</label>
      <input type="text" name="identificador" id="identificador"><br><br>

      <label for="password">Contraseña:</label>
      <input type="password" name="password" id="password"><br><br>

      <label for="role">Seleccione su rol:</label>
      <select name="role" id="role">
        <option value="administrador">Administrador</option>
        <option value="usuario">Usuario</option>
      </select><br><br>

      <button type="submit" name="login">Login</button>
    </form>
    <p><?php if (isset($_SESSION['mensaje'])) {
          echo $_SESSION['mensaje'];
        }
        ?></p>

  </div>
  <div class="imagenes">
    <img src="../img/login2.avif" class="imagen-item">
    <img src="../img/login5.avif" class="imagen-item">
    <img src="../img/login6.avif" class="imagen-item">
  </div>

</body>

</html>