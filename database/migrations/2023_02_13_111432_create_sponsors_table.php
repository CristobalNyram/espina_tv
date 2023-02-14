<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug',25);
            $table->string('description')->nullable();
            $table->string('time_support')->nullable();
            $table->string('logo_img')->nullable();
            $table->string('phone_number',20)->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('status',2)->default(2);

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
        Schema::dropIfExists('sponsors');
    }
}
