function crearPersona(nombre, apellido){
  return{
    "nombre": nombre,
    "apellido" : apellido,
    "nombreCompleto" : function(){
      return this.nombre + ", " + this.apellido;
    }
  }
}
var a = 1;
var b = "hola";
var c = {};
var d = {
  "a" : 1,
  "b" : "hola",
  "otro" : "otra cosa"
};
