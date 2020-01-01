function harga($data){
	var temp = document.getElementById("price").value;
	if ($data == 'Standard') {
		temp = parseFloat(temp);
		temp = temp + 9;
	}
	else if ($data == 'Express') {
		temp = parseFloat(temp);
		temp = temp + 18;
	}
	document.getElementById("total").value = temp;
}