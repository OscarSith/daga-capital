@extends('master')

@section('loader')
	<div class="preloader">
        <div id="loaderImage"></div>
    </div>
@stop
@section('body')
    <section id="main-carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#main-carousel" data-slide-to="1"></li>
			<li data-target="#main-carousel" data-slide-to="2"></li>
			<li data-target="#main-carousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active" style="background-image: url(images/slider/1.jpg)">
				<div class="container carousel-caption">
					<h2 class="heading animated bounceInRight">Amamos lo que hacemos, <span>trabajar para usted</span><i class="fa fa-chevron-right"></i></h2>
					<p class="slide-info animated bounceInLeft">En DAGA Capital amamos el poder concentrarnos en su negocio, asi como llevarlo a obtener resultados importantes que redituen en beneficios diversos.  Confíe en nosotros.</p>
				</div>
			</div>
			<div class="item" style="background-image: url(images/slider/3.jpg)">
				<div class="container carousel-caption">
					<h2 class="heading animated bounceInDown">Enfoque internacional <span>y soluciones a su medida</span><i class="fa fa-chevron-right"></i></h2>
					<p class="slide-info animated bounceInUp">Gracias a las alianzas estratégicas en diversas regiones de América y el mundo, podemos ofrecerle un conjunto de soluciones de acuerdo a su aspiración o enfoque de su negocio.</p>
				</div>
			</div>
			<div class="item" style="background-image: url(images/slider/4.jpg)">
				<div class="container carousel-caption">
					<h2 class="heading animated fadeInLeftBig">Sabemos que la eficiencia <span>es una necesidad</span><i class="fa fa-chevron-right"></i></h2>
					<p class="slide-info animated fadeInRightBig">Realizamos coordinaciones rápidas con nuestros partners, en las distintas industrias, que permiten mantener sus operaciones en estado dinámico.  Vamos a su velocidad.</p>
				</div>
			</div>
			<div class="item" style="background-image: url(images/slider/5.jpg)">
				<div class="container carousel-caption">
					<h2 class="heading animated fadeInRightBig">Nos aliamos con la tecnología <span>para usted</span><i class="fa fa-chevron-right"></i></h2>
					<p class="slide-info animated fadeInLeftBig">Valoramos su interés por el desarrollo técnico y tecnológico, entendemos que proporcionan a las organizaciones un espíritu moderno y de avanzada.  Confíe en nosotros, guardamos el mismo interés.  </p>
				</div>
			</div>
		</div>
    </section>
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="service-heading">
						<div class="row">
							<div class="col-sm-3 wow fadeInLeft" data-wow-duration="1200ms" data-wow-delay="300ms">
								<h3>Ofrecemos todo lo que tenemos en favor de su <span>proyecto</span></h3>
							</div>
							<div class="col-sm-9 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="300ms">
								<div class="service-content">
									<div class="service-icon">
										<i class="fa fa-angle-right pull-left"></i>
									</div>
									<div class="service-text">
										<p>Contamos con recursos diversos para hacer que <span>su  negocio o proyecto siga en marcha y mejore en el camino.</span></p>
										<p>Nuestra técnica de construir juntos <span>potencia las operaciones y eleva los resultados </span>en favor de sus objetivos.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="single-service  wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="row">
							<div class="col-sm-4 col-md-3">
								<div class="single-service-icon wow rotateIn" data-wow-duration="1000ms" data-wow-delay="300ms">
									<i class="fa fa-lightbulb-o"></i>
								</div>
							</div>
							<div class="col-sm-8 col-md-9">
								<div class="single-service-text">
									<h2>Joint <span>Venture</span></h2>
									<p>Buscamos para usted aliados financieros, comerciales, administrativos, y operacionales para que su negocio encuentre soluciones a su medida y no pause la evolución de su proyecto.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="single-service wow flipInY" data-wow-duration="1500ms" data-wow-delay="350ms">
						<div class="row">
							<div class="col-sm-4 col-md-3">
								<div class="single-service-icon wow rotateIn" data-wow-duration="1000ms" data-wow-delay="300ms">
									<i class="fa fa-calculator"></i>
								</div>
							</div>
							<div class="col-sm-8 col-md-9">
								<div class="single-service-text">
									<h2>Soporte <span>contable y financiero</span></h2>
									<p>Le ofrecemos la posibilidad de contar con un equipo contable y financiero instruido y capaz de darle dirección a sus inquietudes e intereses.  Buscaremos alternativas a sus inversiones e inversiones para sus objetivos.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="single-service  wow flipInY" data-wow-duration="2000ms" data-wow-delay="400ms">
						<div class="row">
							<div class="col-sm-4 col-md-3">
								<div class="single-service-icon wow rotateIn" data-wow-duration="1000ms" data-wow-delay="300ms">
									<i class="fa fa-bar-chart"></i>
								</div>
							</div>
							<div class="col-sm-8 col-md-9">
								<div class="single-service-text">
									<h2>Asesoría <span>administrativa y comercial</span></h2>
									<p>Diseñamos con usted un panel de control de tipo BSC a través del cual puede monitorear los avances en administración y desarrollo comercial de su organización. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="single-service wow flipInY" data-wow-duration="2500ms" data-wow-delay="450ms">
						<div class="row">
							<div class="col-sm-4 col-md-3">
								<div class="single-service-icon wow rotateIn" data-wow-duration="1000ms" data-wow-delay="300ms">
									<i class="fa fa-group"></i>
								</div>
							</div>
							<div class="col-sm-8 col-md-9">
								<div class="single-service-text">
									<h2>Gestión del <span>recurso humano</span></h2>
									<p>Encuentre en nosotros la posibilidad de un acompañamiento directo en la gestión del recurso humano, desde la búsqueda de personal y selección hasta evaluaciones de desempeño adaptadas a sus objetivos organizacionales.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about-us">
		<div class="about-bg"></div>
		<div class="container">
			<div class="about-details wow flipInX" data-wow-duration="1500ms" data-wow-delay="300ms">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0">
						<div class="about-image">
							<img class="img-responsive" src="images/about-us/about.jpg" alt="" />
						</div>
					</div>
					<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0">
						<div class="default-bg about-content">
							<h2>Quiénes <span>Somos</span></h2>
							<p>DAGA Capital es un equipo multidisciplinario de profesionales con experiencia que buscan ofrecer soluciones concretas a su negocio, emprendimiento, proyecto, o gran empresa con el ánimo de mostrarle las distintas alternativas que tiene el mercado para sus necesidades a través de mecanismos como el Joint Venture, Inversiones, Colaterales o asesorías diversas.</p>
							<p>Buscamos caminar de la mano con su organización, conscientes de que se puede crecer en equipo.  En DAGA Capital creemos que usted necesita del mejor aliado para sus expectativas y queremos demostrárselo, somos nosotros.</p>
							<p>Cuente con nuestra experiencia y conocimiento en las distintas líneas de desarrollo.</p>
							<p class="text-aling:right;">Equipo DAGA Capital.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="portfolio">
		<div class="container">
			<div class="container text-center entry-header wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>NUESTRO <span>PORTAFOLIO</span></h2>
					<p>Conscientes de que conocemos distintos mercados y sectores económicos, nuestro portafolio busca enriquecerse de proyectos variados que puedan evidenciar nuestro expertise.</p>
				</div>
			</div>
			<div id="portfolio-slider" class="carousel slide carousel-fade" data-ride="carousel">
				<div class=" carousel-inner wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
					<div class="item active row">
						<div class="col-sm-6">
							<div class="recent-port-img animated fadeInUpBig">
								<img class="img-responsive" src="images/portfolio/slide2.jpg" alt="portfolio" />
							</div>
						</div>
						<div class="col-sm-6 default-bg">
							<div class="recent-port-text animated fadeInDownBig text-justify">
								<h2>Una Cartera Variada</h2>
								<p>En DAGA Capital nos enriquecemos con el conocimiento y asesoramiento a diversos sectores económicos que mueven las distintas economías de América y el mundo en general.  Buscamos ser una solución actual en el descubrimiento de nuevas formas de desarrollo de bienes y servicios.  Por ello incursionamos en:</p>
								<ul>
									<li><i class="fa fa-angle-double-right"></i> Retail y textil. </li>
									<li><i class="fa fa-angle-double-right"></i> Desarrollo de software </li>
									<li><i class="fa fa-angle-double-right"></i> Ingeniería hidráulica, mecánica y civil.</li>
									<li><i class="fa fa-angle-double-right"></i> Agricultura y agro exportación.</li>
									<li><i class="fa fa-angle-double-right"></i> Tecnología y técnicas avanzadas.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="item row">
						<div class="col-sm-6">
							<div class="recent-port-img animated fadeInUpBig">
								<img class="img-responsive" src="images/portfolio/slide3.jpg" alt="portfolio" />
							</div>
						</div>
						<div class="col-sm-6 default-bg">
							<div class="recent-port-text animated fadeInDownBig text-justify">
								<h2>Portafolio de Servicios</h2>
								<p>Nuestro objetivo principal es brindar un portafolio rico en soluciones tales como: </p>
								<ul>
									<li><i class="fa fa-angle-double-right"></i> Tercerización de servicios empresariales.</li>
									<li><i class="fa fa-angle-double-right"></i> Optimización de procesos.</li>
									<li><i class="fa fa-angle-double-right"></i> Gestión comercial.</li>
									<li><i class="fa fa-angle-double-right"></i> Inteligencia de negocios.</li>
									<li><i class="fa fa-angle-double-right"></i> Desarrollo de ideas en LAB Business (laboratorio de negocios).</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<ol class="carousel-indicators">
					<li data-target="#portfolio-slider" data-slide-to="0" class="active"></li>
					<li data-target="#portfolio-slider" data-slide-to="1"></li>
				</ol>
			</div>
		</div>
	</section>
	<section id="clients">
		<div class="container">
			<div class="row text-center entry-header wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Nuestros <span>Clientes</span></h2>
					<p>Sea parte de nuestro pull de clientes y busque con nosotros oportunidades profesionales para su negocio o empresa.</p>
				</div>
			</div>
			<div id="clients-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner wow flipInX" data-wow-duration="1200ms" data-wow-delay="500ms">
					<div class="item active">
						<ul>
							<li><a class="img-responsive" href="#"><img src="images/icon1.png" alt="" /></a></li>
							<li><a class="img-responsive" href="#"><img src="images/icon2.png" alt="" /></a></li>
							<li><a class="img-responsive" href="#"><img src="images/icon3.png" alt="" /></a></li>
							<li><a class="img-responsive" href="#"><img src="images/icon4.png" alt="" /></a></li>
						</ul>
					</div>
				</div>
				<a class="client-left" href="#clients-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="client-right" href="#clients-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</section>
	<section id="blog">
		<div class="container">
			<div class="row text-center entry-header wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Blog</h2>
					<p>Infórmese sobre los mercados locales e internacionales a través de nuestro blog que el cual actúa como ventana al mundo empresarial.</p>
				</div>
			</div>
			<div class="row">
				@foreach($posts as $rec)
					<div class="col-sm-12 col-md-12 col-lg-6">
						<div class="single-blog wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="blog-image">
								<a href="single-blog.html"><img class="img-responsive" src="images/blog/{{ $rec->thumb_picture }}" alt="" /></a>
								<div class="post-date">
									<p>{{ $rec->updated_at->format('d') }}<span>{{ $rec->updated_at->format('F') }}</span></p>
								</div>
							</div>
							<div class="entry-content default-bg">
								<a href="single-blog.html"><h2>{{ $rec->title }}</h2></a>
								<p>{{ strip_tags(str_limit($rec->post, 180)) }}</p>
								<a href="{{ route('showBlog', [str_slug($rec->title, '-'), $rec->id]) }}" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="container">
			<div class="row text-center entry-header wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Contáctenos</h2>
				</div>
			</div>
		</div>
		<div class="contact-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms">
							<h2>DEJENOS UN MENSAJE</h2>
							<div class="status alert alert-success" style="display: none"></div>
							{!! Form::open(['url' => 'send', 'id'=>"main-contact-form", 'class'=>"contact-form", 'method' => "post"]) !!}
								<div class="form-group">
									<input type="text" name="nombre" class="form-control float-left" required="required" placeholder="Nombre">
								</div>
								<div class="form-group">
									<input type="email" name="correo" class="form-control float-left" required="required" placeholder="Correo electrónico">
								</div>
								<div class="form-group">
									<input type="text" name="asunto" class="form-control float-left subject-field" required="required" placeholder="Asunto">
								</div>
								<div class="form-group">
									<textarea name="mensaje" id="message" required="required" class="form-control" rows="5" placeholder="Mensaje..."></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-submit">Enviar</button>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
					<div class="col-sm-12 col-md-3 contact-details wow fadeInUp" data-wow-duration="1600ms" data-wow-delay="500ms">
						<h2>CONTACTENOS</h2>
						<h3>En Perú:</h3>
						<ul>
							<li><i class="fa fa-phone"></i> <span>Número Telefónico<br>(511) 242 2534</span></li>
							<li><i class="fa fa-map-marker"></i> <span>Dirección:<br>Av. Sergio Bernales 524 Int. 1204 Surquillo, Lima.</span></li>
							<li><i class="fa fa-envelope"></i> <span>E-Mail:<br>contacto@dagacapital.com</span></li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-3 contact-details wow fadeInUp" data-wow-duration="1600ms" data-wow-delay="500ms">
						<h2>&nbsp;</h2>
						<h3>En Colombia:</h3>
						<ul>
							<li><i class="fa fa-phone"></i> <span>Número Telefónico<br>(0057) 2 379 7150</span></li>
							<li><i class="fa fa-map-marker"></i> <span>Dirección:<br>Av. 2HN N° 54-05 A 103 Santiago de Cali.</span></li>
							<li><i class="fa fa-envelope"></i> <span>E-Mail:<br>contacto@dagacapital.com</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom default-bg text-center wow fadeIn" data-wow-duration="1500ms" data-wow-delay="300ms">
			<div class="container text-center">
				<p>Copyright &copy; {{ date('Y') }} DAGA capital, All rights reserved.</p>
			</div>
		</div>
	</footer>
	<div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="modalAlert">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modalAlert">Daga Capital dice:</h4>
				</div>
				<div class="modal-body">
					<p></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/canvas.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
@stop