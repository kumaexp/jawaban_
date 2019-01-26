<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
        $cari = 'ark';
        $text = 'arkademy';

        $occurences = array_intersect_key(
            count_chars($text, 1),
            array_flip(
                array_map('ord', str_split($cari))
            )
        );

        foreach($occurences as $char => $amount) {
            printf("%d %s,&nbsp;\n", $amount, chr($char));
        }
    ?>
</body>
</html>
