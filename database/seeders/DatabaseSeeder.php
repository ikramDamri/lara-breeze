<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Agriculteur, Employe, Intervention, Parcelle, Tarif};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);

        Agriculteur::insert([
            ['Agr_Nom' => 'Dulhac', 'Agr_Prn' => 'Anne_Marie', 'Agr_Resid' =>'Arg_Arith'],
            ['Agr_Nom' => 'Martoz', 'Arg_Prn' => 'Christian', 'Agr_Resid' =>'Montargy'],
        ]);

        Parcelle::insert([
            ['Par_Prop'=> 1, 'Par_Nom' => 'Le Pré au Vente', 'Par_Lieu' => 'Arith', 'Par_Superficie' => 350],
            ['Par_Prop'=> 2, 'Par_Nom' => 'Le grand Verger', 'Par_Lieu' => 'Arith', 'Par_Superficie' => 300],
        ]);

        Tarif::insert([
            ['Tar_Euro' => '60', 'Tar_Description' => 'mi-temps'],
            ['Tar_Euro' => '110', 'Tar_Description' => 'normal'],
        ]);

        Employe::insert([
            ['Emp_Tarif'=> 'mi-temps', 'Emp_Nss' => '165070', 'Emp_Nom' => 'Pernet', 'Emp_Prn' => 'Henri'],
            ['Emp_Tarif'=> 'normal', 'Emp_Nss' => '175070', 'Emp_Nom' => 'Grandet', 'Emp_Prn' => 'Marc'],
        ]);

        Intervention::insert([
            ['Int_Emp_Nss'=> '165070', 'Int_Par_Id' => 1, 'Int_Debut' => '2011-12-14', 'Int_Nb_Jours' => 5],
            ['Int_Emp_Nss'=> '175070', 'Int_Par_Id' => 2, 'Int_Debut' => '2011-01-10', 'Int_Nb_Jours' => 3],
        ]);

    }
}
