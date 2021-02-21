<?php
$count = 10;
if ($count > 10) {
    echo "count is larger than 10\n";
} elseif ($count === 10) {
    echo "count is 10\n";
} else {
    echo "count is lesser than 10\n";
}

if ($count > 10):
    echo "count is larger than 10\n";
elseif ($count === 10):
    echo "count is 10\n";
else:
    echo "count is lesser than 10\n";
endif;

echo "\n";

while ($count > 0) {
    echo "$count\n";
    $count--;
}

echo "\n";

for ($i = 0; $i < 5; $i++) {
    echo "\$i = $i\n";
}

echo "\n";

for ($i = 0; $i < 5; $i++) {
    if ($i === 3) {
        echo "break\n";
        break;
    }
    echo "\$i = $i\n";
}

echo "\n";

for ($i = 0; $i < 5; $i++) {
    if ($i === 3) {
        echo "continue\n";
        continue;
    }
    echo "\$i = $i\n";
}

echo "\n";

$day = "Sunday";
switch ($day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "$day is Weekday\n";
        break;
    case "Saturday":
    case "Sunday":
        echo "$day is Weekend\n";
        break;
    default:
        echo "$day is not a day of the week\n";
}
