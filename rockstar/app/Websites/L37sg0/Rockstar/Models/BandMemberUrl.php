<?php

namespace L37sg0\Rockstar\Models;

use Illuminate\Database\Eloquent\Model;
use L37sg0\Rockstar\Models\BandMemberUrlStaticData as StaticData;

class BandMemberUrl extends Model implements StaticData
{
    protected $table    = self::TABLE_NAME;
    protected $fillable = self::FILLABLE;
}
