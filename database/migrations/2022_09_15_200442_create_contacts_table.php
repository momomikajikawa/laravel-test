<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->varchar('name',255)->nullable(false);
            $table->tinyint('gender')->nullable(false);;
            $table->varchar('email',255)->nullable(false);
            $table->char('postcode',8)->nullable(false);
            $table->varchar('address',255)->nullable(false);
            $table->varchar('building',255);
            $table->text('opinion')->nullable(false);
            $table->string('contents');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
