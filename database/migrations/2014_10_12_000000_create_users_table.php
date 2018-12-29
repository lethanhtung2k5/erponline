<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('profile_code')->nullable();
            $table->string('employee_code')->nullable();
            $table->string('fullname');
            $table->timestamp('birthday')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('cmnd')->nullable();
            $table->integer('regency_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('type_employee_id')->nullable();
            $table->string('password');
            $table->integer('salary')->nullable();
            $table->integer('salary_tax')->nullable();
            $table->float('bhxh')->nullable();
            $table->float('bhyt')->nullable();
            $table->float('bhtn')->nullable();
            $table->integer('status')->nullable();
            $table->integer('isLock')->default('0');
            $table->text('note')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
