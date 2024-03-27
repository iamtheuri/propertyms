<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('name')->nullable();
            $table->string('owner')->nullable();
            $table->integer('units')->nullable();
            $table->string('description')->nullable();
            $table->string('location')->nullable();
            $table->integer('till')->nullable();
        });

        Schema::create('property_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'property');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('property_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'property');
        });

        Schema::create('property_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'property');
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_revisions');
        Schema::dropIfExists('property_translations');
        Schema::dropIfExists('property_slugs');
        Schema::dropIfExists('properties');
    }
};
