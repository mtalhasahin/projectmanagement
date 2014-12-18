<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
                                  $table->string('nameusername')->unique();
                                  $table->string('email')->unique();
                                  $table->string('password');
                                  $table->integer('is_active');
                                  $table->integer('yetki');
                                  $table->rememberToken();
                                  $table->softDeletes();
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
		Schema::drop('users');
	}

}
