<?php
require_once ('jpgraph/src/jpgraph.php');
require_once ('jpgraph/src/jpgraph_bar.php');

if (isset($_GET['u1'])) {
$u1=$_GET['u1'];    
$datosy=array($u1);

} 
if (isset($_GET['u2'])) {
$u2=$_GET['u2'];    
$datosy=array($u1,$u2);

} 
if (isset($_GET['u3'])) {
$u3=$_GET['u3'];    
$datosy=array($u1,$u2,$u3);

} 
if (isset($_GET['u4'])) {
$u4=$_GET['u4'];    

$datosy=array($u1,$u2,$u3,$u4);
} 
if (isset($_GET['u5'])) {
$u5=$_GET['u5'];

$datosy=array($u1,$u2,$u3,$u4,$u5);
} 
if (isset($_GET['u6'])) {
$u6=$_GET['u6'];    

$datosy=array($u1,$u2,$u3,$u4,$u5,$u6);
} 
if (isset($_GET['u7'])) {
$u7=$_GET['u7'];    

$datosy=array($u1,$u2,$u3,$u4,$u5,$u6,$u7);
} 
if (isset($_GET['u8'])) {
$u8=$_GET['u8'];    

$datosy=array($u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8);
} 
if (isset($_GET['u9'])) {
$u9=$_GET['u9'];    

$datosy=array($u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8,$u9);
} 
if (isset($_GET['u10'])) {
$u10=$_GET['u10'];    

$datosy=array($u1,$u2,$u3,$u4,$u5,$u6,$u7,$u8,$u9,$u10);
} 

// Creamos el grafico
$grafico = new Graph(500,500);
$grafico->SetScale('textlin');
 
// Ajustamos los margenes del grafico-----    (left,right,top,bottom)
$grafico->SetMargin(40,30,30,40);
 
// Creamos barras de datos a partir del array de datos
$bplot = new BarPlot($datosy);
 
// Configuramos color de las barras
$bplot->SetFillColor('#479CC9');
 
//Añadimos barra de datos al grafico
$grafico->Add($bplot);
 
// Queremos mostrar el valor numerico de la barra
$bplot->value->Show();
 
// Configuracion de los titulos
//$grafico->title->Set('Mi primer grafico de barras');
$grafico->xaxis->title->Set('X');
$grafico->yaxis->title->Set('Y');
 
$grafico->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$grafico->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
 
// Se muestra el grafico
$grafico->Stroke();