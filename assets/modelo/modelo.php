<?php
include_once "conexion.php";
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['option'])) ? $_POST['option'] : '';

$id = (isset($_POST['key'])) ? $_POST['key'] : '';
$titulo = (isset($_POST['js_titulo'])) ? $_POST['js_titulo'] : '';
$link = (isset($_POST['js_link'])) ? $_POST['js_link'] : '';

switch($opcion)
{
    case 1:
        $consulta = "CALL add_link ('$titulo', '$link') ";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 2:
        $consulta = "SELECT  id,titulo, link FROM save_link";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        print json_encode($data, JSON_UNESCAPED_UNICODE);
        break;
    case 3:
        $consulta = "DELETE FROM save_link WHERE id = $id";
        $resultado = $conexion->prepare($consulta);
         $resultado->execute(); 
        break;
}

// <!-- use 3622290_pruebas;
// DELIMITER //
// CREATE PROCEDURE add_link(
//     IN _titulo varchar(50),
//     IN _link varchar (100)
// )
// BEGIN
// INSERT INTO `save_link`(`titulo`, `link`) VALUES ( _titulo, _link);
// END 
// // -->
?>
