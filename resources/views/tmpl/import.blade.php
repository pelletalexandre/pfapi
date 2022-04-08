@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Importer des [item_pluriel]</div>
                <div class="panel-body">

                    <div class="error-list">
                        @include ( 'errors.list' ) 
                    </div>

                    <div class="">
                        
                        {!! Form::open ( [ 'route' => '[item_pluriel].import.create', 'files' => true ] )  !!}
                    
                            {!! Form::file('geojson', ['class' => 'form-control']) !!}


                            <div class="row" style="margin-top:20px">
                                <div class="col-md-4 col-md-offset-4">
                                    {!! Form::submit ( "Importer", ['class'  =>  'form-control btn btn-primary'] ) !!}
                                </div>
                            </div>
                        {!! Form::close()  !!}

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection