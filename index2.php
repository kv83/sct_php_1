<?php
$name = 'IF';
$a = 130;
$b = 100;
$operation ='divide';
$isAvailableCalculation = true;
?>
<doctype html>
    <html>
    <head>
        <title><?= $name ?></title>
    </head>
    <body>
    <? echo "<h2> $name </h2>";?>
    <?php
    if ($operation == 'add' and $isAvailableCalculation) {
        echo 'Суммой чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a+$b;
    }
    if ($operation == 'subtract' and $isAvailableCalculation ) {
        echo 'Результатом вычитания чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a-$b;
    }
    if ($operation == 'multiply' and $isAvailableCalculation) {
        echo 'Произведением чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a*$b;
    }
    if ($operation == 'divide' and $isAvailableCalculation) {
        echo 'Частным чисел a= '. $a . ' и b= ' . $b . ' является число = '. $c=$a/$b;
    }
    ?>
    <form>
        <select>
            <?php if ($operation == 'add' && $isAvailableCalculation) { ?>
                        <option selected value="+"> + </option>
                        <?php
                        }
                        else {?>
                        <option value="+">+</option>
                        <?php
                        }
                        ?>
            <?php if ($operation == 'subtract' and $isAvailableCalculation ){ ?>
                    <option selected value="-">-</option>
                    <?php
                    }
                    else { ?>
                    <option value="-">-</option>
                    <?php
                    }
                    ?>
            <?php if ($operation == 'multiply' and $isAvailableCalculation ) { ?>
                    <option value="*" selected> * </option>
                    <?php
                    }
                    else { ?>
                        <option value="*">*</option>
                    <?php
                    }
                    ?>
            <?php if ($operation == 'divide' and $isAvailableCalculation ) { ?>
                    <option selected value="/">/</option>
                    <?php
                    }
                    else { ?>
                    <option value="/">/</option>
                    <?php
                    }
                    ?>
        </select>
    </form>
    </body>
    </html>

