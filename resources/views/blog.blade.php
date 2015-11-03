@extends('master')

@section('body')
	<section id="blog-details">
		<div class="container">
			<div class="row blog-item">
				<div class="col-sm-2 text-center">
					<i class="fa fa-clock-o"></i>
					<p class="date"><span>29</span> September</p>
				</div>
				<div class="col-sm-10 blog-content">
					<div class="entry-header">
						<img class="img-responsive" src="images/blog/slide1.jpg" alt="" />
						<h2>STANDARD BLOG POST WITH GALLERY</h2>
					</div>
					<div class="entry-post">
						<p>In varius varius justo, eget ultrices mauris rhoncus non. Morbi tristique, mauris eu imperdiet bibendum, velit diam iaculis velit, in ornare massa enim at lorem. Etiam risus diam, porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus. Vestibulum tincidunt ullamcorper eros eget luctus. Nulla eget porttitor libero. LUCTUS FERMENTUM COMMODO</p>
						<p>Nulla sed mi leo, sit amet molestie nulla. Phasellus lobortis blandit ipsum, at adipiscing eros porta quis. Phasellus in nisi ipsum, quis dapibus magna. Phasellus odio dolor, pretium sit amet aliquam a, gravida eget dui. Pellentesque eu ipsum et quam faucibus scelerisque vitae ut ligula. Ut luctus fermentum commodo. Mauris eget justo turpis, eget fringilla mi. Duis lobortis cursus mi vel tristique. Maecenas eu lorem hendrerit neque dapibus cursus id sit amet nisi. Proin rhoncus semper sem nec aliquet.</p>
						<p>Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
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

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
@stop