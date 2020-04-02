console.log("");
var origen = [ ]
var destino = [ ]
var valor;
var i;
//se encuentran valores aleatorios
for (i=0;i<10;i++)
{
valor = Math.floor((Math.random() * 100) + 1);
origen[i]= Math.round(valor);
}
console.log(origen);
//se copian los elementos y se posicionan de menor a mayor
function copiar (origen,destino)
{
origen.sort(function(a, b) {
    return a - b;
});
  destino=origen.slice();
  return destino;
}
destino= copiar(origen,destino);
console.log(destino);
