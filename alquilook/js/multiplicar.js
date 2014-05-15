
function multiplicar(){
	
	mensualidad = document.getElementById("mensualidad").value;
	
	precio1 = mensualidad * 0.05;
	precio2 = mensualidad * 0.07;
	precio3 = mensualidad * 0.1;
	
	document.getElementById("precio1").value = precio1.toFixed(2);
	document.getElementById("precio2").value = precio2.toFixed(2);
	document.getElementById("precio3").value = precio3.toFixed(2);
	
}
