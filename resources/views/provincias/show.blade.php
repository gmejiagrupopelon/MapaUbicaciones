@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
					<h3>Provincia {{$provincia->nombre}}</h3>
				</div>
            </div>
        </div>
    </div>
</div>
@stop