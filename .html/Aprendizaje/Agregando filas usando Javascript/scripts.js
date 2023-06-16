var contadorFilas = 1;

function agregarFila() {
  var tabla = document.getElementById("miTabla");
  var filasDatos = tabla.insertRow(tabla.rows.length - 1);

  // TR de Filas datos
  filasDatos.className = "fila-datos";

  var numeroFila = filasDatos.insertCell(0);
  numeroFila.className = "col1-dato";
  numeroFila.innerHTML = contadorFilas++;

  var otraColumna = filasDatos.insertCell(1);
  otraColumna.className = "col2-dato";
  otraColumna.innerHTML = "Contenido";

  var accion = filasDatos.insertCell(2);
  accion.id = "accion";
  var botonEliminar = document.createElement("button");
  botonEliminar.className = "boton-eliminar";
  botonEliminar.innerHTML = "Eliminar";
  botonEliminar.onclick = function() {
    eliminarFila(this);
  };
  
  accion.appendChild(botonEliminar);
}

function eliminarFila(boton) {
  var filasDatos = boton.parentNode.parentNode;
  filasDatos.parentNode.removeChild(filasDatos);
}