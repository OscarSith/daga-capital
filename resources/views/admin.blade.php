@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@if (Session::has('success_message'))
					<div class="alert alert-success alert-dismissible fade in" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						{{ Session::get('success_message') }}
					</div>
					@endif
					@if($errors->any())
						<div class="alert alert-warning">
							<ul class="list-unstyled">
							@foreach($errors->all() as $rec)
								<li>{{ $rec }}</li>
							@endforeach
							</ul>
						</div>
					@endif
					<div class="row">
						@foreach ($posts as $i => $rec)
							<div class="col-sm-12">
								{!! Form::model($rec, ['route' => ['editPost', $rec->id], 'method' => 'put', 'files' => true]) !!}
								{!! Form::hidden('old_picture_name', $rec->picture) !!}
								<div class="form-group">
									{!! Form::text('title', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::textarea('post', null, ['class' => 'form-control', 'id' => 'textarea' . $i]) !!}
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-4">
											<img src="{{ asset('images/blog/' . $rec->picture) }}" class="img-responsive">
										</div>
										<div class="col-sm-8">
											{!! Form::file('picture', null, ['form-control']) !!}
										</div>
									</div>
								</div>
								<div>
									<button class="btn btn-primary"><i class="fa fa-check"></i> Guardar</button>
								</div>
								<hr>
								<br><br>
								{!! Form::close()!!}
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
