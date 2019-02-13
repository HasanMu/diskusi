@extends('layouts.events')

@section('title') EVENTS @endsection

@section('content')	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">

			<div class="main-content">
				<h1>{{$event->nama}}</h1>
				<section class="posts-con">
					<article>
						<div class="current-date">
							<p>{{$event->bulan}}</p>
							<p class="date">{{$event->tanggal}}</p>
						</div>
						<div class="info">
							<h3><a href="" style="text-decoration: none; color: grey;"></a></h3>
							<p class="info-line"><span class="time">{{$event->waktu}}</span><span class="place">{{$event->tempat}}</span></p>
							<p>{{$event->deskripsi}}</p>
							
						</div>
					</article>
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
						<a class="btn blue" href="/galeri" style="text-decoration: none;">Lebih banyak foto</a>
					</div>
				</div>
			</aside>
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
	</div>
@endsection