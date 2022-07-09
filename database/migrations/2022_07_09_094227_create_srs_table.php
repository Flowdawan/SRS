<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->unique();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            
            $table->string('team_1')->nullable();
            $table->string('team_2')->nullable();
            $table->string('team_3')->nullable();

            $table->string('must_1')->nullable();
            $table->string('must_2')->nullable();
            $table->string('must_3')->nullable();

            $table->string('could_1')->nullable();
            $table->string('could_2')->nullable();
            $table->string('could_3')->nullable();

            $table->string('should_1')->nullable();
            $table->string('should_2')->nullable();
            $table->string('should_3')->nullable();

            $table->string('wont_1')->nullable();
            $table->string('wont_2')->nullable();
            $table->string('wont_3')->nullable();

            $table->string('scope')->nullable();
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
        Schema::dropIfExists('srs');
    }
}
