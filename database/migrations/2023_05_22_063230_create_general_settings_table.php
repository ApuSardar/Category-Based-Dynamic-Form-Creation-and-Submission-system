<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('company_name')->nullable();
            $table->string('alter_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('alter_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('about_bg')->nullable();
            $table->string('service_bg')->nullable();
            $table->string('project_bg')->nullable();
            $table->string('contact_bg')->nullable();
            $table->string('favicon')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('copyright_text')->nullable();
            $table->string('location_image')->nullable();
            $table->string('phone_image')->nullable();
            $table->string('email_image')->nullable();
            $table->string('watch_image')->nullable();
            $table->string('open_day')->nullable();
            $table->string('open_day_time')->nullable();
            $table->string('close_day')->nullable();
            $table->longText('about_description')->nullable();
            $table->longText('footer_description')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
};
