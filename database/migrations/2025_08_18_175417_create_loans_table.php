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
        Schema::create('loans', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade'); // peminjam
    $table->foreignId('book_id')->constrained()->onDelete('cascade'); // buku yang dipinjam
    $table->date('loan_date');  // tanggal pinjam
    $table->date('return_date')->nullable(); // tanggal kembali
    $table->enum('status', ['dipinjam', 'dikembalikan'])->default('dipinjam');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
