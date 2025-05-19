<?php
defined('_JEXEC') or die;

setlocale(LC_TIME, $calendar['lang']);
$timestamp = mktime(0, 0, 0, $calendar['month'], 1, $calendar['year']);
$monthYear = strftime('%B / %Y', $timestamp);
$dayHeaders = [];

for ($i = 1; $i <= 7; $i++) {
    $dayHeaders[] = strftime('%a', strtotime("Sunday +$i days"));
}
?>

<link rel="stylesheet" href="modules/mod_calendar/css/calendar.css">

<div class="calendar-module">
    <h3>Lịch</h3>
    <form id="calendar-form" method="get">
        <label for="timezone">Chọn múi giờ:</label>
        <select name="timezone" id="timezone" onchange="document.getElementById('calendar-form').submit();">
            <?php foreach (DateTimeZone::listIdentifiers() as $tz): ?>
                <option value="<?= $tz ?>" <?= $tz == $calendar['timezone'] ? 'selected' : '' ?>><?= $tz ?></option>
            <?php endforeach; ?>
        </select>
        <input type="hidden" name="month" value="<?= $calendar['month'] ?>">
        <input type="hidden" name="year" value="<?= $calendar['year'] ?>">
    </form>

    <div class="calendar-header">
        <a class="nav-button" href="?month=<?= $calendar['month'] - 1 ?>&year=<?= $calendar['year'] ?>&timezone=<?= $calendar['timezone'] ?>">← Tháng trước</a>
        <strong><?= $monthYear ?></strong>
        <a class="nav-button" href="?month=<?= $calendar['month'] + 1 ?>&year=<?= $calendar['year'] ?>&timezone=<?= $calendar['timezone'] ?>">Tháng sau →</a>
    </div>

    <table class="calendar-table">
        <thead>
            <tr>
                <?php foreach ($dayHeaders as $day): ?>
                    <th><?= $day ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calendar['days'] as $week): ?>
                <tr>
                    <?php foreach ($week as $day): ?>
                        <?php
$isToday = $day &&
    date('j') == $day &&
    date('n') == $calendar['month'] &&
    date('Y') == $calendar['year'] &&
    date_default_timezone_set($calendar['timezone']);

$classes = [];
if (!$day) {
    $classes[] = 'empty';
}
if ($isToday) {
    $classes[] = 'today';
}
?>
<td class="<?= implode(' ', $classes) ?>">
    <?= $day ? "$day<br><small>" . str_pad($calendar['month'], 2, '0', STR_PAD_LEFT) . "/$day</small>" : '&nbsp;' ?>
</td>

                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="timezone-info">Múi giờ hiện tại: <strong><?= $calendar['timezone'] ?></strong></div>
</div>
