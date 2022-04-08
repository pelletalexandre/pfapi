<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeCrudCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ajout d\'une table thématique';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $this->info ('Avant de commencer, assurez-vous d\'avoir :');
        $this->info ('Créer la table');
        $this->info ('Créer le modèle associé avec la liste des champs');

        $model = $this->ask('Nom du model(ex: FactureItem)');

        //$type_crud = $this->ask('Type d\'objet - Carto / Thematique' );
        //$type_crud = "Thematique\\Vin";
        //$path_crud = str_replace("\\", "/", $type_crud );

        $item_singulier = $this->ask('Nom de l\'item (ex: sous_region) - Singulier / Minuscule');        
        $item_article_defini = $this->ask('Libellé avec article défini (ex: la région)');
        $item_article_indefini = $this->ask('Libellé avec article indéfini (ex: une région)');
        
        
        /*$model = "FactureItem";
        $type_crud = "Factures";
        $item_singulier = "facture_item";
        $item_article_defini = "l'élément de facture";
        $item_article_indefini = "un élément de facture";
        */

        $request = $model.'Request';
        $controller = $model."Controller";

        

        //Repertoire des vues
        $rep_view = $item_singulier;

        //Pluriel
        $item_pluriel = $item_singulier;

        //On ajoute un S pour le pluriel
        $last_char = substr($item_singulier, strlen($item_singulier)-1);
        if ( $last_char != 's' )
            $item_pluriel .= 's';

        $list_item = "Liste des ".$item_pluriel;
        $add_item = "Ajouter ".$item_article_indefini;
        
        /*
        //Création du model
        Artisan::call ( 'make:model', [ 'name' => "Models/".$type_crud."/".$model ]) ;

        //Création du controller
        Artisan::call ( 'make:controller', [ 'name' => $type_crud.'/'.$controller, '--model' => "Models/".$type_crud."/".$model ]);

        //Création de la request
        Artisan::call ( 'make:request', [ 'name' => $type_crud.'/'.$request ]);
        */

        //Récupération de la liste des champs de la table (elle doit exister)
        //$tmp_fields = ( \Schema::getColumnListing(app('App\\Models\\'.$type_crud.'\\'. $model)->getTable()) );
        $tmp_fields = ( \Schema::getColumnListing(app('App\\Models'.'\\'. $model)->getTable()) );
        $list_field = [];
        $fields = "";
        $rules = "";
        $messages = "";

        foreach ($tmp_fields as $field )
        {
            if ( $field != "id" && $field != "created_at" && $field != "updated_at" )
            {
                $list_field[] = $field;
                $fields .= $this->printField ( $field );

                $rules .= $this->addRule ( $field ).PHP_EOL;
                $messages .= $this->addMessage ( $field ).PHP_EOL;
            }    
        }
      
        //Création des views

        //Répertoire des views
        $path_view = base_path('resources/views/admin'.'/'.$rep_view);
        //dump( $path_view);
        $path_tmpl = base_path('resources/views/tmpl');
        //Création du répertoire
        if ( !file_exists ($path_view) )
        {
            mkdir ($path_view);
        }
        
        //Les fichiers template
        $list_file = [ 
            'index.blade.php', 
            'create.blade.php', 
            'edit.blade.php', 
            'form.blade.php', 
            'import.blade.php', 
            'import_succes.blade.php',
            'controller.php',
            'request.php' ];

        //On commence les remplacements
        foreach ( $list_file as $file )
        {
            $content = file_get_contents ( $path_tmpl.'/'.$file );

            $content = str_replace ( '[item_singulier]', $item_singulier, $content );
            $content = str_replace ( '[item_pluriel]', $item_pluriel, $content );
            $content = str_replace ( '[list_item]', $list_item, $content );
            $content = str_replace ( '[item_article_defini]', $item_article_defini, $content );
            $content = str_replace ( '[item_article_indefini]', $item_article_indefini, $content );
            $content = str_replace ( '[add_item]', $add_item, $content );
            $content = str_replace ( '[controller]', $controller, $content );
            $content = str_replace ( '[fields]', $fields, $content );
            //$content = str_replace ( '[type_crud]', $type_crud, $content );
            $content = str_replace ( '[model]', $model, $content );

            $content = str_replace ( '[list_rules]', $rules, $content );
            $content = str_replace ( '[list_messages]', $messages, $content );
            

            file_put_contents ( $path_view.'/'.$file, $content );  
            
            if ( $file == "controller.php" )
            {
                //copy ( $path_view.'/'.$file, base_path('app/Http/Controllers/'.$path_crud.'/'.$model.'Controller.php'));
                copy ( $path_view.'/'.$file, base_path('app/Http/Controllers'.'/'.$model.'Controller.php'));
            }
            if ( $file == "request.php" )
            {
                //copy ( $path_view.'/'.$file, base_path('app/Http/Requests/'.$path_crud.'/'.$model.'Request.php'));
                copy ( $path_view.'/'.$file, base_path('app/Http/Requests'.'/'.$model.'Request.php'));
            }
        }

        $this->info ('Pensez à ajouter la route!');
        $this->info ("Route::resource ('/$item_pluriel', '".$model."Controller');");

    }

    protected function addRule ( $field )
    {
        return "'".$field."'           => 'required',";
    }
    protected function addMessage ( $field )
    {
        return "'".$field.".required'           => 'Vous devez renseigner le champ ".$field."',";
    }


    protected function printField ( $id )
    {
        /*return '
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label ( "'.$id.'", "'.ucfirst($id).' : " ) !!}
                    {!! Form::text ( "'.$id.'",  (isset($object)?$object->'.$id.':null) , ["class"=>"form-control"] ) !!}
                </div>
            </div>        
        </div>';*/

        return '
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="'.$id.'">'.ucfirst($id).' : </label>
                    <input type="text" id="'.$id.'" name="'.$id.'" value="{{ (isset($object)?$object->'.$id.':null) }}" class="form-control">
                </div>
            </div>        
        </div>';
    }
}
