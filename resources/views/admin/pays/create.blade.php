@extends('layouts.backoffice.main')


@section('content')
    
    
<?php

//includeFormMacro ();


?>  
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un pays  <a href="{{ route ('pays.index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                    <div class="error-list">
                        @include ( 'errors.list' )  
                   </div>
                
                    
                    <form method="post"  action="{{route ( 'pays.store' ) }}" "enctype"="multipart/form-data">
                        @include ( 'admin.pays.form', [ 'submitButtonText' => "Créer le pays" ])                    
                    </form>
                    
                    
                   
                       
                
                </div>
            </div>
        </div>
    </div>
@endsection
