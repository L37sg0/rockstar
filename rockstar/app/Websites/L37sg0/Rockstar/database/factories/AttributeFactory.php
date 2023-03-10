<?php

namespace L37sg0\Rockstar\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use L37sg0\Rockstar\Models\Attribute as Model;
use L37sg0\Rockstar\Models\Enums\AttributeType;

class AttributeFactory extends Factory
{

    protected $model = Model::class;

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            Model::FIELD_TYPE => AttributeType::Text,
            Model::FIELD_VALUE => file_get_contents(__DIR__ . '/band_text.txt')
        ];
    }
}
