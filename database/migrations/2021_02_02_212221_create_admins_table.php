<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('brand')->nullable();
            $table->string('category')->nullable();
            $table->string('service')->nullable();
            $table->string('coupons')->nullable();
            $table->string('shipping')->nullable();
            $table->string('blog')->nullable();
            $table->string('setting')->nullable();
            $table->string('complainbooking')->nullable();
            $table->string('review')->nullable();
            $table->string('bookings')->nullable();
            $table->string('stock')->nullable();
            $table->string('reports')->nullable();
            $table->string('alluser')->nullable();
            $table->string('adminuserrole')->nullable();
            $table->integer('type')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('admins');
    }
}
