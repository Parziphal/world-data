<?php

namespace Parziphal\WorldData\Test;

use PHPUnit_Framework_TestCase;
use Parziphal\WorldData\Languages;

class ClassTest extends PHPUnit_Framework_TestCase
{
    public function testUnfiltered()
    {
        $langs = Languages::get();
        
        $this->assertSame(184, count($langs));
        $this->assertSame('Quechua', $langs[131]['name']);
    }
    
    public function testFiltered()
    {
        $langs = Languages::get(['name'], ['name' => 'nombre']);
        
        $this->assertSame(184, count($langs));
        $this->assertSame('Quechua', $langs[131]['nombre']);
    }
}
