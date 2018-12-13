<<?php
include 'dbclass.php';
  class sistema_vehiculo{
    private $nombretabla = "sistema_vehiculo";

    public $sistemavehiculo_id;
    public $vehiculo_id;
    public $sistema_id;
    public $updated;
    public $created;

    public function create(){

    }

    public function read(){
      $sql="SELECT * from sistema_vehiculo";
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
