<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('street');
            $table->string('housenumber');
            $table->string('zip_code');
            $table->string('residence');
            $table->string('cp_name');
            $table->string('cp_lastname');
            $table->string('cp_insertion');
            $table->string('tele');
            $table->string('tele2');
            $table->string('fax_number');
            $table->string('mail');
            $table->string('banknumber');
            $table->float('balance');
            $table->float('limit');
            $table->string('vat_code');
            $table->tinyInteger('prospect');
            $table->string('ledgerbill');
            $table->tinyInteger('creditworthy')->default(0);
            $table->tinyInteger('bcr')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_customers');
    }
}
