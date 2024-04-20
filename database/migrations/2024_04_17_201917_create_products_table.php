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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->decimal('precio', 10, 2); // Utilizo decimal para almacenar valores monetarios
            $table->decimal('costo', 10, 2); // Utilizo decimal para almacenar valores monetarios
            $table->integer('cantidad');
            $table->enum('estado', ['nuevo', 'usado']); // Utilizo un tipo enum para limitar los valores posibles
            $table->text('descripcion')->nullable(); // Campo de descripción, puede ser nulo
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
