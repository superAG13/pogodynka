<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            ['0', '32'],
            ['100', '212'],
            ['-100', '-148'],
            ['0.5','32.9'],
            ['11','51.8'],
            ['84','183.2'],
            ['100.5','212.9'],
            ['-100.5','-148.9'],
            ['45','113'],
            ['67','152.6']
        ];
    }

    /**
     * @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius,$expectedFahrenheit): void
    {
        $measurement = new Measurement();
//        $measurement->setCelsius('0');
//        $this->assertEquals('32', $measurement->getFahrenheit());
//        $measurement->setCelsius('100');
//        $this->assertEquals('212', $measurement->getFahrenheit());
//        $measurement->setCelsius('-100');
//        $this->assertEquals('-148', $measurement->getFahrenheit());
        $measurement->setCelsius($celsius);
        $this->assertEquals($expectedFahrenheit, $measurement->getFahrenheit());
    }
}
