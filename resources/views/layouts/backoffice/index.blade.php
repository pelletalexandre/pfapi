@extends('layouts.backoffice.main')



@section('content') 

<div class="row" style="padding-bottom:20px;">
</div>

<div style="display:block;font-weight:bold;font-size:16px;padding:10px;">TITRE</div>


<style>

.boutons-action{
    display: flex;
    align-items: center;
}

.no-border-radius{
    border-radius:0px !important; 
}

@media (min-width:480px){
    .no-padding-left{
        padding-left:0px !important;
    }

    .no-padding-right{
        padding-right:0px !important;
    }
}

@media (max-width:480px){
    .boutons-action{
        justify-content:center;
    }
}

</style>


ACCUEIL

@endsection



@section ('infobox')
@endsection