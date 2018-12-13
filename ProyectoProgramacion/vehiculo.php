<<?php
include 'dbclass.php';
  class vehiculo{
    private $nombretabla = "vehiculo";

    public $vehiculo_id;
    public $patente;
    public $anho_patente;
    public $anho_fabricacion;
    public $marca;
    public $modelo;
    public $created;
    public $updated;

    public function create(){

    }

    public function read(){
      $sql="SELECT * from vehiculo";
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
