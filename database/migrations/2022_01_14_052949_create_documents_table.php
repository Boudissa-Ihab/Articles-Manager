<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('path');
            $table->text('keywords')->nullable();
            $table->date('accepted_at');
            $table->date('published_at');
            $table->text('description')->nullable();
            $table->unsignedSmallInteger('nb_pages');
            $table->boolean('is_free');
            $table->decimal('price', 6, 2)->default(0);
            $table->string('photo')->nullable();
            $table->boolean('featured');
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
        Schema::dropIfExists('documents');
    }
}
