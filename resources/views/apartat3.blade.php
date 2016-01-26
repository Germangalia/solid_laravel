@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Apartat 3</div>

                    <div class="panel-body">
                        <div class="alert">
                        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        	<strong>Title!</strong> Alert body ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection