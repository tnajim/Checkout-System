@extends('layouts.app')

@section('content')
<h3><a href = "/">Regular Checkout</a></h3>
<center>
	<h1>Checkout System with New Offers</h1>
	Apples $ 0.70
	<input type="number" name="apples" id="apple" min="0" max="999" value="0"> 
	<button onclick="scanApple()">Scan Apple</button>
	<br>
	Oranges $ 0.35
	<input type="number" name="oranges" id="orange" min="0" max="999" value="0"> 
	<button onclick="scanOrange()">Scan Orange</button>
	<br>
    <br>
    <h3>New Offers Available!</h3>
    <h3>Buy one, get one free on Apples</h3>
    <h3>3 for the Price of 2 on Oranges</h3>
	<button onclick="checkout()">Checkout</button>
    <br>
    <b>Total Price: </b><span id="totalans"></span>
	<p id="appleVal"></p>
    <p id="appleVal1"></p>
	<p id="orangeVal"></p>
    <p id="orangeVal1"></p>
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
    var applespriced = 0;
    var orangespriced = 0;

    //buy one take one apples
    if(apples%2 == 0){
        applespriced = apples/2;
        var applesdisc = applespriced;
    }
    else{
        apples--
        applespriced = (apples/2);
        var applesdisc = applespriced;
        applespriced++
        apples++
    }

    //3 for the price of 2 on Oranges
    if(oranges%3 == 0){
        var orangesdisc = oranges/3;
        orangespriced = oranges-orangesdisc;
    }
    else{
        var leftoverOranges = oranges%3;
        var orangesdisc = (oranges-leftoverOranges)/3;
        orangespriced = oranges - orangesdisc;
    }

	var totalprice = (applespriced*appleprice)+(orangespriced*orangeprice);
	totalprice = parseFloat(Math.round(totalprice * 100) / 100).toFixed(2);;
	document.getElementById('totalans').innerHTML = '$ '+totalprice;
    document.getElementById('appleVal').innerHTML = apples+' Apple/s';
    document.getElementById('appleVal1').innerHTML = applesdisc+' Apple/s Discounted';
    document.getElementById('orangeVal').innerHTML = oranges+' Orange/s';
    document.getElementById('orangeVal1').innerHTML = orangesdisc+' Orange/s Discounted';
}
	</script>
</center>
<!-- end of content section -->
@endsection