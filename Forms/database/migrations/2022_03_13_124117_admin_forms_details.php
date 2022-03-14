<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminFormsDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_forms_details', function (Blueprint $table) {
            $table->id();
            $table->string('formname', 200);
            $table->string('questiontypelabel',200);
            $table->text('questiontypevalue');
            $table->text('option1');
            $table->text('option2');
            $table->text('option3');
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
        //
    }
}
