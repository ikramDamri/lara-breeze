<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->string('Emp_Nss', 15)->primary();
            $table->string('Emp_Nom', 30);
            $table->string('Emp_Prn', 30);
            $table->string('Emp_Tarif');
            $table->foreign('Emp_Tarif')
            ->references('Tar_Description')
            ->on('tarifs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('employes');
    }
}
