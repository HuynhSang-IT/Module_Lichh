<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$month = isset($_GET['month']) ? (int)$_GET['month'] : null;
$year = isset($_GET['year']) ? (int)$_GET['year'] : null;
$timezone = isset($_GET['timezone']) ? $_GET['timezone'] : 'UTC';

if ($month < 1) {
    $month = 12;
    $year--;
} elseif ($month > 12) {
    $month = 1;
    $year++;
}

$calendar = ModCalendarHelper::getCalendar($month, $year, $timezone);
require JModuleHelper::getLayoutPath('mod_calendar', 'default');
?>
