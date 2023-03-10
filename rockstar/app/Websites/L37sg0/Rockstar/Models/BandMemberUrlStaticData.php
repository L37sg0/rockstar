<?php

namespace L37sg0\Rockstar\Models;

interface BandMemberUrlStaticData
{
    public const TABLE_NAME = 'band_member_url';

    public const FIELD_BAND_MEMBER_ID = 'band_member_id';
    public const FIELD_URL_ID = 'url_id';

    public const FILLABLE = [
        self::FIELD_BAND_MEMBER_ID,
        self::FIELD_URL_ID
    ];
}
