<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // id como bigint unsigned
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->unsignedBigInteger('categoria_id'); // Asegúrate de que sea unsigned
            $table->timestamps();

            // Define la clave foránea
            $table->foreign('categoria_id')
                  ->references('id') // Referencia al campo 'id' en la tabla 'categorias'
                  ->on('categorias') // Nombre correcto de la tabla referenciada
                  ->onDelete('cascade'); // Comportamiento al eliminar
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
