<?php

namespace L37sg0\Rockstar\Models;

use L37sg0\Rockstar\Models\Enums\ImageType;
use L37sg0\Rockstar\Models\Enums\SocialLinkType;
use L37sg0\Rockstar\Models\Enums\UrlType;

interface UrlStaticData
{
    public const TABLE_NAME = 'urls';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_TYPE = 'type';
    public const FIELD_SUBTYPE_IMAGE = 'subtype_image';
    public const FIELD_SUBTYPE_SOCIAL = 'subtype_social';
    public const FIELD_URL = 'url';

    public const FILLABLE = [
        self::FIELD_TYPE,
        self::FIELD_SUBTYPE_IMAGE,
        self::FIELD_SUBTYPE_SOCIAL,
        self::FIELD_URL
    ];

    public const CASTS = [
        self::FIELD_TYPE => UrlType::class,
        self::FIELD_SUBTYPE_IMAGE => ImageType::class,
        self::FIELD_SUBTYPE_SOCIAL => SocialLinkType::class
    ];

}
