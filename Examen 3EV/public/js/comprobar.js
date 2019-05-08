
function comp() {
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let precioH=document.getElementById('precio_hora').value;
  let horas=document.getElementById('horas').value;
  var error=true;
  document.getElementById('nombreOculto').style.display = 'none';
  document.getElementById('apellidoOculto').style.display = 'none';
  document.getElementById('prehoOculto').style.display = 'none';
  document.getElementById('horasOculto').style.display = 'none';
  document.getElementById('numOculto1').style.display = 'none';
  document.getElementById('numOculto2').style.display = 'none';
  if(nombre==""){
    document.getElementById('nombreOculto').style.display = 'block';
    error=false;
  }
  if (apellidos=="") {
    document.getElementById('apellidoOculto').style.display = 'block';
    error=false;
  }
  if (precioH=="") {
    document.getElementById('prehoOculto').style.display = 'block';
    error=false;
  }
  if (isNaN(precioH)) {
    document.getElementById('numOculto1').style.display = 'block';
    error=false;
  }
  if (horas=="") {
    document.getElementById('horasOculto').style.display = 'block';
    error=false;
  }
  if (isNaN(horas)) {
    document.getElementById('numOculto2').style.display = 'block';
    error=false;
  }
  if (error==false) {
    return false;
  }

}
