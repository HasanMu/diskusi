@extends('layouts.events')

@section('title') EVENTS @endsection

@section('content')	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">

			<div class="main-content">
				<h1>Event yang akan datang</h1>
				<section class="posts-con">
					@foreach($events as $data)
					<article>
						<div class="current-date">
							<p>{{$data->bulan}}</p>
							<p class="date">{{$data->tanggal}}</p>
						</div>
						<div class="info">
							<h3>{{$data->nama}}</h3>
							<p class="info-line"><span class="time">{{$data->waktu}}</span><span class="place">{{$data->tempat}}</span></p>
							<p>{{$data->deskripsi}}</p>
						</div>
					</article>
					@endforeach
				</section>
			</div>
			
			<aside id="sidebar">
				<div class="widget list">
					<h2>Foto Galeri</h2>
					<ul>
						@foreach($galeri as $data)
							<li><a href="/galeri"><img src="{{asset('storage/'.$data->nama_foto)}}" height="100px" width="100px" alt=""></a></li>
						@endforeach
					</ul>
					<div class="btn-holder">
						<a class="btn blue" href="/galeri">Show more photos</a>
					</div>
				</div>
			</aside>
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
	</div>
@endsection