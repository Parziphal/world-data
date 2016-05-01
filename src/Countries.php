<?php

namespace Parziphal\WorldData;

class Countries extends Base
{
    /**
     * @return array
     */
    public static function get(array $fields = [], array $replacements = [])
    {
        return self::filterList(include __DIR__ . '/../data/countries.php', $fields, $replacements);
    }
}
