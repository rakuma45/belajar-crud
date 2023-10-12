<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->integer('nomor_induk');
            $table->bigInteger('agama_id')->unsigned();
            $table->date('tgl_lahir');
            $table->string("alamat");


    $table->timestamps();

    $table->foreign('agama_id')->references('id')->on('agamas')

        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};