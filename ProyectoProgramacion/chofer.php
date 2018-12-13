<<?php
include 'dbclass.php';
  class chofer{
    private $nombretabla = "chofer";

    public $chofer_id;
    public $apellido;
    public $nombre;
    public $documento;
    public $email;
    public $vehiculo_id;
    public $sistema_id;
    public $created;
    public $updated;

    public function create(){

    }

    public function read(){
      $sql="SELECT * from chofer";
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
