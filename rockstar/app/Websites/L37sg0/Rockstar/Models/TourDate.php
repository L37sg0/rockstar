<?php

namespace L37sg0\Rockstar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use L37sg0\Rockstar\Models\TourDateStaticData as StaticData;
use Illuminate\Database\Eloquent\Model;

class TourDate extends Model implements StaticData
{
    use HasFactory;

    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
    protected $casts    = self::CASTS;
}
