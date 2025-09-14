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
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->string('image');
            $table->string('endereco');
            $table->string('city');
            $table->string('slug');
            $table->string('area');
            $table->string('quartos');
            $table->string('banheiros');
            $table->string('garagem');
            $table->longText('desc');
            $table->string('valor');
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imoveis');
    }
};
