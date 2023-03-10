<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use L37sg0\Rockstar\Models\Url as Model;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->tinyInteger(Model::FIELD_TYPE);
            $table->tinyInteger(Model::FIELD_SUBTYPE_IMAGE)->default(0);
            $table->tinyInteger(Model::FIELD_SUBTYPE_SOCIAL)->default(0);
            $table->string(Model::FIELD_URL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(Model::TABLE_NAME);
    }
};
