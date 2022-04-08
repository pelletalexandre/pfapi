@extends('layouts.backoffice.main')


@section('content')
    
<?php

//includeFormMacro ();
use App\Http\Controllers\CountryController;

?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editer un pays  <a href="{{ route ('pays.index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                   <div class="error-list">
                        @include ( 'errors.list' ) 
                   </div>
                   
                   
                    <?php
                    $object = $pays;
                    //dump("dans edit");
                    //dump($region);
                    ?>
                    
                    
                    <form method="POST" action="{{ action ([CountryController::class, 'update'], $object->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        
                        {{method_field('PATCH')}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                                                  
                        @include ( 'admin.pays.form', [ 'submitButtonText' => "Enregistrer" ])
                    
                       
                    </form>
       
                    
                    
                   
                
                </div>
                    
                   
                
            </div>
        </div>
    </div>
@endsection