<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

return new class extends Migration
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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('nik')->nullable();
            $table->string('email')->unique()->nullable();
            /*$table->string('email_verified_at');*/
            $table->string('password');
            /* Users: 0=>User, 1=>Faskes, 2=>ADMIN */
            /*$table->boolean('tos_agreed');*/
            $table->boolean('subscription')->default(0)->nullable();
            $table->string('alamat')->default('N/A' );
            $table->string('mobile')->nullable();
            $table->string('role')->default(0)->nullable();
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
};
