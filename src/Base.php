<?php

namespace Parziphal\WorldData;

abstract class Base
{
    /**
     * @return array
     */
    abstract public static function get(array $fields = [], array $replacements = []);
    
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
