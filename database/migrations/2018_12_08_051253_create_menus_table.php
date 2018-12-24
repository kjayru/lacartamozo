<<<<<<< Updated upstream
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->decimal('price1',8,2);
            $table->decimal('price2',8,2)->nullable();
            $table->integer('igv');
            $table->string('calories')->nullable();
            $table->integer('cheff')->nullable();
            $table->integer('celiaco')->nullable();
            $table->integer('delivery')->nullable();
            $table->integer('vegetariano')->nullable();
            

            $table->integer('state')->default(1);
           
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->decimal('price1',8,2);
            $table->decimal('price2',8,2)->nullable();
            $table->integer('igv');
            $table->string('calories')->nullable();
            $table->integer('cheff')->nullable();
            $table->integer('celiaco')->nullable();
            $table->integer('delivery')->nullable();
            $table->integer('vegetariano')->nullable();


            $table->integer('state')->default(1);
            $table->unsignedInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}

