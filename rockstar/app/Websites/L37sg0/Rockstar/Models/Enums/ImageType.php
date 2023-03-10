<?php

namespace L37sg0\Rockstar\Models\Enums;

enum ImageType: int
{
    case Null = 0;
    case Home = 1;
    case Band = 2;
    case Contact = 3;
    case Favicon = 4;
}
