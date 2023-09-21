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
        Schema::create('libros', function (Blueprint $table){
            $table->id();
            $table->string('nombre',length: 60);
            $table->string('autor', length: 60);
            $table->unsignedBigInteger('categoria_id');
            $table->string('img',length: 3000)->default("https://media.istockphoto.com/id/873507500/photo/image-of-open-antique-book-on-wooden-table-with-glitter-overlay.webp?b=1&s=170667a&w=0&k=20&c=mBzy59I9bsnIZovbYsdUWVntwTFpbOAa3TTByYo7lG4=");
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
