@extends('master')

@section('title', 'Canon back to school')

@section('content')
@include('header')
	<div class="main-top">
		<div class="content-home">
			<img src="/img/homepage-content.png">
		</div>
		<p class="school-ready">PREGĂTEŞTE-TE ŞI ÎNCEPE ŞCOALA CU OFERTE INTERESANTE!</p>
	</div>

	<div class="futer">
		<img class="premii-concurs" src="/img/premii.png">
		<span class="premii">PREMII | </span>

		<span class="premii-intrebare">Urmăreşte-ne şi află dacă ai câştigat, extragerile vor avea loc pe data de 1 octombrie 2015</span>

		<span class="doix">2 x</span>
		<span class="unux">1 x</span>
		<span class="imprimanta">Imprimanta Canon PIXMA</span>
		<span class="ipad">iPad Mini</span>

		<a href="/pixma-e-cool"><div class="btn-trimite-pixma"><span class="btn-pixma">Mai departe</span></div></a>
	</div>

	<br /><br /><br /><br />
	<div class="split"></div>

	<div class="promotie-canon">
		<img src="/img/promotie.png">
		<span class="promotie">PROMOŢIE CANON | </span>
		<span class="promotie-pipe">Rechizite cool Cadou</span>
		<span class="promotie-parteneri">Primeşti un set de rechizite cadou la achiziţionarea unei
imprimante Pixma aflate în promoţie la partenerii autorizaţi.</span>
	</div>

	<div class="conditii">
		<p class="conditii1">Promoţie valabilă în perioada 24 august - 30 septembrie 2015.</p>

		<p class="conditii2">**Canon Pixma MG5650, MG6650, MG7550, MX535, MX925, LBP6030, MF3010, MF211</p>

		<a target="_blank" href="/docs/Regulament_Canon_Back_to_school.pdf" class="regulament">REGULAMENT </a>
	</div>
@stop