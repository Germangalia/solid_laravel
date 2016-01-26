@extends('layouts.app')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Apartat1</div>

                    <div class="panel-body">
                        <form action="" method="post" role="form">
                        	<legend>Form Title</legend>
                        
                        	<div class="form-group">
                        		<label for=""></label>
                        		<input type="text" class="form-control" name="" id="" placeholder="Input...">
                        	</div>
                        
                        	
                        
                        	<button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection