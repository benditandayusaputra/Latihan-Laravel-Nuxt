<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->char('nip', 15);
            $table->string('nama', 225);
            $table->string('tempat_lahir', 15);
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->char('golongan', 20);
            $table->char('eselon', 20);
            $table->string('jabatan', 50);
            $table->string('tempat_kerja', 225);
            $table->char('agama', 20);
            $table->string('unit_kerja', 225);
            $table->char('no_hp', 15);
            $table->char('npwp', 20);
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
        Schema::dropIfExists('employees');
    }
}
