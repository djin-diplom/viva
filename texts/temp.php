<section class="responses">
    <div><div class="h2">Нас хвалят!</div><a href="consult.php">Смотреть<br>все отзывы</a> 53</div>
    <div><div><b>Елена (ИТМО)</b> <i>17 сентября</i></div>Заказывала свою дипломную работу у компании <?php echo $site_name; ?>, по совету моего однокурсника, так как времени в моем распоряжении очень мало в связи с рождением нового члена нашей семьи. Всё сделали очень грамотно, оформление, стиль и что не может не радовать адекватная цена и то что сделано всё в срок. Забыли только сделать речь для защиты, что была в подарок - пришлось напомнить.</div>
    <div><div><b>Вика (СПБГЭУ)</b> <i>2 сентября</i></div>Нужно было написать отчёт по производственной практике, которую нужно было проходить летом. В этой компании мне помогли, всё выполнили по требованиям, сделали отзыв и дневник также. Спасибо!</div>
    <div><div><b>Анастасия (университет Лесгафта)</b> <i>30 июня</i></div>Добрый день! Хочу сказать автору спасибо за хорошую работу)! Работа была защищена на "отлично"!</div>
</section>
<section class="responses">
    <div><div class="h2">Наши тексты</div><br><a href="got_rab.php">Смотреть</a></div>
    <div><div class="h2">Примеры дипломных, курсовых</div><a href="got_rab.php">Смотреть другие примеры</a><br>
        <?php
        $count = 1+3*($count_text - 1);
        $f = fopen("texts/new_".$count, "r");
        $col_simv = 0;
        while(!feof($f)) {
            $fgets = fgets($f);
            $col = iconv_strlen($fgets);
            $col_simv = $col_simv + $col;
            if ( $col > 2 ) {
                echo $fgets . "<br />";
                if (preg_match('/\n/', $fgets)) {
                    echo "Купить. ";
                }
            }
            if ($col_simv >5000) break;
        }
        fclose($f);
        ?>
        <br><a href="new_<?php echo $count; ?>.php">Читать магистерскую далее</a>
    </div>
    <div><div class="h2">Примеры магистерских, эссе</div><a href="got_rab.php">Смотреть другие примеры</a><br>
        <?php
        $count++;
        $f = fopen("texts/new_".$count, "r");
        $col_simv = 0;
        while(!feof($f)) {
            $fgets = fgets($f);
            $col = iconv_strlen($fgets);
            $col_simv = $col_simv + $col;
            if ( $col > 2 ) {
                echo $fgets . "<br />";
                if (preg_match('/\n/', $fgets)) {
                    echo "Купить. ";
                }
            }
            if ($col_simv >5000) break;
        }
        fclose($f);
        ?>
        <br><a href="new_<?php echo $count; ?>.php">Читать курсовую далее</a>
        </div>
    <div><div class="h2">Примеры рефератов и статей</div><a href="got_rab.php">Смотреть другие примеры</a><br>
        <?php
        $count++;
        $f = fopen("texts/new_".$count, "r");
        $col_simv = 0;
        while(!feof($f)) {
            $fgets = fgets($f);
            $col = iconv_strlen($fgets);
            $col_simv = $col_simv + $col;
            if ( $col > 2 ) {
                echo $fgets . "<br />";
                if (preg_match('/\n/', $fgets)) {
                    echo "Купить. ";
                }
            }
            if ($col_simv >5000) break;
        }
        fclose($f);
        ?>
        <br><a href="new_<?php echo $count; ?>.php">Читать диплом далее</a>
        </div>

</section>