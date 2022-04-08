@extends('layouts.backoffice.main')


@section('content')
    
 
<?php 

//dump(\Request::route()->getName());

//dump(json_encode($countries));
?>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">LISTE DES AEROPORTS<a class="pull-right" href="{{route('aeroports.create')}}">Ajouter un aéroport</a></div><!--/aeroports/create-->
                <p></p>
                <div class="panel-body">
                
                    <div>Filtres
                        <form id="frm_filtre" action="" >
                            <select name="filtre_continent" id="filtre_continent" >
                                <option value="-1">Filtrer par continent</option>
                                @foreach ( $continents as $continent ) 
                                <option>{{$continent}}</option>
                                @endforeach
                            </select>


                            <!-- <select name="filtre_pays" id="filtre_pays" >
                                <option value="-1">Filtrer par pays</option>
                                @foreach ( $countries as $country ) 
                                <option>{{$country}}</option>
                                @endforeach
                            </select> -->

                            <label>Pays </label><input type="text" name="filtre_pays" id="filtre_pays" value="" />
                            <input type="hidden" id="filtre_pays_iso" name="filtre_pays_iso" value="-1" />

                            <label>Nom </label><input type="text" name="filtre_nom" id="filtre_nom" value="" />

                            <label>Actif </label><input type="checkbox" name="filtre_actif" id="filtre_actif" value="1" checked="{{ "checked" }}" />

                            <input type="hidden" name="sort" value="{{$request->get('sort')}}" />
                            <input type="hidden" name="order" value="{{$request->get('order')}}" />

                            <button type="submit">Filtrer</button>
                        </form>
                    </div>

                    
                    <table class="table table-striped table-hover">
                    
                    <thead>
                        <th>@sortablelink('local_code', 'Code local')</th>
                        <th>@sortablelink('iata_code', 'Code IATA')</th>
                        <th>@sortablelink('name', 'Libellé')</th>
                        <th>Libellé BIS</th>
                        <th>@sortablelink('iso_country', 'Pays')</th>
                        <th>@sortablelink('continent', 'Continent')</th>
                        <th>@sortablelink('actif', 'Actif')</th>
                        <th>@sortablelink('nb_reservation', 'Reservations')</th>
                        <th>@sortablelink('nb_search', 'Recherches')</th>
                        <th></th>
                    </thead>
                    <tbody> 
                    
                    @foreach ( $aeroports as $object )
                    <?php //dump($object); ?>
                        <tr>
                            <td>{{$object->local_code}}</td>                                
                            <td>{{$object->iata_code}}</td>                                
                            <td>{{$object->name}}</td>
                            <td>{{$object->name_bis}}</td>
                            <td>{{$object->iso_country}}</td>
                            <td>{{$object->continent}}</td>
                            <td>{{$object->actif}}</td>
                            <td>{{$object->nb_reservation}}</td>
                            <td>{{$object->nb_search}}</td>
                            
                            <td style="float:right;">
                                <form action="{{ route ('aeroports.destroy', $object->id) }}" method="POST" id="frm-{{$object->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="{{ route ('aeroports.edit', $object->id) }}" >Modifier</a><!--/aeroports/{{$object->id}}/edit-->
                                <!-- <a href="javascript:deleteObject({{$object->id}})">Supprimer</a> -->
                            </td>

                           
                        </tr>
                        
                    @endforeach
                    </tbody>
                    </table>

                    {{
                        $aeroports->appends([

                            'filtre_continent'     =>$request->get('filtre_continent') ,
                            'filtre_pays'     =>$request->get('filtre_pays') ,
                            'filtre_actif'     =>$request->get('filtre_actif') ,
                            'sort'     =>$request->get('sort') ,
                            'order'     =>$request->get('order')  
                        ])->links()
                    }}
                
                  
                </div>
                    
                   
            </div>
        </div>
</div>

<script>

var countries = eval ( {!!$countries !!});


    function deleteObject(object_id)
    {
        if ( window.confirm ( "Souhaitez-vous réelement supprimer l'aéroport?" ) )
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
        jQuery('#frm-search-aeroport').submit();
    }

*/
var src = "{{route('ajax_admin_aeroport')}}"; //Ajouter les doubles accolades pour activer

//var src = "{{route('aeroports.index')}}";


$(document).ready ( function ()
{
    //var countries = [];
        
    

    $( "#filtre_pays" ).autocomplete({
      minLength: 0,
      source: countries,
      delay: 100,
      focus: function( event, ui ) {
        $( "#filtre_pays" ).val( ui.item.label );
        return false;
      },
      select: function( event, ui ) {
        $( "#filtre_pays" ).val( ui.item.label );
        $( "#filtre_pays_iso" ).val( ui.item.value );
        //$( "#filtre_pays-description" ).html( ui.item.desc );
        //$( "#filtre_pays-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) 
    {
        console.log (item);
      return $( "<li>" )
        .append( "<div>" + item.label + " - " + item.value + "</div>" )
        .appendTo( ul ); 
    };

        $( "#filtre_nom" ).autocomplete(
        {
            source: function(request, response) 
            {
                $.ajax(
                {
                    url: src,
                    method: 'get',
                    dataType: "json",
                    data: {
                        filtre_nom : request.term,
                        sort: '{{$request->sort}}',
                        order: '{{$request->get('order', '')}}',
                        filtre_continent: $('#filtre_continent').val(),
                        filtre_pays: $('#filtre_pays_iso').val(),
                        filtre_actif: jQuery('#filtre_actif').prop('checked')==true?1:0
                        
                        
                    },
                    success: function(data) 
                    {
                        console.log ( data );
                        //response(data);                    
                    }                    
                });
            },
            minLength: 3,
            select ( event, ui )
            {
                console.log(ui.item.id);
                //$('#search-libelle-id').val ( ui.item.id );
            }
        });
    });
</script>

@endsection
