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


<div class="split"></div>
<br /><br />
@include('footer')

@stop