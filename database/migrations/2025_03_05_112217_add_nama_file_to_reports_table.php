<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('reports', function (Blueprint $table) {
        $table->string('nama_file')->after('id'); // Menambahkan nama_file
    });
}

public function down()
{
    Schema::table('reports', function (Blueprint $table) {
        $table->dropColumn('nama_file');
    });
}

};
