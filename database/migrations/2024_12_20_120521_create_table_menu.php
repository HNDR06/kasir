<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('menu', function (Blueprint $table) {
      $table->id();
      $table->string('namamenu');
      $table->string('gambarmenu');
      $table->string('deskripsi');
      $table->string('kategori');
      $table->decimal('harga', 8, 2);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('menu');
  }
};
