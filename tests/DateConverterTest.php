<?php

require_once 'src/DateConverter.php';

namespace ddeshar\convertthaidate\Tests;

use ddeshar\convertthaidate\DateConverter;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Assert;

class DateConverterTest extends TestCase
{
    public function testDateTimeThai()
    {
        $date = '2022-01-01';
        $expected = '1 ม.ค. 2565, 00:00';
        $this->assertEquals($expected, DateConverter::DateTimeThai($date));
    }

    public function testFormatTime()
    {
        $time = 180;  //180 seconds  (3 minutes)  (3*60)  (180)  //   3 minutes  (3*60)   (180 seconds)   // 180 seconds (3 minutes) (3*60)  // 3 minutes (3*60 seconds) (180 seconds)   // 3 minutes (180 seconds) (3*60 )     // 180 seconds(3 minutes)(3*60 )     // 3 minutes(180 seconds)(3*60 )     // 3 minutes(3*60 seconds)(180 )      // 180seconds( 3minutes)( 3*60 )     // 3minutes( 180seconds)( 3*60 )   // 3minutes( 3*60seconds)( 180 )      // 180seconds( 3minutes)( 3*60 )      

        $expected = '03:00';

        $this->assertEquals($expected, DateConverter::format_time($time));
    }
}
