<?php

namespace ddeshar\convertthaidate;

class ThaiDateConverter
{
    /**
     * Returns an array of month names for the specified language
     *
     * @param string $language The language code
     *
     * @return array
     */
    public static function getMonthNames($language)
    {
        switch ($language) {
            case 'th':
                return [
                    "", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
                ];
                break;
            case 'en':
                return [
                    "", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
                ];
                break;
            default:
                return [];
        }
    }

    /**
     * Converts a date string to Thai date format
     *
     * @param string $strDate The date string
     * @param string $language The language code (th or en)
     * @param bool $includeTime Whether to include time in the output
     * @param string $dateFormat The date format to use (dd/mm/yyyy, mm/dd/yyyy, yyyy-mm-dd)
     *
     * @return string
     */
    public static function convert($strDate, $language, $includeTime = true, $dateFormat = 'dd/mm/yyyy')
    {
        // Get the year
        $strYear = date("Y", strtotime($strDate));

        // Add 543 to the year if the language is Thai
        if ($language == 'th') {
            $strYear += 543;
        }

        // Get the month, day, hour, and minute
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));

        // Get the month name for the specified language
        $strMonthCut = self::getMonthNames($language);
        $strMonthName = $strMonthCut[$strMonth];

        // Format the date based on the specified format
        switch ($dateFormat) {
            case 'dd/mm/yyyy':
                $date = "$strDay/$strMonthName/$strYear";
                break;
            case 'mm/dd/yyyy':
                $date = "$strMonthName/$strDay/$strYear";
                break;
            default:
                $date = "$strYear-$strMonthName-$strDay";
        }

        // If includeTime is true, add the time to the output
        if ($includeTime) {
            $date .= ", $strHour:$strMinute";
        }

        return $date;
    }
}

