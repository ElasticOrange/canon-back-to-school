@extends('master')

@section('title', 'Canon back to school')

@section('content')
@include('header')
<br />
<div class="content">
	<span class="date">Lasă-ne datele tale şi poţi câştiga prin tragere la sorţi una din cele două imprimante Canon Pixma.</span>
	<p class="intrebare">Ce funcţie ţi s-a părut cea mai cool?</p><br/>
	<br />

	<label class="radio-inline"><input type="radio" value="1" checked="checked" name="optradio">PIXMA Touch and Print (NFC)</label>
	<label class="radio-inline"><input type="radio" value="2" name="optradio">Wi-fi</label>
	<label class="radio-inline"><input type="radio" value="3" name="optradio">Cloud Printing</label>
<br />
<br />

<div class="red-split"></div>
	<br />
	<p class="steluta-red">*Te rugăm să răspunzi la întrebare pentru a te înscrie în concurs</p><br/>
	<p class="date-corecte">Asigură-te că ne dai datele corecte pentru a te contacta cât mai repede.</p><br /> <br />
</div>

	<div class="form-inscriere">
	<form action="/inscriere" data-form="true" method="post">
		<label for="email" class="forlabel emaillabel">Email</label>
		<input type="email" value="{{ old('email') }}" data-email="true" name="email" class="emailbox">
		<div class="blackline email-input"></div>
		<br>
	    
	    <label for="nume" class="forlabel numelabel">Nume şi Prenume</label>
	    <input type="text"  value="{{ old('nume') }}" data-nume="true" name="nume" class="numebox">
	    <div class="blackline nume-input"></div>
		<br /><br />

		<label for="telefon" class="forlabel telefonlabel">Telefon</label>
		<input type="text" value="{{ old('telefon') }}" data-telefon="true" name="telefon" class="telefonbox">
		<div class="blackline telefon-input"></div>
		<br /><br />

		<input type="checkbox" class="checkbox2" name="contact" data-checkbox="true" value="1" checked="checked"> 
			<h4 class="checkbox3">Accept să fiu informat despre viitoarele promoţii</h4>
	    	<div type="submit" data-buton="true" class="btn-trimite"><span class="btn-inscrie">Mă inscriu</span></div>
	</form>
	</div>

<div class="invizibil">
    <h3 class="felicitari">Felicitări! Te-ai înscris cu succes!</h3>
</div>
<br /><br /><br /><br /><br />
<div class="split"></div>
<br /><br />


<div class="futer">
	<img class="premii-concurs" src="/img/premii.png">
	<span class="premii">PREMII | </span>

	<span class="premii-intrebare">Urmăreste-ne si află dacă ai câstigat, extragerile vor avea loc pe data de 1 octombrie 2015</span>
	
	<span class="doix">2 x</span>
	<span class="unux">1 x</span>
	<span class="imprimanta">Imprimanta Canon PIXMA</span>
	<span class="ipad">iPad Mini</span>

</div>
<br />
<div class="conditii">
	<p class="conditii">Promoţie valabilă în perioada 24 august - 30 septembrie 2015.</p>

	<p class="conditii">**Canon Pixma MG5650, MG6650, MG7550, MX535, MX925, LBP6030, MF3010, MF211</p>

	<a href="#">
	<p class="regulament">REGULAMENT ></p>
	</a>
</div>
@stop

@section('js')
<script src="/js/form.js"></script>
@stop