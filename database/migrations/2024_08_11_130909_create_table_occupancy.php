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
        Schema::create('occupancy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tipe_kamar");
            $table->foreign("tipe_kamar")->references("id")->on("tipe_kamar");
            $table->date("tgl");
            $table->integer("occupancy");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occupancy');
    }
};
