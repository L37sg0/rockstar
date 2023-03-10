<?php

use App\Models\Globals;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use L37sg0\Rockstar\Models\BandMember;
use L37sg0\Rockstar\Models\BandMemberUrl as Model;
use L37sg0\Rockstar\Models\Url;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(Model::TABLE_NAME, function (Blueprint $table) {
            $table->foreignId(Model::FIELD_BAND_MEMBER_ID)
                ->constrained(BandMember::TABLE_NAME)->onDelete(Globals::ON_DELETE_CASCADE);
            $table->foreignId(Model::FIELD_URL_ID)
                ->constrained(Url::TABLE_NAME)->onDelete(Globals::ON_DELETE_CASCADE);
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
