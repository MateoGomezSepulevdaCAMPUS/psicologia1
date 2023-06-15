<?php
require "list.php";
if (isset($_POST['guardar'])){
 $nombre->[GET_['nombre']];
 $apellido=[GET_['apellido']];
 $edad=[GET_['edad']];
 $especialiad=[GET_['especialidad']];
$data = array (
    'nombre' =>$nombre,
    'apellido'=>$apellido,
    'edad'=>$edad,
    'especialidad'=>$especialidad
);
$ch= curl_init();
$options = array(
    CURLOPT_URL=> 'ArTeM02-48/psicologia/psychology/psychologists?nombre=dsfsda&apellido=dsfsd&edad=2&especialidad=sadaS',
    CURLOPT_POST =>1,
    CURLOPT_POSTFIELDS=>$data,
    CURLOPT_RETURNTRANSFER=>1
);
curl_setopt_array($ch, $options);
$result= curl_exec($ch);
print_r($result);
}
?>