<?php
require "../config/Conexion.php";
Class Usuario
{
  public function _construct(){

  }

  public function verificar($login,$clave){

    $sql=sprintf("SELECT `id`, `usuario`, `clave`, `creditos`, `fecha`, `valor`,
    (select COUNT(*) from lives where lives.idkey=keys_chk.clave) as lives,
    (select COUNT(*) from deads where deads.idkey=keys_chk.clave) as deads FROM `keys_chk` 
    WHERE usuario='$login' and clave='$clave'");
      return ejecutarConsulta($sql);

  }

  public function selectGates(){
      $sql="SELECT `id`, `nombre`, `descripcion`, `link`, `costo`, `activo` FROM `gates` WHERE activo=1";
      return ejecutarConsulta($sql);
  }

}
 ?>