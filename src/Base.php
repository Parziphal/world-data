<?php

namespace Parziphal\WorldData;

abstract class Base
{
    /**
     * @return array
     */
    public static function get(array $fields = [], array $replacements = [])
    {
        return self::filterList(include __DIR__ . '/../data/' . static::$fileName . '.php', $fields, $replacements);
    }
    
    /**
     * $fields is an array of the fields that will be returned. Empty value means
     * all fields are returned.
     * $replacements is an array of $oldName => $newName to replace field names.
     *
     * @return array
     */
    protected static function filterList(array $list, array $fields, array $replacements)
    {
        $fields = array_fill_keys($fields, 1);
        
        return array_map(function($row) use ($list, $fields, $replacements) {
            if ($fields) {
                $row = array_intersect_key($row, $fields);
            }
            
            if ($replacements) {
                foreach ($replacements as $oldName => $newName) {
                    $row[$newName] = $row[$oldName];
                    
                    unset($row[$oldName]);
                }
            }
            
            return $row;
        }, $list);
    }
}
