<?php

namespace ddeshar\convertthaidate;

class DateConverter
{
    public static function DateTimeThai($strDate)
    {
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strMonthCut = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
        $strMonthThai = $strMonthCut[$strMonth];

        return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
    }

    public static function format_time($t, $f = ':')
    {
        $format = '%02d:%02d';
        $minutes = round($t / 60);
        $hours = floor($minutes / 60);
        $remainMinutes = ($minutes % 60);

        return sprintf($format, $hours, $remainMinutes);
    }
}
