<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('title',50);
            $table->char('nbr_personne', 150);
            $table->char('type_evenement', 150);
            $table->char('theme_de_l_evenement', 150);

            $table->date('date_debut');
            $table->date('date_fin');
            $table->text('description');
            $table->text('lieux');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
