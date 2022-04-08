<?php
 
//namespace App\Helpers;

//use Collective\Html\FormFacade; 

function includeFormMacro ( )
{ 
        //dump('ixi');
        
        Form::macro ( 'taxonomy_select', function ( $data, $id, $default_value, $placeholder='', $multiple=false, $size=5  )
        {
            $arr_item = array ();
            foreach ($data as $one )
            {
                $arr_item [ $one->id ] = $one->libelle;
            }
        
                $params = ['class'=>'form-control', 'size'=>$size];
                if ( $placeholder != '' )
                        $params['placeholder'] = $placeholder;
                        
                if ( $multiple == true )
                        $params['multiple'] = 'multiple';
                
            $html = Form::select (  $id.($multiple==true?'[]':''), $arr_item, $default_value, $params);
            return $html;
        });

        Form::macro ( 'select_table', function ( $data, $field, $id, $default_value, $placeholder  )
        {
                
            $arr_item = array ();
            foreach ($data as $one )
            {
                //echo('for');
                //dd($one);
                $arr_item [ $one->id ] = $one->{$field};
            }
        
            $html = Form::select (  $id, $arr_item, $default_value, ['class'=>'form-control', 'placeholder'=>$placeholder]);
            return $html;
        });
        
        Form::macro ( 'select_table_translatable', function ( $arr_item, $field, $id, $default_value, $placeholder  )
        {

            $html = Form::select (  $id, $arr_item, $default_value, ['class'=>'form-control', 'placeholder'=>$placeholder]);
            return $html;
        });
        
        Form::macro ( 'radio_group_enum', function ( $id, $data, $val )
        {
                
                $html = '<style>
                ul.form_radio_group{list-style:none;}
                ul.form_radio_group li input{ margin-right:12px; }
                </style>';
                
                $html .= "<ul class='form_radio_group'>";
                foreach ( $data as $key => $value )
                {
                        $html .= '<li>'.Form::radio ( $id, $key, (($val == $key)?true:false) );
                        $html .= Form::label ( 'statut', $value ) .'</li>';
                        

                }
                return '</ul>'.$html;
        });
        
        
        Form::macro ( 'taxonomy_select_enum', function ( $data, $id, $default_value, $placeholder='', $multiple=false, $size=3  )
        {
            $arr_item = array ();
            foreach ( $data as $key => $value )
            {
                $arr_item [ $key ] = $value;
            }
        
                $params = ['class'=>'form-control', 'size'=>$size];
                if ( $placeholder != '' )
                        $params['placeholder'] = $placeholder;
                if ( $multiple == true )
                        $params['multiple'] = 'multiple';
        
            $html = Form::select (  $id.($multiple==true?'[]':''), $arr_item, $default_value, $params);
            return $html;
        });
        

        Form::macro ('enum', function ( $id, $enum, $default_value, $params )
        {                
                $arr_item = array ();
                foreach ( $enum as $key=>$value )
                {                  
                    $arr_item [ $key ] = $value;
                }

                //$params = ['class'=>'form-control'];
                return Form::select (  $id, $arr_item, $default_value, $params);
        });
                
        Form::macro ( 'displayMedia', function ( $type_object, $object_id, $medias, $title, $multiple=false )
        {  
                $url = URL::to('/admin');
                
                $html = '<div class="container-fluid">';
                if ( $title != "" )
                        $html .= '<label>'.$title.' :</label>';

                $html .= '<div class="row">';
    
                 foreach ($medias as $media)
                 {
                        $html .= '<div class="col-md-4 col-sm-4" data-document="'.$media->id.'">';
                        $html .= '<div class="media-block">';
                        
                        
                        //Ancienne version
                        //$html .= '<a class="button-delete-document" href="javascript:deleteMediable(\''.$url.'\',\''.$type_object.'\','.$object_id.','.$media->id.')">Supprimer</a>';

                        //url: https://bootsnipp.com/snippets/featured/bootstrap-snipp-for-datatable
                        //code avec une modale de confirmation.
                        $button_delete = "";
                        if ( $multiple == true )
                                $button_delete = '<button class="btn btn-danger btn-xs delete" onclick="deleteMediable(\''.$url.'\',\''.$type_object.'\','.$object_id.','.$media->id.'); return false;"><span class="glyphicon glyphicon-trash"></span></button>';

                        $html .= '<a target="media" href="'.$media->getUrl().'">';

                        if ($media->aggregate_type == 'pdf' )
                        {
                                $html .= '<img src="'.URL::asset('img/filetype/pdf.png').'" />';
                                
                        }
                        else if ($media->aggregate_type == 'image' )
                        {
                                /*if ( $media->mime_type == 'image/jpeg' )
                                        $html .= '<img src="'.URL::asset('img/filetype/jpg.png').'" />';     
                                else if ( $media->mime_type == 'image/png' )
                                        $html .= '<img src="'.URL::asset('img/filetype/png.png').'" />';     
                                */
                                $html .= '<img src="'.$media->getUrl().'" />';
                                                           
                        }
                        else if ($media->aggregate_type == 'archive' )
                        {
                                $html .= '<img src="'.URL::asset('img/filetype/zip.png').'" />';
                        }
                        else if ( $media->aggregate_type == 'spreadsheet' )
                        {
                                $html .= '<img src="'.URL::asset('img/filetype/xls.png').'" />';
                        }
                        else if ( $media->aggregate_type == 'document' )
                        {
                                $html .= '<img src="'.URL::asset('img/filetype/doc.png').'" />';
                        }
                        else
                        {
                                // TODO: Remove me
                               var_dump($media->aggregate_type); 
                        }
                        $html .= '</a>';

                        $html .= "<br/>";
                        
                        $filename = $media->filename;
                        
                        $html .= '<label>'.$filename.'</label>';
                        $html .= "   ";
                        $html .= $button_delete;
                        
                        
                        $html .= '</div>';
                        $html .= '</div>';
                 }
                 
                 $html .= '</div>';
                 $html .= '</div>';
                 
                 
                 
                 
                 return $html;
        });

        Form::macro ( 'listePhase', function ( $projet_id, $phases ) 
        {
                $url = URL::to('/');
                
                $html = '
                <table class="table table-striped table-hover">
                    <thead>
                        <th style="width:70%;" ></th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>';
                    
                    foreach ( $phases as $phase )
                    {
                        $html .='
                        <tr data-phase="'.$phase->id.'">
                            <td>'.$phase->libelle.'</td>
                            <td>
                                <a href="/projets/'.$projet_id.'/phases/'.$phase->id.'/edit" class="btn btn-primary">Modifier</a>
                            </td>

                            <td>                                
                                <button type="button" class="btn btn-primary" onclick=\'deletePhase("'.$url.'",'.$projet_id.','.$phase->id.');\' >Supprimer</button>
                            </td>
                        </tr>';
                        
                    }
                    
                    $html .='
                    </tbody>
                </table>';
                
                
                
                return $html;
        });

        Form::macro ( 'radio_group_oui_non', function ( $label, $id, $value, $attr='' )
        {
                $html = '';

                $html .= '<div class=""><!--form-control-->
                                <input type="radio" name="'.$id.'" value="1" id="'.$id.'_1" '.(($value==1)?"checked=\"checked\"":"") .' '.$attr.'/><label class="label-radio" for="'.$id.'_1">Oui</label>
                                <input type="radio" name="'.$id.'" value="0" id="'.$id.'_0" '.(($value==0)?'checked="checked"':'') .' '.$attr.'/><label class="label-radio" for="'.$id.'_0">Non</label>
                            </div>';
 
                return $html.'';
        });

        Form::macro ( 'radio_group', function ( $data, $id, $value, $attr='' )
        {

                $html = '';

                $html .= '<div class=""><!--form-control-->';
                foreach ( $data as $ind=>$item)                
                {
                        $html .= '<input type="radio" name="'.$id.'" value="'.$ind.'" id="'.$id.'_'.$ind.'" '.(($value==$ind)?"checked=\"checked\"":"") .' '.$attr.'/><label class="label-radio" for="'.$id.'_'.$ind.'">'.$item.'</label>';
                }
                
                /*'<input type="radio" name="'.$id.'" value="1" id="'.$id.'_1" '.(($value==1)?"checked=\"checked\"":"") .' '.$attr.'/><label class="label-radio" for="'.$id.'_1">Oui</label>
                                <input type="radio" name="'.$id.'" value="0" id="'.$id.'_0" '.(($value==0)?'checked="checked"':'') .' '.$attr.'/><label class="label-radio" for="'.$id.'_0">Non</label>
                */
                $html .= '</div>';

                return $html.'';
        });


        Form::macro ( 'butinfo', function ( $id ) 
        {
                return "<a href=\"javascript:displayInfo('".$id."')\"><img style=\"width:22px;\" src=\"".asset('admin/img/info.png')."\" /></a>";
        });



        /**
         * Bootstrap Switch
         * par défaut, un checkbox pour gérer le oui non
         * 
         * Le script d'initialisation devra être appellé dans la page
         */
        Form::macro ( 'bootstrap_switch', function ( $id, $value, $text_on="Oui", $text_off='Non', $color_on='success', $color_off='warning', $extra='' ) 
        {
                $checked=($value==1)?'checked="checked"':'';

                $html = '<div class="input-group input-group-append" id="bootstrap_switch-'.$id.'">'.
                '<input type="checkbox" '.$checked.' name="'.$id.'" value="1" id="'.$id.'" data-on-text="'.$text_on.'" data-on-color="'.$color_on.'" data-off-text="'.$text_off.'" data-off-color="'.$color_off.'" '.$extra.' >'.
                '</div>';

                return $html;
        });
        
 
        /**
         * Méthode qui gère l'affichage des messages d'erreur
         * 
         */
        Form::macro ( 'form_error_msg', function ( $errors, $id, $class='form-text text-danger' ) 
        {
                $html = ""; 
                if ($errors->has( $id) )
                        $html = '<small  class="'.$class.'"><strong>'.$errors->first($id).'</strong></small>';
                
                return $html;
        });

        Form::macro ( 'form_etoile_obligatoire', function ( )
        {
                return "<small class='obligatoire'>*</small>";
        });

}
?>