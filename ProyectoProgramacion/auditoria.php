<<?php
include 'dbclass.php';
  class auditoria{
    private $nombretabla = "auditoria";

    public $auditoria_id;
    public $fecha_acceso;
    public $user;
    public $response_time;
    public $endpoint;
    public $created;

    public function create(){

    }

    public function read(){
      $sql="SELECT * from auditoria";
      $ejec=$conex->prepare($sql);
      $ejec->execute();
      echo "Datos: <br>";
      echo "<table border='1'>";
      echo "<tbody>";
      while($fila=$ejec->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        foreach ($fila as $campo) {
          echo "<td>";
          echo "$campo";
          echo "</td>";
        }
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    }

    public function update() {}

    public function delete() {}
    }
 ?>
