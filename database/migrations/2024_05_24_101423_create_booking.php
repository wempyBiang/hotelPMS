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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kamar");
            $table->foreign("kamar")->references("id")->on("kamar");
            $table->string("nama");
            $table->string("alamat");
            $table->boolean("check_in");
            $table->boolean("check_out");
            $table->date("tgl_masuk");
            $table->date("tgl_keluar");
            $table->float("bayar");
            $table->integer("extra_bed");
            $table->string("keterangan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
