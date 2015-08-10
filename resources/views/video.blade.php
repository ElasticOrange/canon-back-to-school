@extends('master')

@section('title', 'Canon back to school')

@section('content')

@include('header')
<div class="content-video">
	<h4 class="video-page">Descoperă cele mai cool funcţii ale imprimantelor.</h4>

	<h4 class="video-page">NFC în viaţa reală</h4>
	<iframe width="708" height="411" src="//www.youtube.com/embed/-_C7mmFFTeM" frameborder="0" allowfullscreen></iframe>

	<h4 class="video-page">Cu capul în nori şi cloud printing</h4>
	<iframe width="708" height="411" src="//www.youtube.com/embed/-_C7mmFFTeM" frameborder="0" allowfullscreen></iframe>

	<h4 class="video-page">Imprimă de oriunde cu Wi-fi</h4>
	<iframe width="708" height="411" src="//www.youtube.com/embed/-_C7mmFFTeM" frameborder="0" allowfullscreen></iframe>
</div>
<br /><br />
<div class="conditii">
	<p class="conditii">Promoţie valabilă în perioada 24 august - 30 septembrie 2015.</p>

	<p class="conditii">**Canon Pixma MG5650, MG6650, MG7550, MX535, MX925, LBP6030, MF3010, MF211</p>

	<a href="#">
		<p class="regulament">REGULAMENT ></p>
	</a>

	<form action="/inscriere">
	    <input type="submit" class="btn-trimite-inscriere" value="Mai departe">
	</form>
</div>
@stop