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
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('role');
            $table->string('email')->unique();
            $table->string('telephone')->unique();
            $table->text('photo_path')->nullable();
            $table->string('password');
            $table->foreignId('entreprise_id')
                ->constrained()
                ->onDelete('cascade');
            $table->enum('statut',[0,1]); // 0=pas enligne; 1=en ligne
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
