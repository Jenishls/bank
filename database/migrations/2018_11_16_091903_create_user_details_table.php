<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('user_details', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('gender');
        //     $table->string('age');
        //     $table->string('dept');
        //     $table->string('branch');
        //     $table->string('f_title');
        //     $table->string('c_title');
            // $table->softDeletes();
        
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('user_details');
        Schema::enableForeignKeyConstraints();
    }
}
