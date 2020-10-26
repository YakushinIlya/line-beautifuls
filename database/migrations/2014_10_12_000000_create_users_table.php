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
            $table->string('name');
            $table->string('email_job')->nullable();
            $table->string('phone_job')->nullable();
            $table->string('skype_job')->nullable();
            $table->string('telegram_job')->nullable();
            $table->string('viber_job')->nullable();
            $table->string('whatsapp_job')->nullable();
            $table->string('vk_job')->nullable();
            $table->string('ok_job')->nullable();
            $table->string('fb_job')->nullable();
            $table->string('ig_job')->nullable();
            $table->string('yb_job')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
