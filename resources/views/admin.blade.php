@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@foreach ($posts as $rec)
						<div class="col-sm-12">
							{!! Form::model($rec, ['route' => ['editPost', $rec->id], 'method' => 'post', 'files' => true]) !!}
							<div class="form-group">
								{!! Form::text('title', null, ['class' => 'form-control']) !!}
							</div>
							<div class="form-group">
								{!! Form::textarea('post', null, ['class' => 'form-control']) !!}
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
								<button class="btn btn-primary">Guardar</button>
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
@endsection
