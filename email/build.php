<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php

require("../requisites.php");
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');




?>
<html lang="ru">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
  <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
  <title>Лучшее для Студентов от учебного центра "<? echo $site_name; ?>"</title>

  <style type="text/css">
    body {
      margin: 0;
      padding: 0;
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    table {
      border-spacing: 0;
    }

    table td {
      border-collapse: collapse;
    }

    .ExternalClass {
      width: 100%;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,
    .ExternalClass td,
    .ExternalClass div {
      line-height: 100%;
    }

    .ReadMsgBody {
      width: 100%;
      background-color: #ebebeb;
    }

    table {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    .yshortcuts a {
      border-bottom: none !important;
    }

    @media screen and (max-width: 599px) {
      .force-row,
      .container {
        width: 100% !important;
        max-width: 100% !important;
      }
    }
    @media screen and (max-width: 400px) {
      .container-padding {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
    }
    .ios-footer a {
      color: #aaaaaa !important;
      text-decoration: underline;
    }

    @media screen and (max-width: 599px) {
      .col {
        width: 100% !important;
        border-top: 1px solid #eee;
        padding-bottom: 0 !important;
      }

      .cols-wrapper {
        padding-top: 18px;
      }

      .img-wrapper {
        float: right;
        max-width: 40% !important;
        height: auto !important;
        margin-left: 12px;
      }

      .subtitle {
        margin-top: 0 !important;
      }
    }
    @media screen and (max-width: 400px) {
      .cols-wrapper {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }

      .content-wrapper {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
    }
  </style>
</head>

<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- 100% background wrapper (grey background) -->
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
  <tr>
    <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">

      <br>

      <!-- 600px container (white background) -->
      <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
        <tr>
          <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:26px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px">
            Учебный центр "<?php echo $site_name; ?>" создан для того, чтобы всячески помогать студентам на нелегком пути к знаниям.
            <br><span style="color: green;">Объявляем скидочный сезон НГ 2017!</span><br>

          </td>
        </tr>
        <tr>
          <td class="content" align="left" style="padding-top:12px;padding-bottom:12px;background-color:#ffffff">

            <table width="600" border="0" cellpadding="0" cellspacing="0" class="force-row" style="width: 600px;">
              <tr>
                <td class="content-wrapper" style="padding-left:24px;padding-right:24px">
                  <br>
                  <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">Учебный центр "<a href=<?php echo $site_url; ?>><? echo $site_name; ?></a>"
                    уже более десяти лет пишет работы по самым разным дисциплинам. Для нас нет практически ничего невозможного.
                    Диплом нужен был еще вчера? Не вопрос! Мы беремся за выполнение даже срочных заказов.<br>
                    Скорее заказывайте работу через форму на нашем портале!</div>
                </td>
              </tr>
              <tr>
                <td class="cols-wrapper" style="padding-left:12px;padding-right:12px">

                  <!--[if mso]>
                  <table border="0" width="576" cellpadding="0" cellspacing="0" style="width: 576px;">
                    <tr><td width="192" style="width: 192px;" valign="top"><![endif]-->


                  <table width="192" border="0" cellpadding="0" cellspacing="0" align="left" class="force-row" style="width: 192px;">
                    <tr>
                      <td class="col" valign="top" style="padding-left:12px;padding-right:12px;padding-top:18px;padding-bottom:12px">
                        <table border="0" cellpadding="0" cellspacing="0" class="img-wrapper">
                          <tr>
                            <td style="padding-bottom:18px"><img src='<?php echo $site_url."/index_files/slider2.jpg"; ?>' border="0" alt="aкция Три Цeны" width="168" height="110" hspace="0" vspace="0" style="max-width:100%; " class="image"></td>
                          </tr>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td class="subtitle" style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:22px;font-weight:600;color:#2469A0;padding-bottom:6px">Курсoвая</td>
                          </tr>
                        </table>
                        <div class="col-copy" style="font-family:Helvetica, Arial, sans-serif;font-size:13px;line-height:20px;text-align:left;color:#333333">От 1600 руб.<br>
                          К каждому из наших клиентов мы стараемся найти индивидуальный подход и учесть все требования, предъявляемые его вузом.
                          Мы специализируемся на написании не только дипломных проектов, но и рефератов, курсовых работ, диссертаций…
                          И это лишь малая часть наших возможностей!
                          При заказе нескольких работ вы получите приятную скидку.

                        </div>
                        <br>
                      </td>
                    </tr>
                  </table>


                  <!--[if mso]></td><td width="192" style="width: 192px;" valign="top"><![endif]-->


                  <table width="192" border="0" cellpadding="0" cellspacing="0" align="left" class="force-row" style="width: 192px;">
                    <tr>
                      <td class="col" valign="top" style="padding-left:12px;padding-right:12px;padding-top:18px;padding-bottom:12px">
                        <table border="0" cellpadding="0" cellspacing="0" class="img-wrapper">
                          <tr>
                            <td style="padding-bottom:18px"><img src='<?php echo $site_url."/index_files/slider4.jpg"; ?>' width="168" height="110" hspace="0" vspace="0" style="max-width:100%; " class="image"></td>
                          </tr>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td class="subtitle" style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:22px;font-weight:600;color:#2469A0;padding-bottom:6px">Диплoмная</td>
                          </tr>
                        </table>
                        <div class="col-copy" style="font-family:Helvetica, Arial, sans-serif;font-size:13px;line-height:20px;text-align:left;color:#333333">От 4700 руб.<br>
                          Наши авторы - это профессионалы высочайшего уровня, преподаватели ведущих российских вузов.
                          Обращаясь к нам, вы можете быть уверены, что ваша работа будет написана компетентным специалистом.
                          Звоните! Мы работаем 7 дней в неделю с 6.00 до 22.00.
                          Мы любим свое дело и гордимся тем, что делаем его хорошо вот уже более десяти лет.
                        </div>
                        <br>
                      </td>
                    </tr>
                  </table>


                  <!--[if mso]></td><td width="192" style="width: 192px;" valign="top"><![endif]-->


                  <table width="192" border="0" cellpadding="0" cellspacing="0" align="left" class="force-row" style="width: 192px;">
                    <tr>
                      <td class="col" valign="top" style="padding-left:12px;padding-right:12px;padding-top:18px;padding-bottom:12px">
                        <table border="0" cellpadding="0" cellspacing="0" class="img-wrapper">
                          <tr>
                            <td style="padding-bottom:18px"><img src='<?php echo $site_url."/index_files/slider3.jpg"; ?>' border="0" alt="Мы продaeм только yникaльныe рaботы по прaвилy Один Тeкcт В Одни Рyки" width="168" height="110" hspace="0" vspace="0" style="max-width:100%; " class="image"></td>
                          </tr>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td class="subtitle" style="font-family:Helvetica, Arial, sans-serif;font-size:16px;line-height:22px;font-weight:600;color:#2469A0;padding-bottom:6px">Магистерская</td>
                          </tr>
                        </table>
                        <div class="col-copy" style="font-family:Helvetica, Arial, sans-serif;font-size:13px;line-height:20px;text-align:left;color:#333333">От 6750 рублей<br>
                          Мы дорожим нашими заказчиками и стараемся обеспечить каждому всестороннюю поддержку
                          и индивидуальный подход. Вы получите работу, полностью соответствующую требованиям вашего вуза,
                          также мы составим речь для защиты, подготовим презентацию. Мы можем написать работу по множеству направлений: экономика,
                          естественные и гуманитарные науки и т. д.
                        </div>
                        <br>
                      </td>
                    </tr>
                  </table>


                  <!--[if mso]></td></tr></table><![endif]-->

                </td>
              </tr>
              <tr>
                <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px">
                  <a href=<?php echo $site_url."order.php"; ?>>Удобная форма для заказа! Используй!</a><br>
                  Гибкий подход к клиенту - наше кредо.
                </td>
              </tr>
            </table>

          </td>
        </tr>
        <tr>
          <td class="container-padding footer-text" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px">
            <br><br>


            <strong><? echo $site_name; ?></strong><br>

            Наши сотрудники - это преподаватели ведущих российских вузов.
            Многие из них являются кандидатами и докторами наук. Благодаря этому мы можем гарантировать высочайшее качество выполнения работ.
            Когда диплом пишет тот, кто сам регулярно присутствует на защитах и ставит оценки - успех неизбежен!
            Мы работаем без предоплаты!
            В состав работы входит:
            доклад на защиту, презентационный материал в Power Point, отзывы (рецензии) и предоставление материала на бумажном и электронных носителях.
            Только при получении на руки работы Вы оплачиваете её стоимость.
            Количество страниц выполненной работы не влияют на стоимость!!!
            Полное сопровождение до защиты и бесплатное исправление работы в рамках утвержденного плана.
            Скидки на выполнение нескольких работ!
            Очевидно, что дипломная работа - это главный итог обучения студента в вузе. Чтобы качественно ее написать, нужно потратить немало времени.
            С современным темпом жизни не у каждого человека это время есть. Мы это прекрасно понимаем!
            <span class="ios-footer">
              <?php echo $adres; ?> <br>

            </span>

              <span class="ios-footer">
              Если даннoе письмо пришло к вам по oшибке, вы можете oтписаться <a href='<?php echo $site_url."otpiska.php"?>' >тут</a>.<br>
            </span>

            © 2007–2016 <a href=<?php echo $site_url; ?> style="color:#aaaaaa"><?php echo $site_url; ?></a><br>

            <br><br>

          </td>
        </tr>
      </table>
      <!--/600px container -->


    </td>
  </tr>
</table>
<!--/100% background wrapper-->

</body>
</html>
