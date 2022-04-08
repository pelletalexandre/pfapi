@extends('layouts.backoffice.main')


@section('content')
    
    
<?php

//includeFormMacro ();


?>  
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">[add_item]  <a href="{{ route ('[item_pluriel].index') }}" class="pull-right">Retour</a></div>
                <p></p>
                <div class="panel-body">
                
                    <div class="error-list">
                        @include ( 'errors.list' )  
                   </div>
                
                    
                    <form method="post"  action="{{route ( '[item_pluriel].store' ) }}" "enctype"="multipart/form-data">
                        @include ( 'admin.[item_singulier].form', [ 'submitButtonText' => "Créer [item_article_defini]" ])                    
                    </form>
                    
                    
                   
                       
                
                </div>
            </div>
        </div>
    </div>
@endsection
