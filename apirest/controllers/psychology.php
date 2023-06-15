<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
header('Content-Type: application/json');
require_once("../config/ConectarPsychology.php");

require_once("../models/Psychology.php");

$psychology = new Psychology();

$body= json_decode(file_get_contents("php://input"),true);
    switch ($_GET["op"]) {
        case "GetAll":
            $datos=$psychology->get_psychology();
            echo json_encode($datos);
            break;
        case "GetId":
            $datos = $psychology->get_psychology_id($body["id"]);
            echo json_encode($datos);

            case "insert":

                $datos=$psychology->insert_psychology($body["id_psicologa"], $body["nombre"], $body["apellido"], $body["edad"], $body["especialidad"]);
                echo json_encode("insertado correctamente");
    
            break;
        default:
            # code...
            break;
    }
?>