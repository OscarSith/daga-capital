@extends('master')

@section('body')
	<section id="blog-details">
		<div class="container">
			<div class="row blog-item">
				<div class="col-sm-2 text-center">
					<i class="fa fa-clock-o"></i>
					<p class="date"><span>{{ $blog->updated_at->format('d')}}</span> {{ $blog->updated_at->format('F')}}</p>
				</div>
				<div class="col-sm-10 blog-content">
					<div class="entry-header">
						<img class="img-responsive" src="{{ asset('images/blog/' . $blog->picture ) }}" alt="" />
						<h2>{{ $blog->title }}</h2>
					</div>
					<div class="entry-post">
						{!! $blog->post !!}
					</div>
					<!-- <div class="social-share">
						<ul>
							<li><a href="#"><img class="img-responsive" src="images/blog/share1.jpg" alt="" /></a></li>
							<li><a href="#"><img class="img-responsive" src="images/blog/share2.jpg" alt="" /></a></li>
							<li><a href="#"><img class="img-responsive" src="images/blog/share3.jpg" alt="" /></a></li>
							<li><a href="#"><img class="img-responsive" src="images/blog/share4.jpg" alt="" /></a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="bottom default-bg text-center">
			<div class="container text-center">
				<p>Copyright &copy; {{ date('Y') }} DAGA capital, All rights reserved.</p>
			</div>
		</div>
	</footer>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@stop