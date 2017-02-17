<?php
// DateTime
$date = new DateTime;
var_dump($date);

echo $date->format('dS M Y') . '<br>';

echo $date->getTimeStamp() . '<br>';

echo $date->getTimezone()->getName() . '<br>';

$dateString = '2016-11-16';
$date2 = DateTime::createFromFormat('Y-m-d', $dateString);
echo $date2->format('dS M Y') . '<br>';

$date3 = new DateTime;
$date3->setTimestamp('627212738');
echo $date3->format('dS M Y') . '<br>';

$date4 = new DateTime;
$date4->setDate(2016, 11, 16);
$date4->setTime(12, 30, 30);
var_dump($date4);

// Modifying
$date5 = new DateTime;
$date5->add(new DateInterval('P10DT2H')); // Add 10 days and 2 hours.
var_dump($date5);

$date6 = new DateTime('+2 days 5 hours');
var_dump($date6);

$date7 = new DateTime;
$date7->setDate(1989, 11, 16);
$date7->modify('+2 days');
var_dump($date7);

$date8 = new DateTime;
$newDate = clone $date8;
$newDate = $newDate->modify('+2 days');
var_dump($newDate);

// Differences
$date9 = new DateTime;
$myBirthday = (new DateTime('16th November'))->setTime(10, 00, 00);
$timeUntilBirthday = $date9->diff($myBirthday);
echo $timeUntilBirthday->format('%m months %d days %h hours') . '<br>';

// Comparisons
$date10 = new DateTime('2016-12-25 12:00:00');
$date11 = new DateTime('2016-12-01');
if ($date10 > $date11) {
    echo 'Yes' . '<br>';
}

if ((int) $date10->format('Y') === 2016) {
    echo 'Yes' . '<br>';
}

// Timezones
    // $date12 = new DateTime;
    // $date12->setTimezone(new DateTimeZone('Europe/London'));
$date12 = new DateTime('now', new DateTimeZone('Europe/Berlin'));
var_dump($date12);

$timezone = 'Europe/Berlin';
date_default_timezone_set($timezone);

$date13 = new DateTime;
var_dump($date13); // Timezone automatically set to Berlin.

// DateTime periods
$start = new DateTime;
$start->setTime(8, 0, 0);

$end = clone $start;
$end->setTime(20, 0, 0);

$interval = new DateInterval('PT30M');

$dateRange = new DatePeriod($start, $interval, $end);

// Useful functions
echo time() . '<br>';
echo microtime(true)  . '<br>';
echo date('d M Y') . '<br>';
var_dump(checkdate(7, 32, 2017)); // Validate a date, returns true of false.

?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Document</title>
    </head>
    <body>
        <select name="time" id="time">
            <?php foreach($dateRange as $date14): ?>
                <option value="<?php echo $date14->format('H:i:s'); ?>"><?php echo $date14->format('H:i:s'); ?></option>
            <?php endforeach; ?>
        </select>
    </body>
</html>
