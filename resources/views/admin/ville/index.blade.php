@extends('layouts.backoffice.main')


@section('content')
    
 
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des villes<a class="pull-right" href="{{route('villes.create')}}">Ajouter une ville</a></div><!--/villes/create-->
                <p></p>
                <div class="panel-body">
                

                    
                    <table class="table table-striped table-hover">
                    
                    <thead>
                        <th>@sortablelink('id', 'ID')</th>
                        <th>@sortablelink('libelle', 'Libellé')</th>
                        <th></th>
                    </thead>
                    <tbody> 
                    
                    @foreach ( $villes as $object )
                    <?php //dump($object); ?>
                        <tr>
                            <td>{{$object->id}}</td>
                                
                            <td>{{$object->libelle}}</td>
                            
                            <td style="float:right;">
                                <form action="{{ route ('villes.destroy', $object->id) }}" method="POST" id="frm-{{$object->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="{{ route ('villes.edit', $object->id) }}" >Modifier</a> - <!--/villes/{{$object->id}}/edit-->
                                <a href="javascript:deleteObject({{$object->id}})">Supprimer</a>
                            </td>

                           
                        </tr>
                        
                    @endforeach
                    </tbody>
                    </table>

                    {{
                        $villes->appends([

                            'sort'     =>$request->get('sort') ,
                            'order'     =>$request->get('order')  
                        ])->links()
                    }}
                
                  
                </div>
                    
                   
            </div>
        </div>
</div>

<script>
    function deleteObject(object_id)
    {
        if ( window.confirm ( "Souhaitez-vous réelement supprimer la ville?" ) )
        {
            jQuery('#frm-' + object_id).submit ();
        }
    }

    /**
        DECOMMENTER POUR ACTIVER LA RECHERCHE
    */
    /*
    function resetForm ()
    {
        jQuery('#search-libelle').val('');
        jQuery('#search-theme').val('');
        jQuery('#frm-search-ville').submit();
    }

    jQuery(document).ready ( function ()
    {
        src = " route('searchajax') "; //Ajouter les doubles accolades pour activer

        jQuery( "#search-libelle" ).autocomplete(
        {
            source: function(request, response) 
            {
                jQuery.ajax(
                {
                    url: src,
                    dataType: "json",
                    data: {
                        term : request.term,
                        table: encodeURIComponent('App\\Models\\Carto\\City'),
                        field: 'libelle'
                    },
                    success: function(data) 
                    {
                        console.log ( data );
                        response(data);                    
                    }                    
                });
            },
            minLength: 3,
            select ( event, ui )
            {
                console.log(ui.item.id);
                jQuery('#search-libelle-id').val ( ui.item.id );
            }
        });
    });*/
</script>

@endsection
