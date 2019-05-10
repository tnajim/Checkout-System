@extends('layouts.app')

@section('content')
<h3><a href = "/discount">Checkout with New Offers</a></h3>
	<h1>Checkout System</h1>
	<form action="/homepost" method="post">
	{{ csrf_field() }}
	Apples $ 0.70
	<input type="number" name="apples" id="apple" min="0" max="999" value="0"> 
	<button type="button" onclick="scanApple()">Scan Apple</button>
	<br>
	Oranges $ 0.35
	<input type="number" name="oranges" id="orange" min="0" max="999" value="0"> 
	<button type="button" onclick="scanOrange()">Scan Orange</button>
	<br><br>
	<button type="button" onclick="checkout()">Checkout</button>
	<br><br>
	<!-- <b>Total Price: </b><span id="totalans"></span> -->

	<b>Total Price: </b>
	$<input type="text" name="totalprice" id="totalans"> 
	<p id="appleVal"></p>
	<p id="orangeVal"></p>
	<input type="submit" id="button2" value="Insert to Database" disabled>
	
	<script>
	function scanApple(){
	var value = parseInt(document.getElementById('apple').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('apple').value = value;
	}
	function scanOrange(){
	var value = parseInt(document.getElementById('orange').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('orange').value = value;
	}

	function checkout() {
	var apples = document.getElementById("apple").value;
	var oranges = document.getElementById("orange").value;
	var appleprice = 0.70;
	var orangeprice = 0.35;
	var totalprice = (apples*appleprice)+(oranges*orangeprice);
	totalprice = parseFloat(Math.round(totalprice * 100) / 100).toFixed(2);;
	//document.getElementById('totalans').innerHTML = '$ '+totalprice;
	document.getElementById("totalans").value = totalprice;
	document.getElementById('appleVal').innerHTML = apples+' Apple/s';
	document.getElementById('orangeVal').innerHTML = oranges+' Orange/s';
	document.getElementById("button2").disabled = false;
}
	</script>
<!-- end of content section -->
@endsection