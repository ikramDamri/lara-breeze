<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->string('Int_Emp_Nss');
            $table->bigInteger('Int_Par_Id')->unsigned();
            $table->date('Int_Debut');
            $table->integer('Int_Nb_Jours');
            $table->foreign('Int_Emp_Nss')->references('Emp_Nss')->on('employes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Int_Par_Id')->references('id')->on('parcelles')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
}
