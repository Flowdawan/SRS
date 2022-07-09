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
        Schema::create('srs', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('team')->nullable();
            $table->string('must')->nullable();
            $table->string('could')->nullable();
            $table->string('should')->nullable();
            $table->string('wont')->nullable();
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
