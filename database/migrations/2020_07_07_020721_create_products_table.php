<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre', 100)->nullable()->default('text');
            $table->string('slug');
            $table->unsignedbigInteger('category_id');
            $table->bigInteger('cantidad')->unsigne()->default(0);
            $table->decimal('precio_actual', 12, 2)->default(0);
            $table->decimal('precio_anterior', 12, 2)->default(0);
            $table->integer('porcentaje_descuento')->unsigne()->default(0);
            $table->text('descripcion_corta');
            $table->text('descripcion_larga');
            $table->text('especificaciones');
            $table->text('datos_de_interes');
            $table->unsignedbigInteger('visitas')->default(0);
            $table->unsignedbigInteger('ventas')->default(0);
            $table->string('estado');
            $table->char('activo', 2);
            $table->char('sliderprincipal', 2);
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
