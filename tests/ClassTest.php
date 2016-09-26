<?php

namespace Parziphal\WorldData\Test;

use PHPUnit_Framework_TestCase;
use Parziphal\WorldData\Languages;
use Parziphal\WorldData\Countries;

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
        $countries = Countries::get(['name' => 'nombre']);

        $this->assertSame(247, count($countries));
        $this->assertSame('Peru', $countries[173]['nombre']);
    }
}
