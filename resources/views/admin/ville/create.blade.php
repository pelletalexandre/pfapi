@extends('layouts.backoffice.main')


@section('content')
    
    
<?php

//includeFormMacro ();


?>  
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter une ville  <a href="{{ route ('villes.index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                    <div class="error-list">
                        @include ( 'errors.list' )  
                   </div>
                
                    
                    <form method="post"  action="{{route ( 'villes.store' ) }}" "enctype"="multipart/form-data">
                        @include ( 'admin.ville.form', [ 'submitButtonText' => "Créer la ville" ])                    
                    </form>
                    
                    
                   
                       
                
                </div>
            </div>
        </div>
    </div>
@endsection
