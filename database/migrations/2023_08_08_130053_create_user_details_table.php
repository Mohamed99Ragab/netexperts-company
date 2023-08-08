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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('Cascade');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('Cascade');
            $table->double('sallery')->default(0);
            $table->double('bones')->default(0);
            $table->double('minus')->default(0);
            $table->string('phone')->unique();
            $table->enum('work_status',['remotly','on_site','hyprid'])->default('on_site');
            $table->string('national_id')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('bank_account_image')->nullable();
            $table->string('image')->nullable();
            $table->string('contract_image')->nullable();
            $table->string('national_id_image')->nullable();
            $table->string('website_url')->nullable();
            $table->date('join_date');
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
        Schema::dropIfExists('user_details');
    }
};
