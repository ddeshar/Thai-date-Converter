<?php

namespace ddeshar\convertthaidate;

use PHPUnit\Framework\TestCase;

class ThaiDateConverterTest extends TestCase
{
    public function testConvert()
    {
        $date = '2022-12-31 12:00:00';
        $expectedDate = '31/ธ.ค./2565, 12:00';

        $actualDate = ThaiDateConverter::convert($date, 'th', true, 'dd/mm/yyyy');

        $this->assertEquals($expectedDate, $actualDate);
    }

    public function testGetMonthNames()
    {
        $expectedMonthNames = [
            "", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
        ];

        $actualMonthNames = ThaiDateConverter::getMonthNames('th');

        $this->assertEquals($expectedMonthNames, $actualMonthNames);
    }
}
