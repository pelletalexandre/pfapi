@extends('layouts.backoffice.main')


@section('content')
    
<?php

//includeFormMacro ();
use App\Http\Controllers\[controller];

?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Editer [item_article_indefini]  <a href="{{ route ('[item_pluriel].index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                   <div class="error-list">
                        @include ( 'errors.list' ) 
                   </div>
                   
                   
                    <?php
                    $object = $[item_singulier];
                    //dump("dans edit");
                    //dump($region);
                    ?>
                    
                    
                    <form method="POST" action="{{ action ([[controller]::class, 'update'], $object->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        
                        {{method_field('PATCH')}}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                                                  
                        @include ( 'admin.[item_singulier].form', [ 'submitButtonText' => "Enregistrer" ])
                    
                       
                    </form>
       
                    
                    
                   
                
                </div>
                    
                   
                
            </div>
        </div>
    </div>
@endsection