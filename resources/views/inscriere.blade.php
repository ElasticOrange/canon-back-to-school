@extends('master')

@section('title', 'Canon')

@section('content')
@include('header')
<div class="content">
	<span class="date">Lasă-ne datele tale si poti câstiga prin tragere la sorti una din cele două imprimante Canon Pixma.</span>
	<p class="intrebare">Ce functie ti s-a părut cea mai cool?</p><br/>

	<label class="radio-inline"><input type="radio" name="optradio">PIXMA Touch and Print (NFC)</label>
	<label class="radio-inline"><input type="radio" name="optradio">Wi-fi</label>
	<label class="radio-inline"><input type="radio" name="optradio">Cloud Printing</label>
</div><br />

<div class="red-split"></div>
	<p class="steluta-red">*Te rugăm să răspunzi la intrebare pentru a te înscrie în concurs</p><br/><br/>
	<p class="date-corecte">Asigură-te că ne dai datele corecte pentru a te contacta cât mai repede.</p>

	<div class="form-inscriere">
	<form action="/inscriere" data-form="true" method="post">
		<label for="email" class="forlabel emaillabel">Email</label>
		<input type="email" value="{{ old('email') }}" data-email="true" name="email" class="form-control emailbox">
	    
	    <label for="nume" class="forlabel numelabel">Nume și Prenume</label>
	    <input type="text"  value="{{ old('nume') }}" data-nume="true" name="nume" class="form-control numebox">

		<label for="telefon" class="forlabel telefonlabel">Telefon</label>
		<input type="text" value="{{ old('telefon') }}" data-telefon="true" name="telefon" class="form-control telefonbox">

		<input type="checkbox" class="checkbox2" name="contact" data-checkbox="true" value="1" checked="checked"> 
			<h4 class="checkbox3">Accept să fiu informat despre viitoarele promotii</h4>
	    <button type="submit" data-buton="true" class="btn-trimite">Mă inscriu</button>
	</form>
	</div>

<div class="split"></div>
<!-- <br /><br /> -->
@include('footer')

@stop