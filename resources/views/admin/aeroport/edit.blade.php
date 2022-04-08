@extends('layouts.backoffice.main')


@section('content')
    
<?php

//includeFormMacro ();
use App\Http\Controllers\AeroportController;

?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editer un aéroport  <a href="{{ route ('aeroports.index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                   <div class="error-list">
                        @include ( 'errors.list' ) 
                   </div>
                   
                   
                    <?php
                    $object = $aeroport;
                    //dump("dans edit");
                    //dump($region);
                    ?>
                    
                    
                    <form method="POST" action="{{ action ([AeroportController::class, 'update'], $object->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        
                        {{method_field('PATCH')}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                                                  
                        @include ( 'admin.aeroport.form', [ 'submitButtonText' => "Enregistrer" ])
                    
                       
                    </form>
       
                    
                    
                   
                
                </div>
                    
                   
                
            </div>
        </div>
    </div>
@endsection