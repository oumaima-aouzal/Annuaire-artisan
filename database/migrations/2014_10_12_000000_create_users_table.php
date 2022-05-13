<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            // $table->string('name');
            // $table->string('prenom')->nullable();
            // $table->string('nom_societe')->nullable();
            // $table->string('tel1')->nullable();
            // $table->string('tel2')->nullable();
            // $table->string('fix')->nullable();
            // $table->string('email');
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->string('adress')->nullable();
            // $table->string('logo')->nullable();
            // $table->string('facebook')->nullable();
            // $table->string('linkdin')->nullable();
            // $table->string('instagram')->nullable();
            // $table->string('google')->nullable();
            // $table->string('siteweb')->nullable();
            // $table->string('description')->nullable();
            // $table->time('heure_debut')->nullable();
            // $table->time('heure_fin')->nullable();
            // $table->boolean('jours')->nullable();
            // $table->integer('code_postal')->nullable();
            // $table->integer('ville')->nullable();
            // $table->integer('categorie')->nullable();
            // $table->integer('specialite')->nullable();
            // $table->integer('departement')->nullable();
            // $table->tinyInteger('role_as')->default('0'); //Add in UserTable before timestamps
            // $table->rememberToken();
            // $table->timestamps();

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('prenom');
            $table->string('tel');
            $table->string('nom_societe');
            $table->string('tel2');
            $table->string('Fix');
            $table->string('seret');
            $table->string('code_naf');
            $table->string('libelle');
            $table->tinyInteger('role_as')->default('0');
            $table->timestamp('email_verified_at');
            $table->string('adress')->nullable();
            $table->string('logo');
            $table->string('facebook')->nullable();
            $table->string('linkdin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('google')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('description')->nullable();
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->boolean('Semaine')->nullable();
            $table->boolean('jours')->nullable();
            $table->integer('code_postal')->nullable();
            $table->string('ville')->nullable();
            $table->integer('ville2')->nullable();
            $table->integer('categorie')->nullable();
            $table->integer('specialite')->nullable();
            $table->integer('departement')->nullable();
            $table->timestamps();
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
