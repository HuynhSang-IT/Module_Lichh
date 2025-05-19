<?php
defined('_JEXEC') or die;

class ModCalendarHelper
{
    public static function getCalendar($month = null, $year = null, $timezone = 'UTC')
    {
        $languageMap = [
            'Asia/Ho_Chi_Minh' => 'vi_VN',
            'America/New_York' => 'en_US',
            'Europe/Paris' => 'fr_FR',
            'Asia/Tokyo' => 'ja_JP'
        ];
        $lang = isset($languageMap[$timezone]) ? $languageMap[$timezone] : 'en_US';

        date_default_timezone_set($timezone);

        if (!$month || !$year) {
            $month = date('n');
            $year = date('Y');
        }

        $firstDay = mktime(0, 0, 0, $month, 1, $year);
        $daysInMonth = date('t', $firstDay);
        $startDayOfWeek = (date('w', $firstDay) + 6) % 7;

        $weeks = [];
        $week = array_fill(0, 7, null);
        $dayCounter = 1;

        for ($i = 0; $i < $startDayOfWeek; $i++) {
            $week[$i] = null;
        }

        for ($i = $startDayOfWeek; $i < 7; $i++) {
            $week[$i] = $dayCounter++;
        }
        $weeks[] = $week;

        while ($dayCounter <= $daysInMonth) {
            $week = [];
            for ($i = 0; $i < 7; $i++) {
                $week[$i] = $dayCounter <= $daysInMonth ? $dayCounter++ : null;
            }
            $weeks[] = $week;
        }

        return [
            'month' => (int)$month,
            'year' => (int)$year,
            'days' => $weeks,
            'timezone' => $timezone,
            'lang' => $lang
        ];
    }
}
?>
