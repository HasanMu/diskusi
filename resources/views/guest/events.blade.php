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
							<h3><a href="" name="nama" style="text-decoration: none; color: grey;">{{$data->nama}}</a></h3>
							<p class="info-line"><span class="time">{{$data->waktu}}</span><span class="place">{{$data->tempat}}</span></p>
							<p>{{str_limit($data->deskripsi, 300, '. . .')}}</p>
							<a href="{{route('detailevent', $data->id)}}"> Baca selengkapnya..</a>
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
						<a class="btn blue" href="/galeri" style="text-decoration: none;">Lebih banyak foto</a>
					</div>
				</div>
			</aside>
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
	</div>
@endsection