<?php

namespace ddeshar\convertthaidate;

class FormatTimeConverter
{
    /**
     * Converts the given number of seconds into a formatted time string in the format of hh:mm
     *
     * @param int $t The number of seconds to convert
     * @param string $f The separator for hours and minutes (defaults to ':')
     *
     * @return string The formatted time string
     */
    public static function format_time($t, $f = ':')
    {
        // Setting the format for the result time string
        $format = '%02d:%02d';

        // Calculating the total number of minutes and hours
        $minutes = round($t / 60);
        $hours = floor($minutes / 60);

        // Calculating the remaining minutes after hours have been subtracted
        $remainMinutes = ($minutes % 60);

        // Returning the formatted time string
        return sprintf($format, $hours, $remainMinutes);
    }

    /**
     * Converts a given timestamp into a human-readable string indicating the time elapsed since that timestamp
     *
     * @param string $timestamp The timestamp to convert
     *
     * @return string The human-readable elapsed time string
     */
    public static function time_ago($timestamp)
    {
        // Set the default timezone
        date_default_timezone_set('Asia/Bangkok');

        // Calculate the difference between the current time and the timestamp
        $time_ago = strtotime($timestamp);
        $current_time = time();
        $time_difference = $current_time - $time_ago;

        // Calculate the elapsed time in various units
        $seconds = $time_difference;
        $minutes = round($seconds / 60);
        $hours = round($seconds / 3600);
        $days = round($seconds / 86400);
        $weeks = round($seconds / 604800);
        $months = round($seconds / 2629440);
        $years = round($seconds / 31553280);

        // This code checks the difference between the current time and the given timestamp
        // and returns a string indicating the time difference in a human-readable format
        if ($seconds <= 60) {
            // If the difference is less than or equal to 60 seconds, return "Just Now"
            return "Just Now";
        } elseif ($minutes <= 60) {
            // If the difference is less than or equal to 60 minutes, return the number of minutes
            // along with "minutes ago"
            return $minutes == 1 ? "one minute ago" : "$minutes minutes ago";
        } elseif ($hours <= 24) {
            // If the difference is less than or equal to 24 hours, return the number of hours
            // along with "hrs ago"
            return $hours == 1 ? "an hour ago" : "$hours hrs ago";
        } elseif ($days <= 7) {
            // If the difference is less than or equal to 7 days, return the number of days
            // along with "days ago"
            return $days == 1 ? "yesterday" : "$days days ago";
        } elseif ($weeks <= 4.3) {
            // If the difference is less than or equal to 4.3 weeks (52/12), return the number of weeks
            // along with "weeks ago"
            return $weeks == 1 ? "a week ago" : "$weeks weeks ago";
        } elseif ($months <= 12) {
            // If the difference is less than or equal to 12 months, return the number of months
            // along with "months ago"
            return $months == 1 ? "a month ago" : "$months months ago";
        } else {
            // If the difference is more than 12 months, return the number of years
            // along with "years ago"
            return $years == 1 ? "one year ago" : "$years years ago";
        }
    }
}
