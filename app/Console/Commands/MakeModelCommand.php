<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Artisan;

class MakeModelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:crud-model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Création d'un model à partir d'une table";

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
        $this->info ('Créer la table');

        $table = $this->ask('Nom de la table');
        $model = $this->ask('Nom du model(ex: FactureItem)');

        //On affecte en dur Thematique pour ne pas devoir le saisir à chaque fois
        //$crud = "Thematique";
        //$type_crud = $crud;
        //$path_model = $crud;



        $request = $model.'Request';
        $controller = $model."Controller";

        //Récupération de la liste des champs de la table (elle doit exister)
        $columns = \Schema::getColumnListing($table);

        $fillable = "";

        foreach ($columns as $field )
        {
            if ( $field != "id" && $field != "created_at" && $field != "updated_at" )
            {
                $fillable .= $this->addFillable ( $field );
            }   
        }

        //Répertoire contenant les templates
        $path_tmpl = base_path('resources/views/tmpl');

        
        //Les fichiers template à modifier
        $list_file = [             
            'model.php' 
        ];

        //On commence les remplacements
        foreach ( $list_file as $file )
        {
            $content = file_get_contents ( $path_tmpl.'/'.$file );

            //$content = str_replace ( '[type_crud]', $type_crud, $content );
            $content = str_replace ( '[model]', $model, $content );
            $content = str_replace ( '[table]', $table, $content );
            $content = str_replace ( '[fillable]', $fillable, $content );
            

            if ( $file == "model.php")
            {
                //$file_dest = base_path('app/Models/'.$path_model.'/'.$model.'.php');
                $file_dest = base_path('app/Models'.'/'.$model.'.php');
                file_put_contents ( $file_dest, $content );  
            }
            
            
        }

       
        

    }

    protected function addFillable ( $field )
    {
        return "'$field',".PHP_EOL;
    }
    

    
}
