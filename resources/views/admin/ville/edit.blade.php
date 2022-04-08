@extends('layouts.backoffice.main')


@section('content')
    
<?php

//includeFormMacro ();
use App\Http\Controllers\CityController;

?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editer une ville  <a href="{{ route ('villes.index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                   <div class="error-list">
                        @include ( 'errors.list' ) 
                   </div>
                   
                   
                    <?php
                    $object = $ville;
                    //dump("dans edit");
                    //dump($region);
                    ?>
                    
                    
                    <form method="POST" action="{{ action ([CityController::class, 'update'], $object->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        
                        {{method_field('PATCH')}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                                                  
                        @include ( 'admin.ville.form', [ 'submitButtonText' => "Enregistrer" ])
                    
                       
                    </form>
       
                    
                    
                   
                
                </div>
                    
                   
                
            </div>
        </div>
    </div>
@endsection