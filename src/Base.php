<?php

namespace Parziphal\WorldData;

abstract class Base
{
    /**
     * @return array
     */
    public static function get(array $fieldsAndReplacements = [])
    {
        $list = include __DIR__ . '/../data/' . static::$fileName . '.php';

        if ($fieldsAndReplacements) {
            $list = self::filterList($list, $fieldsAndReplacements);
        }

        return $list;
    }

    /**
     * $fields is an array of the fields that will be returned. Empty value means
     * all fields are returned.
     * $replacements is an array of $oldName => $newName to replace field names.
     *
     * @return array
     */
    protected static function filterList(array $list, array $fieldsAndReplacements)
    {
        $newList = [];

        foreach ($list as $row) {
            $newRow = [];

            foreach ($fieldsAndReplacements as $field => $repl) {
                if (is_int($field)) {
                    $newRow[$repl] = $row[$repl];
                } else {
                    $newRow[$repl] = $row[$field];
                }
            }

            $newList[] = $newRow;
        }

        return $newList;
    }
}
