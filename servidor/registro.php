<?php
  $nombre = $_POST['nombre'];
  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $sexo = $_POST['sexo'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];
  $usuario = $_POST['usuario'];
  $fecha = $_POST['fecha'];
  $password = sha1($_POST['password']);

  include "conexion.php";
  $conexion = conexion();
  $sql = "INSERT INTO t_usuarios (nombre,
                                  paterno,
                                  materno,
                                  sexo,
                                  telefono,
                                  email,
                                  usuario,
                                  fecha,
                                  password)
            VALUES ('$nombre',
                    '$paterno',
                    '$materno',
                    '$sexo',
                    '$telefono',
                    '$email',
                    '$usuario',
                    '$password',
                    '$fecha')";
  $respuesta = mysqli_query($conexion, $sql);
  mysqli_close($conexion);

  if($respuesta){
    header("location:../index.php");
  }else{
    echo "no se pudo registrar";
  }