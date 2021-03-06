@extends('layout')

@section('content')

<section class="gray">
	<div class="jumbotron">
		<div class="container-fluid">
			<div class="row">
				<div class="col col-md-6 col-md-offset-3">
					<h2>Editar comentario</h2>
					Publicado en <a href="{{route('proposal', $comment->proposal->id)}}">{{$comment->proposal->title}}</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-md-6 col-md-offset-3">
				<form role="form" method="POST" action="{{route('comment.update', $comment->id)}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="PUT">

					<div class="form-group">
						<textarea class="form-control" rows="5" name="comment" required>{{$comment->comment}}</textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" style="margin-right: 15px;">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


@endsection