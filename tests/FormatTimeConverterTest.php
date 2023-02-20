<?php
use ddeshar\convertthaidate\FormatTimeConverter;
use PHPUnit\Framework\TestCase;

class FormatTimeConverterTest extends TestCase
{
    public function testTimeAgo()
    {
        $time = 31553280;
        $expected = '53 years ago';
        $this->assertSame($expected, FormatTimeConverter::time_ago($time));

        // $currentTime = time();
        // echo "The current time is: " . date('Y-m-d H:i:s', $currentTime);
        // $oneMinuteAgo = $currentTime - 62;
        // $oneHourAgo = $currentTime - 3605;
        // $oneDayAgo = $currentTime - 86340;
        // $oneWeekAgo = $currentTime - 604740;
        // $oneMonthAgo = $currentTime - 2628800;
        // $oneYearAgo = $currentTime - 31536000;
    
        // $this->assertSame('Just Now', FormatTimeConverter::time_ago(date('Y-m-d H:i:s', $currentTime)));
        // $this->assertSame('one minute ago', FormatTimeConverter::time_ago(date('Y-m-d H:i:s', $oneMinuteAgo)));
        // $this->assertSame('1 hr ago', FormatTimeConverter::time_ago(date('Y-m-d H:i:s', $oneHourAgo)));
        // $this->assertSame('1 day ago', FormatTimeConverter::time_ago(date('Y-m-d H:i:s', $oneDayAgo)));
        // $this->assertSame('1 week ago', FormatTimeConverter::time_ago(date('Y-m-d H:i:s', $oneWeekAgo)));
        // $this->assertSame('1 month ago', FormatTimeConverter::time_ago(date('Y-m-d H:i:s', $oneMonthAgo)));
        // $this->assertSame('1 year ago', FormatTimeConverter::time_ago(date('Y-m-d H:i:s', $oneYearAgo)));
    }
}   
