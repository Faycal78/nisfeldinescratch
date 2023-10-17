<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->integer('age_min');
            $table->integer('age_max');
            $table->string('wilaya');
            $table->boolean('travaille')->default(false);
            $table->boolean('hijab')->default(false);
            $table->boolean('mariage_divorce')->default(false);
            $table->boolean('mariage_enfants')->default(false);
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->string('hair_color');
            $table->string('eye_color');
            $table->string('marital_status');
            $table->integer('children_count');
            $table->boolean('fertility')->default(false);
            $table->string('education_level');
            $table->string('occupation');
            $table->string('employment_type');
            $table->string('monthly_income');
            $table->string('housing');
            $table->boolean('religious_practices')->default(false);
            $table->boolean('chronic_illness')->default(false);
            $table->boolean('disability') ->default(false) ;
            $table->string('email');
            $table->string('password')->default('12345');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
