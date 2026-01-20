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
        Schema::create('gasto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria_gasto');
            $table->decimal('valor');
            $table->date('data');
            $table->text('descricao');
            $table->timestamps();
            $table->foreign('id_categoria_gasto')
                ->references('id')
                ->on('categoria_gasto')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gasto');
    }
};
