<?php

namespace L37sg0\Rockstar\Models;

use L37sg0\Rockstar\Models\Enums\AttributeType;

interface AttributeStaticData
{
    public const TABLE_NAME = 'attributes';

    public const FIELD_ID = 'id';
    public const FIELD_CREATED_AT = 'created_at';
    public const FIELD_UPDATED_AT = 'updated_at';

    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    public const FILLABLE = [
        self::FIELD_TYPE,
        self::FIELD_VALUE
    ];

    public const CASTS = [
        self::FIELD_TYPE => AttributeType::class
    ];

}
