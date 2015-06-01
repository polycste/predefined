
<?php
function diverse_array($vector) {
    $result = array();
    foreach($vector as $key1 => $value1)
        foreach($value1 as $key2 => $value2)
            $result[$key2][$key1] = $value2;
    return $result;
}
?>

will transform this:

array(1) {
    ["upload"]=>array(2) {
        ["name"]=>array(2) {
            [0]=>string(9)"file0.txt"
            [1]=>string(9)"file1.txt"
        }
        ["type"]=>array(2) {
            [0]=>string(10)"text/plain"
            [1]=>string(10)"text/html"
        }
    }
}

into:

array(1) {
    ["upload"]=>array(2) {
        [0]=>array(2) {
            ["name"]=>string(9)"file0.txt"
            ["type"]=>string(10)"text/plain"
        },
        [1]=>array(2) {
            ["name"]=>string(9)"file1.txt"
            ["type"]=>string(10)"text/html"
        }
    }
}

just do:
<?php $upload = diverse_array($_FILES["upload"]); ?>