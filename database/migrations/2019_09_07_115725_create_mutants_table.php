<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('beforePicture')->nullable();
            $table->string('afterPicture')->nullable();
            $table->string('email')->unique();
            $table->mediumText('description');
            $table->boolean('is_approved')->default(false);
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
        Schema::dropIfExists('mutants');
    }
}
