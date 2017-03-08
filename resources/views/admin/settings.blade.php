@extends('layout')

@section('content')

<div class="container-fluid">
	
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@include('partials/success')
		</div>
	</div>

	<h2>Administración de la plataforma</h2>
	
	<div class="row">
        <div class="col-md-6">
        	<div class="panel panel-primary">
				<div class="panel-heading"> <h4>Acciones participativas</h4> </div>
	    		<ul class="list-group">
	    			<strong>
		    			<a href="{{ route('settings/create-action') }}" class="list-group-item">@lang('admin.create_action') <span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span> </a>
						<a href="" class="list-group-item">Opcion 2 <span class="pull-right glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
						<a href="" class="list-group-item">Opcion 3 <span class="pull-right glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
					</strong>
	    		</ul>
		  	</div>
        </div>
        <div class="col-md-6">
        	<div class="panel panel-primary">
				<div class="panel-heading"> <h4>Usuarios</h4> </div>
		    	<ul class="list-group">
		    		<strong>
		    			<a href="" class="list-group-item">Opcion 1 <span class="pull-right glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
						<a href="" class="list-group-item">Opcion 2 <span class="pull-right glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
						<a href="" class="list-group-item">Opcion 3 <span class="pull-right glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
					</strong>
	    		</ul>
		  	</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        	<div class="panel panel-primary">
        		<div class="panel-heading"><h4>Estadísticas</h4></div>
        		<div class="panel-body">
        			<div class="row">
        				<div class="col-md-8">
        					<img class="img-responsive" src="http://placehold.it/700x400" alt="...">
        					<hr>
        				</div>
        				<div class="col-md-4">
    						<img class="img-responsive" src="http://placehold.it/400x210" alt="...">
    						<hr>
    						<img class="img-responsive" src="http://placehold.it/400x210" alt="...">
    						<hr>
        				</div>
        			</div>
	        	</div>
        	</div>
        </div>
    </div>

</div>

@endsection