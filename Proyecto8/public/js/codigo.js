var color1=["blue","yellow","pink","red","yellow","blue"];
var color2=["blue","white","pink","red","yellow","blue"];
var color3=["blue","yellow","blue","red","red","pink"];
var color4=["pink","white","pink","red","green","red"];
var color5=["green","white","green","green","white","yellow"];
var color6=["green","white","pink","white","green","yellow"];
var numero1=[2,6,5,4,5,5];
var numero2=[4,6,6,3,2,6];
var numero3=[3,4,1,2,6,3];
var numero4=[1,4,2,5,6,1];
var numero5=[5,5,3,2,2,1];
var numero6=[4,1,4,3,1,3];
var tablero1=[numero1,numero2,numero3,numero4,numero5,numero6];
var posInicial=[0,0];
var posFinal=[0,0];

var filaInicial=0;
var colInicial=0;

var filaFinal=0;
var colFinal=0;

function casillaAleatoria() {
  while (true) {
    filaInicial= Math.floor((Math.random() *6) +1);
    filaFinal= Math.floor((Math.random() *6) +1);
    if (filaInicial != filaFinal) {
      break;
    }
  }
  while (true) {
    colInicial= Math.floor((Math.random() *6) +1);
    colFinal= Math.floor((Math.random() *6) +1);
    if (colInicial != colFinal) {
      break;
    }
  }

posInicial.splice(0,1, `${filaInicial}`);
posFinal.splice(0,1, `${filaFinal}`);

posInicial.splice(1,1, `${colInicial}`);
posFinal.splice(1,1, `${colFinal}`);
}
casillaAleatoria();

function tablero() {


document.write("<table>");
  document.write("<tr>");
    for (let i = 0; i < numero1.length; i++) {
      if (posInicial[0]==1 && posInicial[1]==i+1) {
        document.write(`<td style="background-color:${color1[i]};font-size:80px; border: 5px solid black">${numero1[i]}</td>`);
      }
        else if (posFinal[0]==1 && posFinal[1]==i+1) {
          document.write(`<td style="background-color:${color1[i]};font-size:80px; border: 5px solid grey">${numero1[i]}</td>`);
        }
          else {
            document.write(`<td style="background-color:${color1[i]};font-size:80px;border: 5px solid white">${numero1[i]}</td>`);
          }
    }
document.write("</tr>");
  //numero2
  document.write("<tr>");
    for (let i = 0; i < numero2.length; i++) {
      if (posInicial[0]==2 && posInicial[1]==i+1) {
        document.write(`<td style="background-color:${color2[i]};font-size:80px; border: 5px solid black">${numero2[i]}</td>`);
      }
        else if (posFinal[0]==2 && posFinal[1]==i+1) {
          document.write(`<td style="background-color:${color2[i]};font-size:80px; border: 5px solid grey">${numero2[i]}</td>`);
        }
          else {
            document.write(`<td style="background-color:${color2[i]};font-size:80px;border: 5px solid white">${numero2[i]}</td>`);
          }
    }
document.write("</tr>");
  //numero3
  document.write("<tr>");
    for (let i = 0; i < numero3.length; i++) {
      if (posInicial[0]==3 && posInicial[1]==i+1) {
        document.write(`<td style="background-color:${color3[i]};font-size:80px; border: 5px solid black">${numero3[i]}</td>`);
      }
        else if (posFinal[0]==3 && posFinal[1]==i+1) {
          document.write(`<td style="background-color:${color3[i]};font-size:80px; border: 5px solid grey">${numero3[i]}</td>`);
        }
          else {
            document.write(`<td style="background-color:${color3[i]};font-size:80px;border: 5px solid white">${numero3[i]}</td>`);
          }
    }
document.write("</tr>");
  //numero4
  document.write("<tr>");
    for (let i = 0; i < numero4.length; i++) {
      if (posInicial[0]==4 && posInicial[1]==i+1) {
        document.write(`<td style="background-color:${color4[i]};font-size:80px; border: 5px solid black">${numero4[i]}</td>`);
      }
        else if (posFinal[0]==4 && posFinal[1]==i+1) {
          document.write(`<td style="background-color:${color4[i]};font-size:80px; border: 5px solid grey">${numero4[i]}</td>`);
        }
          else {
            document.write(`<td style="background-color:${color4[i]};font-size:80px;border: 5px solid white">${numero4[i]}</td>`);
          }
    }
document.write("</tr>");
  //numero5
  document.write("<tr>");
    for (let i = 0; i < numero5.length; i++) {
      if (posInicial[0]==5 && posInicial[1]==i+1) {
        document.write(`<td style="background-color:${color5[i]};font-size:80px; border: 5px solid black">${numero5[i]}</td>`);
      }
        else if (posFinal[0]==5 && posFinal[1]==i+1) {
          document.write(`<td style="background-color:${color5[i]};font-size:80px; border: 5px solid grey">${numero5[i]}</td>`);
        }
          else {
            document.write(`<td style="background-color:${color5[i]};font-size:80px;border: 5px solid white">${numero5[i]}</td>`);
          }
    }
document.write("</tr>");
  //numero6
  document.write("<tr>");
    for (let i = 0; i < numero6.length; i++) {
      if (posInicial[0]==6 && posInicial[1]==i+1) {
            document.write(`<td style="background-color:${color6[i]};font-size:80px; border: 5px solid black">${numero6[i]}</td>`);
      }
        else if (posFinal[0]==6 && posFinal[1]==i+1) {
          document.write(`<td style="background-color:${color6[i]};font-size:80px; border: 5px solid grey">${numero6[i]}</td>`);
        }
          else {
            document.write(`<td style="background-color:${color6[i]};font-size:80px;border: 5px solid white">${numero6[i]}</td>`);
          }
    }
document.write("</tr>");
document.write("</table>");
  }

//Inicio DOM
  let contador=0;
  nMovimientos.value=0;
  mensajes.value="";

  var posicionColor=0;
  var colorNuevo=0;
    function comprobar() {
    //Numero de Movimientos
      contador=contador+1;
      posicionNueva=tablero1[fila.value-1][columna.value-1];
      nMovimientos.value=contador;
      movRealizado = document.getElementById("movimientos").value+`(${fila.value}`+`,${columna.value})`;
      document.getElementById("movimientos").value=movRealizado;
    //colores
      if (fila.value==1) {
      posicionColor=color1[colInicial-1];
      colorNuevo=color1[columna.value-1];
      }
      if (fila.value==2) {
        posicionColor=color2[colInicial-1];
        colorNuevo=color2[columna.value-1];
      }
      if (fila.value==3) {
        posicionColor=color3[colInicial-1];
        colorNuevo=color3[columna.value-1];
      }
      if (fila.value==4) {
        posicionColor=color4[colInicial-1];
        colorNuevo=color4[columna.value-1];
      }
      if (fila.value==5) {
        posicionColor=color5[colInicial-1];
        colorNuevo=color5[columna.value-1];
      }
      if (fila.value==6) {
        posicionColor=color6[colInicial-1];
        colorNuevo=color6[columna.value-1];
      }
    //Fila,Columna y color
    if (filaInicial==fila.value || colInicial==columna.value) {
        if (posicion==posicionNueva || posicionColor==colorNuevo) {
          filaInicial=fila.value;
          colInicial=columna.value;
          posicion=posicionNueva;
          mensajes.value="Correcto";
            if (filaInicial==filaFinal && colInicial==colFinal) {
              mensajes.value="Ganaste";
            }
          console.log(posicionNueva);
          console.log(filaInicial,colInicial);
        }
        else {
          mensajes.value="No es valido";
        }
      }
      else {
        mensajes.value="Error";
      }
      console.log(fila.value);
  }
movimientos.value=`(${filaInicial},${colInicial})`;


  tablero();
let posicion=tablero1[posInicial[0]-1][posInicial[1]-1];
console.log(posInicial);
console.log(posFinal);
