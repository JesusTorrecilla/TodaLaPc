<<?php
include 'dbclass.php';
  class sistema_transporte{
    private $nombretabla = "sistema_transporte";

    public $sistema_id;
    public $nombre;
    public $pais_procedencia;
    public $updated;
    public $created;

    public function create(){

    }

    public function read(){
      $sql="SELECT * from sistema_transporte";
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
