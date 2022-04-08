@extends('layouts.backoffice.main')


@section('content')
    
    
<?php

//includeFormMacro ();


?>  
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un aéroport  <a href="{{ route ('aeroports.index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                    <div class="error-list">
                        @include ( 'errors.list' )  
                   </div>
                
                    
                    <form method="post"  action="{{route ( 'aeroports.store' ) }}" "enctype"="multipart/form-data">
                        @include ( 'admin.aeroport.form', [ 'submitButtonText' => "Créer l'aéroport" ])                    
                    </form>
                    
                    
                   
                       
                
                </div>
            </div>
        </div>
    </div>
@endsection
