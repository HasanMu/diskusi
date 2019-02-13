@extends('layouts.guest')

@section('title') IDAMAN @endsection

@section('content')
	
	<section class="posts">
		<div class="container">
			<?php $no = 1 ?>
			@foreach($desc as $data)
			<?php $no++ ?>
			<article>
				<div class="pic"><img width="121" src="images/{{$no}}.png" alt=""></div>
				<div class="info">
					<h3>{{$data->judul}}</h3>
					<p>{{$data->deskripsi}}</p>
				</div>
			</article>
			@endforeach
		</div>
		<!-- / container -->
	</section>

	<section class="news">
		<div class="container">
			<h2>Alumni</h2>
			@foreach($alumni as $data)
			<article>
				<div class="pic"><img src="{{'storage/'.$data->foto}}" height="100px"  width="100px" alt=""></div>
				<div class="info">
					<h4>{{$data->nama}}</h4>
					<p class="date">{{$data->pekerjaan}}</p>
					<p>{{$data->deskripsi}}</p>
				</div>
			</article>
			@endforeach
			<!-- <div class="btn-holder">
				<a class="btn" href="#">See archival news</a>
			</div> -->
		</div>
		<!-- / container -->
	</section>

	<section class="events">
		<div class="container">
			<h2>Events</h2>
			@foreach($events as $data)
			<article>
				<div class="current-date">
					<p>{{$data->bulan}}</p>
					<p class="date">{{$data->tanggal}}</p>
				</div>
				<div class="info">
					<p>{{str_limit($data->deskripsi, 150, '. . .')}}</p>
					<a class="more" href="/event">Read more</a>
				</div>
			</article>
			@endforeach
			<div class="btn-holder">
				<a class="btn blue" href="/event">See all upcoming events</a>
			</div>
		</div>
		<!-- / container -->
	</section>
	<div class="container">
		<!-- <a href="#fancy" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Fill the form and get an answer!</span>
			</span> -->
			<span class="arrow"></span>
		</a>
	</div>
@endsection
