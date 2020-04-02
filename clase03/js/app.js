console.log("tablas a)");
var tabla=5;
console.log("imprimiendo tabla del"+" "+tabla);
for (var i=1; i<=10;i++)
{
  console.log(tabla+"x"+i+"="+tabla*i);
}
console.log("tablas b)");
var tabla1;
var tabla2;
tabla1= prompt("ingrese la primera tabla que desea imprimir:"," ");
tabla2= prompt("ingrese la segunda tabla que desea imprimir:"," ")
if (tabla2>tabla1)
{
  console.log("imprimiendo tabla del"+" "+tabla1);
  for (var i=1; i<=10;i++)
  {
    console.log(tabla1+"x"+i+"="+tabla1*i);
  }
  console.log("imprimiendo tabla del"+" "+tabla2);
  for (var i=1; i<=10;i++)
  {
    console.log(tabla2+"x"+i+"="+tabla2*i);
  }
}
else
{
  console.log("no se puede procesar esta peticion");
}
