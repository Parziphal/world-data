<?php

namespace Parziphal\WorldData;

class Languages extends Base
{
    /**
     * @return array
     */
    public static function get(array $fields = [], array $replacements = [])
    {
        return self::filterList(include __DIR__ . '/../data/languages.php', $fields, $replacements);
    }
}
