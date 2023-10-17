<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inscription_femme', function (Blueprint $table) {
           
                        $table->id();
                        $table->string('user_id');
                        $table->string('age_range');
                        $table->string('province');
                        $table->string('current_residence')->default(false);
                        $table->string('housing_type');
                        $table->string('marry_stranger');
                        $table->string('marry_divorced')->default(false);
                        $table->string('marry_with_children');
                        $table->string('country');
                        $table->string('age');
                        $table->string('height');
                        $table->string('weight');
                        $table->string('hair_color');
                        $table->string('eye_color');
                        $table->string('marital_status');
                        $table->string('children_count');
                        $table->string('fertility')->default(false);
                        $table->string('education_level');
                        $table->string('occupation');
                        $table->string('current_residence_after_marriage')->default(false);;
                        $table->string('work_after_marriage')->default(false);
                        $table->string('wearing_hijab_now')->default(false);
                        $table->string('will_wear_hijab_future')->default(false);
                        $table->string('practicing_religious_rituals');
                        $table->string('chronic_illness');
                        $table->string('disability')->default(false);
                        $table->string('phone_number');
                        $table->string('email')->unique();
                        $table->string('password')->default('null');      ;
                        $table->timestamps();
                  
            
























        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscription_femme');
    }
};
