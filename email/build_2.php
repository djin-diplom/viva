<?php


//Выбор названия сайта
$per_site = rand(1, 6);

switch ($per_site){
    case 1: $site_name = $site_name;
        break;
    case 2: $site_name = $site_name_2;
        break;
    case 3: $site_name = $site_name_3;
        break;
    case 4: $site_name = $site_name_4;
        break;
    case 5: $site_name = $site_name_5;
        break;
    case 6: $site_name = $site_name_6;
        break;

}

//Выбор Выполнение по низкой цене

$vibor_let_case = rand(1,10);

switch ($vibor_let_case) {
    case 1:
        $vibor_let = 'В апреле-мае бьём по ценнику.';
        break;
    case 2:
        $vibor_let = 'Весной продаём работы дешевле.';
        break;
    case 3:
        $vibor_let = 'Апрель-май порадуют низкой ценой.';
        break;
    case 4:
        $vibor_let = 'Цены приятно Вас удивят весной.';
        break;
    case 5:
        $vibor_let = 'Низкой оплатой мы облегчаем жизнь.';
        break;
    case 6:
        $vibor_let = 'Стоимость работ подобрела весной.';
        break;
    case 7:
        $vibor_let = 'Быстро сделаем работу, веселые цены.';
        break;
    case 8:
        $vibor_let = 'Экспресс выполнение любых работ.';
        break;
    case 9:
        $vibor_let = 'Привычный ценник - быстрое выполнение.';
        break;
    case 10:
        $vibor_let = 'Работа за пару дней по обычной цене.';
        break;
}


//Без предоплаты

$vibor_akc_case = rand(1,10);

switch ($vibor_akc_case) {
    case 1:
        $vibor_akc = 'Приступаем к выполнению без оплаты.';
        break;
    case 2:
        $vibor_akc = 'Начнём работу совсем без денег.';
        break;
    case 3:
        $vibor_akc = 'Получите часть, не внося оплату.';
        break;
    case 4:
        $vibor_akc = 'При заказе выберете бонусные скидки.';
        break;
    case 5:
        $vibor_akc = 'Автор одарит Вас примерами работ.';
        break;
    case 6:
        $vibor_akc = 'Этой весной получите часть бесплатно!';
        break;
    case 7:
        $vibor_akc = 'Часть работы - и никаких денег.';
        break;
    case 8:
        $vibor_akc = 'Бонусы, подарки, отменяем предоплату.';
        break;
    case 9:
        $vibor_akc = 'Завершилась предоплата: примеры даром.';
        break;
    case 10:
        $vibor_akc = 'В этом году часть работы безвозмездно.';
        break;

}

//Выбор сроков

$sut_kurs = rand(2,5);
$sut_dip = rand(6,11);
$sut_mag = rand(12,16);

//чек + договор

$vibor_pris_case = rand(1,10);

switch ($vibor_pris_case) {
    case 1:
        $vibor_pris = ' действует легально на основании регистрации, вся бухгалтерская кухня соблюдается: договорные 
        отношения, оплатный чек-лист и многое другое. ';
        break;
    case 2:
        $vibor_pris = ' большой отрезок времен помогает всем желающим в написании работ на официальной основе. Публичная 
         оферта даёт нашим Заказчикам належные гарантии. ';
        break;
    case 3:
        $vibor_pris = ' долгие годы оказывает образовательные услуги на официальной основе. В этом нам помогает договор-оферта, 
         который размещен на нашем сайте. ';
        break;
    case 4:
        $vibor_pris = ' соблюдает все пункты, прописанные в заключенных с нашими Заказчиками договорах. Сроки, цена, бесплатные 
         доработки и другие гарантии Вашего успеха в учёбе. ';
        break;
    case 5:
        $vibor_pris = ' никогда не задерживает работы, а если случается исключение - возвращает деньги в полном объеме. В этом 
          нам помогает договорные отношения с нашими Заказчиками. ';
        break;
    case 6:
        $vibor_pris = ' зарегистрирована в реестре компаний СПБ и России. Мы считаем, что только на официальной основе Заказчик может 
         получить качественый сервис. ';
        break;
    case 7:
        $vibor_pris = ' любит подписывать договоры с Заказчиками и соблюдать их. В этом успех нашего дела. Официальные отношения, 
         гарантированные бесплатные доработки и другие бонусы. ';
        break;
    case 8:
        $vibor_pris = ' предлагает официально заключить договор и работать в его рамках. Такой подход даёт нашим Заказчикам 
         гарантию успешной сдачи экзамена и защиты выпускной работы. ';
        break;

    case 9:
        $vibor_pris = ' давно числится в списке публичных компаний России и успешно удовлетворяет потребности Заказчиков. 
         Оказывает весь комплекс услуг, ведёт от заявки до защиты. ';
        break;
    case 10:
        $vibor_pris = ' проводит Заказчика от заполнения формы заказа до успешной сдачи экзамена. Все этапы зафиксированы в договоре, 
        который расположен на нашем сайте. ';
        break;
    
}


//Текст курсовой 2204 поменял

$text_kurs_case = rand(1,10);

switch ($text_kurs_case) {
    case 1:
        $text_kurs = 'Помощь в написании курсовых работ на заказ позволяет сэкономить массу времени и нервов, 
        что особенно актуально, если курсовая работа требуется срочно. В итоге, вы получаете готовую, грамотную, 
        уникальную работу, выполненную настоящим специалистом.
        ';
        break;
    case 2:
        $text_kurs = 'Многие студенты (особенно те, которым это задание нужно выполнить срочно) понимают, что заказать курсовик 
        у профессионалов намного выгоднее в плане экономии времени и сил, чем писать его самому.
        ';
        break;
    case 3:
        $text_kurs = 'Курсовая работа – один из наиболее распространенных студенческих проектов, на которую многим студентам не хватает времени. 
Если у Вас нет времени и возможности заниматься учебными проектами, Вас спасет курсовая работа на заказ в нашей компании.
        ';
        break;
    case 4:
        $text_kurs = 'У нас Вы можете написать курсовые на заказ на любую тему, любой сложности, любого объема, со сносками 
        или без — как Вам угодно. 
        Пока Вы будете отдыхать или заниматься своими делами, мы напишем работу за Вас.
         ';
        break;
    case 5:
        $text_kurs = 'Постарайтесь предоставить максимум информации о Вашей курсовой работе: отметьте все поля в форме, 
        распишите все пожелания к содержанию работы, методические требования, прикрепите к письму методичку или другие имеющиеся материалы. 
        Ведь чем четче вы ставите задачу, тем четче она выполняется, и тем ниже цена.
        ';
        break;
    case 6:
        $text_kurs = 'Курсовая работа - это самостоятельный проект, который выполняется студентом под руководством преподавателя.
        Написание курсовых работ на заказ лучше доверить профессионалам, мы работаем во всех городах России.
        ';
        break;
    case 7:
        $text_kurs = 'В нашей компании заказать курсовую работу недорого – это не сказка, а реальность. 
        Мы не просто помогаем учащимся решить их проблему. 
        Здесь вы получите не только курсовые работы на заказ, но и весь спектр студенческих услуг.
        ';
        break;
    case 8:
        $text_kurs = 'Наш учебный центр готов оказать Вам помощь и предлагает заказать курсовую работу по любой тематике. 
        Выполненная курсовая на заказ нашими специалистами – это гарантия высокого качества работы, 
        глубокого изучения материала и соответствия ее требованиям преподавателей.
        ';
        break;
    case 9:
        $text_kurs = 'Что остается делать студенту, который не может уделить время на то, чтобы самостоятельно написать 
        курсовую работу высокого качества? Выход есть – доверить написание курсовой настоящим профессионалам, 
        работающим на нашем специализированном ресурсе.
       ';
        break;
    case 10:
        $text_kurs = 'Написание курсовой отнимает много времени, которое у студентов есть далеко не всегда. 
        Решить проблему поможет заказ курсовой работы в специализированной компании. Большой штат сотрудников позволяет нам 
        выполнять заказы по любым дисциплинам в максимально короткий срок.
        ';
        break;

}

//Текст дипломной 2204 поменял

$text_dip_case = rand(1,10);

switch ($text_dip_case) {
    case 1:
        $text_dip = 'Если вы хотите написать отличный диплом, вы должны иметь представление о том, что в нем должно быть, 
        на что следует обратить особое внимание. 
        И знать все это нужно еще до начала работы, чтобы с самого начала двигаться в нужном направлении.
        ';
        break;
    case 2:
        $text_dip = 'Вы можете заказать дипломную работу в Екатеринбурге, Перми, Тюмени и других городах России. Наша компания 
        работает с 2009 года, наши офисы находятся во многих крупных городах! 
        Мы гарантируем одинаково высокое качество работы во всех наших офисах!
        ';
        break;
    case 3:
        $text_dip = 'В жизни каждого студента наступает долгожданный момент – защита диплома. Как же представить на суд комиссии 
        интересную и безупречно выполненную работу, не просидев над её созданием сотни бессонных ночей?
        Диплом на заказ — правильный выбор рациональных студентов!
        ';
        break;
    case 4:
        $text_dip = 'Ваш диплом будет выполнен ведущими преподавателями ВУЗов и высококвалифицированными специалистами.
Все Дипломы на заказ — это 100% уникальная современная работа, соответствующая тематике, а наличие даже малейших ошибок попросту исключено;
В случае необходимости в диплом могут быть внесены корректировки и уточнения.
        ';
        break;
    case 5:
        $text_dip = 'Зачастую многие, решившись заказать диплом, сомневаются в конфиденциальности. В свою очередь мы можем 
        Вас успокоить, ведь главный принцип нашей компании – сохранение тайны имени заказчиков. Такой подход позволяет 
        выстраивать доверительные и долгосрочные отношения с Заказчиками.
        ';
        break;
    case 6:
        $text_dip = 'Вы еще сомневаетесь, стоит ли заказать диплом? Тогда свяжитесь с нашими специалистами, и получите ответы 
        на все волнующие Вас вопросы. Мы подробно расскажем 
        обо всех тонкостях и нюансах, о том какую информацию лучше всего предоставить для написания и как будет проходить процесс работы.
        ';
        break;
    case 7:
        $text_dip = 'Наша задача — продумать удобные способы взаимодействия с отдаленными регионами. Независимо от Вашего 
        города проживания или обучения, наша компания с радостью примет заказ 
        диплома в электронном виде, уточнив пожелания, сроки выполнения и методические указания.
        ';
        break;
    case 8:
        $text_dip = 'Проверка всех работ на плагиат, оформление по ГОСТам. Бесплатные доработки в течение месяца, сопровождение 
до защиты. Все работы 100% уникальны. Перед продажей все работы проходят тщательную проверку на оригинальность, полноту раскрытия темы, 
грамотность произведенных расчетов и анализов, сделанных выводов и концепции изложения и подачи материала в целом
        ';
        break;
    case 9:
        $text_dip = 'Мы создаем качественные работы уже 18 лет, средний балл которых - 4,8. Высокопрофессиональные авторы, 
        соблюдение всех правил оформления, объяснение материала. Нам есть, что рассказать вам! Мы – союз авторов,
с душой и старанием поможем вам с написанием курсовой, дипломной и любой другой научной работы.
        ';
        break;
    case 10:
        $text_dip = 'Для того чтобы совершить заказ на диплом, нужно оформить заявку на нашем сайте. Наши менеджеры обсудят 
        с каждым заказчиком особенности работы, которые могут повлиять на цену и срок выполнения. После того, как Ваш заказ 
        будет принят, у Вас останется время на работу, подготовку к экзаменам и личную жизнь, а долгая и рутинная работа останется нам. 
        Мы сделаем Вашу жизнь проще и подарим Вам самое дорогое – Время.
       ';
        break;

}

//Текст магистерской 2204 поменял

$text_mag_case = rand(1,10);

switch ($text_mag_case) {
    case 1:
        $text_mag = 'Авторы компании - опытные преподаватели вузов, большинство из которых являются обладателями ученых степеней. 
        Как итог, полученный диссертационный текст будет представлять собой оригинальную, абсолютно уникальную работу высокого уровня.
Наши профессионалы быстро напишут качественный материал, подходящий для успешной защиты перед комиссией.
        ';
        break;
    case 2:
        $text_mag = 'Запрос оформляется клиентом или прямо на сайте, сохраняется анонимность заказчика. Исполнитель работы 
        подбирается в зависимости от двух параметров - тематики диссертации и сроков её выполнения. Работаем без опозданий, 
        клиент получает свою научную работу в обговоренное время. 
        ';
        break;
    case 3:
        $text_mag = 'Диссертация выполняет квалификационную функцию, т.е. готовится с целью публичной защиты и получения степени магистра. 
        Предложенные нашими авторами новые решения всегда строго аргументированы и критически оценены по 
        сравнению с известными решениями, имеют сведения о фактическом или предлагаемом практическом использовании.
        ';
        break;
    case 4:
        $text_mag = 'Если вам потребовалась магистерская диссертация на заказ – это значит, что вы без пяти минут профессионал и 
        магистр и что до заветных корочек вам осталось буквально два шага. В нашей студии можно заказать магистерскую диссертацию, 
        которая будет новой, актуальной, соответствующей требованиям Вашего вуза и написанной исключительно для Вас.
        ';
        break;
    case 5:
        $text_mag = 'Разумеется, диссертация должна быть уникальной. Мы дорожим своей репутацией и отвечаем за свою работу – 
        диссертация, заказанная в нашем учебном центре, без проблем пройдет проверку на программе, которую требует ваш вуз.
        Процент уникальности – от 70, а при необходимости и выше.
        ';
        break;
    case 6:
        $text_mag = 'Писать работу такого уровня не только сложно, но это также может занять очень много вашего времени. 
        Если вы не готовы жертвовать своими силами, 
        вы можете купить готовую диссертацию или заказать ее у профессионалов, чтобы получить в результате оригинальный текст.
        ';
        break;
    case 7:
        $text_mag = 'Написать магистерскую диссертацию – намного сложнее любой студенческой работы.
Ведь написание магистерской работы требует актуальных исследований и научной новизны. Поэтому разумнее всего заказать магистерскую диссертацию 
в нашей компании.
        ';
        break;
    case 8:
        $text_mag = 'Магистерская диссертация на заказ у наших авторов-преподавателей:
вы экономите свое время, качественная магистерская работа, научная новизна, эффектная презентация, успешная защита. Ура! Вы магистр!
        ';
        break;
    case 9:
        $text_mag = 'В нашей компании Вы имеете возможность написать магистерскую диссертацию на заказ срочно и даже сверхсрочно.
        Для этого мы можем создать группу специалистов, которые исполнят Ваш заказ магистерской диссертации в срок от 3-х дней.
        ';
        break;
    case 10:
        $text_mag = 'Для того, чтобы заказать, или иначе говоря, купить магистерскую диссертацию, у нас существует сразу несколько способов.
Отправить заявку онлайн. Это можно сделать даже ночью. Напишите нам, и мы сами все запишем, что нужно для отличного написания 
магистерской диссертации на заказ.
        ';
        break;
   
}

//Выбор Скидки

$vibor_filial_case = rand(1,10);

switch ($vibor_filial_case) {
    case 1:
        $vibor_filial = 'Мы экономим не на качестве, а на менеджерах.';
        break;
    case 2:
        $vibor_filial = 'Главное - чтобы Заказчик успешно сдал экзамен.';
        break;
    case 3:
        $vibor_filial = 'Информируем обо всех этапах выполнения работы.';
        break;
    case 4:
        $vibor_filial = 'Более 2 месяцев гарантийного срока на тексты.';
        break;
    case 5:
        $vibor_filial = 'Наш центр есть во многих городах России.';
        break;
    case 6:
        $vibor_filial = 'Никогда не срываем сроки, не завышаем цены.';
        break;
    case 7:
        $vibor_filial = 'Заказчики нас любят и ценят - а мы любим их.';
        break;
    case 8:
        $vibor_filial = 'В Вашем распоряжении ряд офисов в России.';
        break;
    case 9:
        $vibor_filial = 'Заказчик - это звучит гордо и благородно.';
        break;
    case 10:
        $vibor_filial = 'Надёжность, успех, качесто - наше кредо.';
        break;
}


//Выбор низа

$vibor_niz_case = rand(1, 10);

switch ($vibor_niz_case) {
    case 1:
        $vibor_niz = 'Наша компания входит в группу компаний в сфере образования «База Знаний».<br> 
        Мы пишем курсовые работы на заказ для студентов всех ВУЗов России.<br>
Курсовые работы на заказ – наша работа, к которой мы относимся со всей ответственностью. <br>
Мы стараемся сделать так, чтобы Вы при получении готовой курсовой работы у нас в офисе чувствовали только радость и облегчение о того, 
что у Вас в руках достойная курсовая работа.<br> 
Без ошибок, строго по теме, оформленная в соответствии со 
всеми правилами и стандартами и выполненная даже немного ранее оговоренного срока.<br>
';
        break;
    case 2:
        $vibor_niz = 'Как мы работаем:<br>
Большой спектр услуг. Наши специалисты берутся за выполнение курсовых, рефератов и дипломных  работ практически по всем 
студенческим и школьным предметам.<br>
Идеально подобранный штат сотрудников. Работы выполняют настоящие профессионалы, которые разбираются в определенном 
предмете не поверхностно. Курсач по экономике, контрольная по сопромату – мы возьмемся практически за всё!<br>
Большой опыт. Авторы работ на протяжении длительного времени выполняют поставленные задачи, и, зачастую, 
знакомы с требованиями конкретных ВУЗов и даже преподавателей.<br>
Необходим отчет по преддипломной практике по определенному предприятию, 
организации? - Мы поможем вам справиться с самой сложной задачей!<br>
';
        break;
    case 3:
        $vibor_niz = 'Наши преимущества и гарантии:<br> 
1 - Индивидуальный подход к каждому заказчику.<br>
2 - Приемлемые цены.<br>
3 - Высокое качество наших работ.<br>
4 - Поэтапная передача материала.<br>
5 - Независимая проверка на плагиат.<br>
6 - Оформление по ГОСТ.<br>
7 - Использование современных источников.<br>
8 - Соблюдение сроков.<br>
9 - Доведение до защиты. Корректировки бесплатно: диплом МБА, дипломные работы и дипломные проекты, 
курсовые работы и курсовые проекты, статьи ВАК и обычные.<br>
10 - Официально зарегистрированная фирма.<br>
11 - Заключаем договор. Офис. Москва и другие города России.<br>
12 - Встречи в удобное для вас время в нашем офис рядом с метро, в том числе и в выходные и праздничные дни,  но не позднее 22 часов.<br>
13 - Конфиденциальность - клиентская информация не выходит за пределы компании ни при каких обстоятельствах.<br>
14 - Срочно!<br>
';
        break;
    case 4:
        $vibor_niz = 'Почему именно наш центр помощи студентам?<br>
Мы являемся одной из самых динамично развивающихся компаний, специализирующихся на помощи в написании различного рода студенческих проектов 
(дипломных работ, курсовых, рефератов, эссе, отчетов по практике, ответов к экзаменационным вопросам и т.п.).<br>
При создании нашего агентства  был выбран путь максимальной прозрачности и максимальной направленности к Клиенту, 
что позволило выйти на новый профессиональный уровень и завоевать большое количество постоянных клиентов.<br>
Наш центр помощи студентов располагает собственной обширной базой исполнителей, что позволяет выполнять заказы самой 
разной направленности и разного уровня сложности.<br>
Наши исполнители - специалисты различного профиля, имеющие большой опыт 
написания студенческих проектов.<br>
В своей работе мы опираемся на ряд принципов, которые позволяют нам профессионально выполнять взятые на себя обязательства 
и с каждым годом увеличивать число наших Клиентов.<br>
        ';
        break;
    case 5:
        $vibor_niz = 'Наша цель - предоставление качественно выполненной работы, максимально удовлетворяющей требованиям 
        Вашим и Вашего научного руководителя. <br>
        При необходимости мы производим бесплатную доработку заказа согласно пожеланиям 
        руководителя, письменно рецензирующими качество предоставленной работы, а также в связи с несоответствием работы изначально 
        указанным в бланке параметрам.<br>
Вы в любой момент можете получить достоверную информацию о состоянии Вашего заказа: для этого достаточно связаться с куратором 
Вашей работы по почте.<br>
        ';
        break;
    case 6:
        $vibor_niz = 'Дорогой студент!<br>
Тебе не хватает времени наслаждаться жизнью в полной мере?<br>
 Ты не успеваешь видеться с друзьями?<br> 
 Тебе надоело в 20-й раз 
переделывать свою работу из-за вредного преподавателя? <br>
Ты проводишь бессонные ночи за учебниками и чувствуешь, что жизнь 
проходит мимо?<br>
 Тогда МЫ – то, что тебе нужно!<br>
Сотрудники нашей компании - высококвалифицированные преподаватели ведущих учебных заведений. <br>
Мы оказываем услуги по написанию 
курсовых работ, дипломов, рефератов, бизнес-планов, отчетов по практике, контрольных работ, ответов на билеты, эссе и т.д.
в области гуманитарных, экономических и технических наук.<br>
 Мы гарантируем в самые короткие сроки написание качественных, 
оригинальных работ, которые проходят проверку на плагиат.<br>
Если сегодня у Вас не готова работа, а завтра зачет или экзамен, 
Вы растеряны и не знаете что делать - 
обратитесь к нам, и мы решим Вашу проблему за столь короткий срок!<br>
        ';
        break;
    case 7:
        $vibor_niz = 'Вы обращаетесь к нам не в первый раз? <br>
        Тогда Вас приятно удивят наши скидки! <br>
        Все доработки мы выполняем совершенно бесплатно, если мы что-то упустили из виду в Вашей работе.<br>
        Для того чтобы с нами сотрудничать, Вам необходимо на сайте заполнить форму заказа. <br>
        Сделать это желательно более детально, указав точную тему работы, название предмета, 
        объем работы, сроки написания, цели и задачи практической части.<br> 
        Все это необходимо для быстрой обработки заказа.<br>
Наши контакты Вы можете посмотреть в соответствующем разделе.<br>
Мы несем полную ответственность за наши обязательства и проходим с Вами весь путь от написания работы до ее защиты! <br>
Нам очень важно мнение каждого клиента. Ваши положительные отзывы - лучшая награда для нас!<br>
        ';
        break;
    case 8:
        $vibor_niz = 'Наша компания рада предложить Вам помощь в таком нелегком и кропотливом труде, как написание студенческих 
заданий. <br>
Нам очень хорошо известно, что такая волокита забирает уйму времени и сил, поэтому мы 
предлагаем дипломную работу, реферат, курсовую на заказ.<br>
В России по всем предметам (литература русская, стратегический менеджмент, реклама и pr, математические методы, логика, 
автомобильная промышленность, информационные технологии, электротехника, история, уголовное право, русский язык, английский, 
химия, информационные системы, менеджмент организации и др.).<br> 
А также отчеты по производственной или преддипломной практике.<br>
Мы выполняем высококачественные оригинальные курсовые работы недорого по различным предметам.<br>
Исключительно на все тексты мы предоставляем гарантию качества.<br>
        ';
        break;
    case 9:
        $vibor_niz = 'Наша компания несет ответственность за КАЧЕСТВО написанных работ, но не за защиту ее перед 
        преподавателем или научным руководителем! <br>
        Рекомендуем Вам не только ознакомиться с материалом работы, но и подробно вникнуть в ее содержание, чтобы быть 
        готовым ответить на вопросы Вашего преподавателя или научного руководителя.<br>
Авторство всех работ составляет от 70% и более при проверке в системе антиплагиат antiplagiat <br>
С предоставлением соответствующего отчета.<br> 
Если Вам необходима проверка работы в другой системе, обговорите это с менеджером до заключения договора.<br>
        ';
        break;
    case 10:
        $vibor_niz = 'В современном обществе без высшего образования любому хорошему специалисту достаточно трудно обеспечить 
себе быстрый и продуктивный карьерный рост.<br>
Довольно часто приходится совмещать трудовую деятельность и учебу, в связи с чем времени на выполнение части заданий или 
на поиск необходимой информации панически не хватает.<br>
Наша компания является зарегистрированным юридическим лицом, которое несет юридическую ответственность 
        за оказание своих услуг, предусмотренную законодательством Российской Федерации.<br>
УДОБСТВО и максимальная простота оформления заказа, своевременность получения работы, а также ГАРАНТИЯ высокого качества - 
главные принципы работы нашей организации.<br>
        ';
        break;
}



$style_1 = rand(3234, 2343).'adfdpt';


function kart_vibor_1 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127046&h=lTlHmiOnTbZ-SgQvxp9-Dg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2NzUyNSZoPUxrREQtMjNnSlFuUGFaX2lIb3hTdGcmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekwyVmpOekF4TTJSbFpqazNObVl3WW1Oak5HUmpPRE16T1RNM04ySmtOV1kxTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127096&h=vxHaE0AcvXqRtPBmeJc-EA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2NzUyNSZoPUxrREQtMjNnSlFuUGFaX2lIb3hTdGcmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekwyVmpOekF4TTJSbFpqazNObVl3WW1Oak5HUmpPRE16T1RNM04ySmtOV1kxTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127144&h=iNgO8ldh58TxYvqsvfb7fA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2NzUyNSZoPUxrREQtMjNnSlFuUGFaX2lIb3hTdGcmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekwyVmpOekF4TTJSbFpqazNObVl3WW1Oak5HUmpPRE16T1RNM04ySmtOV1kxTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127175&h=phTcb1IFkCm9rLswQauNYg&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2NzUyNSZoPUxrREQtMjNnSlFuUGFaX2lIb3hTdGcmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekwyVmpOekF4TTJSbFpqazNObVl3WW1Oak5HUmpPRE16T1RNM04ySmtOV1kxTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127197&h=JBTp9PhYnnxqP8MVVk2exQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2NzUyNSZoPUxrREQtMjNnSlFuUGFaX2lIb3hTdGcmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekwyVmpOekF4TTJSbFpqazNObVl3WW1Oak5HUmpPRE16T1RNM04ySmtOV1kxTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';

    switch ($var) {
        case 1: $var_2 = $img_mail_1;
            break;
        case 2: $var_2 = $img_mail_2;
            break;
        case 3: $var_2 = $img_mail_3;
            break;
        case 4: $var_2 = $img_mail_4;
            break;
        case 5: $var_2 = $img_mail_5;
            break;
    }

return $var_2;
}

function kart_vibor_2 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127046&h=bBiBW9eBUJNM-uvGpAdvWA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2ODE4MSZoPTU4N0I0U1doUVJaRjllTHpuZjBfM2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TXdPV1E0TkRZNE56SmhNV1U0TnpBd016azNOR0poWW1VeFptSmxNbVpoTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127096&h=gE6ZvjRXcy9oWW2pHABUuQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2ODE4MSZoPTU4N0I0U1doUVJaRjllTHpuZjBfM2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TXdPV1E0TkRZNE56SmhNV1U0TnpBd016azNOR0poWW1VeFptSmxNbVpoTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127144&h=Z3ro3DeDXrImTnGLSEqdyQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2ODE4MSZoPTU4N0I0U1doUVJaRjllTHpuZjBfM2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TXdPV1E0TkRZNE56SmhNV1U0TnpBd016azNOR0poWW1VeFptSmxNbVpoTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127175&h=GVyd958fAuMR85bblhbJww&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2ODE4MSZoPTU4N0I0U1doUVJaRjllTHpuZjBfM2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TXdPV1E0TkRZNE56SmhNV1U0TnpBd016azNOR0poWW1VeFptSmxNbVpoTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127197&h=uAc1rgM1AxUq-dX5FKjZgA&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjQlNDBtYWlsLnJ1JmU9MTQ5MTM2ODE4MSZoPTU4N0I0U1doUVJaRjllTHpuZjBfM2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TXdPV1E0TkRZNE56SmhNV1U0TnpBd016azNOR0poWW1VeFptSmxNbVpoTG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';

    switch ($var) {
        case 1: $var_2 = $img_mail_1;
            break;
        case 2: $var_2 = $img_mail_2;
            break;
        case 3: $var_2 = $img_mail_3;
            break;
        case 4: $var_2 = $img_mail_4;
            break;
        case 5: $var_2 = $img_mail_5;
            break;
    }

    return $var_2;
}

function kart_vibor_3 ($var) {
    $img_mail_1 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127046&h=_PwB9nGL6nKHLKLrPV_lOQ&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjMlNDBtYWlsLnJ1JmU9MTQ5MTM2ODM3MCZoPWxyTUo0d3Q5ZFNzQ1VZbjEzUXg3N2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TTVZMkprWVdWa04yWXlNelppTVRoa05tWXpPVFl6T0RCbE5ETTROV1k0TG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_2 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127096&h=BRXDgTnQqEpQjO2GyOIBfw&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjMlNDBtYWlsLnJ1JmU9MTQ5MTM2ODM3MCZoPWxyTUo0d3Q5ZFNzQ1VZbjEzUXg3N2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TTVZMkprWVdWa04yWXlNelppTVRoa05tWXpPVFl6T0RCbE5ETTROV1k0TG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_3 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127144&h=U4E-rThigC03PloHMi-X0w&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjMlNDBtYWlsLnJ1JmU9MTQ5MTM2ODM3MCZoPWxyTUo0d3Q5ZFNzQ1VZbjEzUXg3N2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TTVZMkprWVdWa04yWXlNelppTVRoa05tWXpPVFl6T0RCbE5ETTROV1k0TG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_4 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127175&h=oxq3I8E4X1YtEX3Q-Hye8A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjMlNDBtYWlsLnJ1JmU9MTQ5MTM2ODM3MCZoPWxyTUo0d3Q5ZFNzQ1VZbjEzUXg3N2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TTVZMkprWVdWa04yWXlNelppTVRoa05tWXpPVFl6T0RCbE5ETTROV1k0TG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';
    $img_mail_5 = 'https://proxy.imgsmail.ru/?email=autorvolodin6%40mail.ru&e=1493127197&h=5iIgWyoEKSwvo35UgigM8A&url171=cHJveHkuaW1nc21haWwucnUvP2VtYWlsPWF1dG9ydm9sb2RpbjMlNDBtYWlsLnJ1JmU9MTQ5MTM2ODM3MCZoPWxyTUo0d3Q5ZFNzQ1VZbjEzUXg3N2cmdXJsMTcxPWN6Z3VhRzl6ZEdsdVoydGhjblJwYm05ckxtTnZiUzkxY0d4dllXUnpMMmx0WVdkbGN5OHlNREUzTHpBekx6TTVZMkprWVdWa04yWXlNelppTVRoa05tWXpPVFl6T0RCbE5ETTROV1k0TG1wd1p3fn4maXNfaHR0cHM9MQ~~&is_https=1';

    switch ($var) {
        case 1: $var_2 = $img_mail_1;
            break;
        case 2: $var_2 = $img_mail_2;
            break;
        case 3: $var_2 = $img_mail_3;
            break;
        case 4: $var_2 = $img_mail_4;
            break;
        case 5: $var_2 = $img_mail_5;
            break;
    }

    return $var_2;
}

// Выбор картинок
$kart_1 = rand(1, 1000000)%5+1;
$kart_2 = rand(1, 1000000)%5+1;
$kart_3 = rand(1, 1000000)%5+1;


$kart_1 = kart_vibor_1($kart_1);
$kart_2 = kart_vibor_2($kart_2);
$kart_3 = kart_vibor_3($kart_3);


$arr_img_text = Array("diploma", "sheepskin", "patent", "coursework", "essay", "outline", "study", "experience", " experiment",
    "etude", "study", "essay", "attempt", "try", "effort", "endeavor", "trial", "sketch", "outline", "draft", "drawing", "rough draft",
"try", "sample", "test", "trial", "probe", "article", "paper", "item", "clause", "entry", "contribution",
    "product", "article", "fabric", "brummagem", "job", "make",
"thing", "article", "object", "work", "entity", "shebang",
    "subject", "thing", "object", "matter", "article", "theme", "paragraph", "item", "point", "clause", "station",
"control", "certificate", "evidence", "testimony", "witness", "document", "expose", "subject", "put",
"process", "subordinate", "submit", "subject", "subdue", "subjugate", "conquer",
"topic", "theme", "subject", "text", "chapter", "burden" );

$count_2 = array_rand($arr_img_text, 2);
$temp_arr_img = '';
for($i_2 = 0; $i_2<2; $i_2++){
    $temp_arr_img .= $arr_img_text[$count_2[$i_2]].' ';
}
$img_text_1 = $temp_arr_img;

$count_2 = array_rand($arr_img_text, 2);
$temp_arr_img = '';
for($i_2 = 0; $i_2<2; $i_2++){
    $temp_arr_img .= $arr_img_text[$count_2[$i_2]].' ';
}
$img_text_2 = $temp_arr_img;

$count_2 = array_rand($arr_img_text, 2);
$temp_arr_img = '';
for($i_2 = 0; $i_2<2; $i_2++){
    $temp_arr_img .= $arr_img_text[$count_2[$i_2]].' ';
}
$img_text_3 = $temp_arr_img;


$rand_cg = rand(1,10);

switch ($rand_cg) {
    case 1:
        $rand_color_green = '#298007';
        break;
    case 2:
        $rand_color_green = '#298017';
        break;
    case 3:
        $rand_color_green = '#298107';
        break;
    case 4:
        $rand_color_green = '#299007';
        break;
    case 5:
        $rand_color_green = '#288007';
        break;
    case 6:
        $rand_color_green = '#398007';
        break;
    case 7:
        $rand_color_green = '#298008';
        break;
    case 8:
        $rand_color_green = '#298027';
        break;
    case 9:
        $rand_color_green = '#298207';
        break;
    case 10:
        $rand_color_green = '#198007';
        break;
}

$rand_nom_1 = rand(1,5);

switch ($rand_nom_1) {

    case 1:
        $rand_nom_text_1 = '608';
        break;
    case 2:
        $rand_nom_text_1 = '607';
        break;
    case 3:
        $rand_nom_text_1 = '606';
        break;
    case 4:
        $rand_nom_text_1 = '605';
        break;
    case 5:
        $rand_nom_text_1 = '609';
        break;
}


$rand_nom_2 = rand(1,5);

switch ($rand_nom_2) {

    case 1:
        $rand_nom_text_2 = '183';
        break;
    case 2:
        $rand_nom_text_2 = '182';
        break;
    case 3:
        $rand_nom_text_2 = '184';
        break;
    case 4:
        $rand_nom_text_2 = '185';
        break;
    case 5:
        $rand_nom_text_2 = '181';
        break;
}

$rand_nom_3 = rand(1,8);

switch ($rand_nom_3) {

    case 1:
        $rand_nom_text_3_1 = 'Курсовая';
        $rand_nom_text_3_2 = 'Дипломная';
        $rand_nom_text_3_3 = 'Магистерская';
        break;
    case 2:
        $rand_nom_text_3_1 = 'Курсовой';
        $rand_nom_text_3_2 = 'Диплом';
        $rand_nom_text_3_3 = 'Диссертация';
        break;
    case 3:
        $rand_nom_text_3_1 = 'Курсовая работа';
        $rand_nom_text_3_2 = 'Дипломная работа';
        $rand_nom_text_3_3 = 'Маг. диссертация';
        break;
    case 4:
        $rand_nom_text_3_1 = 'Курсовой проект';
        $rand_nom_text_3_2 = 'Дипломный проект';
        $rand_nom_text_3_3 = 'Диссертация';
        break;
    case 5:
        $rand_nom_text_3_1 = 'Курсовые';
        $rand_nom_text_3_2 = 'Дипломные';
        $rand_nom_text_3_3 = 'Магистерские';
        break;
    case 6:
        $rand_nom_text_3_1 = 'Семестровая';
        $rand_nom_text_3_2 = 'ВКР';
        $rand_nom_text_3_3 = 'Диссер';
        break;
    case 7:
        $rand_nom_text_3_1 = 'Семестр-проект';
        $rand_nom_text_3_2 = 'Выпускная';
        $rand_nom_text_3_3 = 'Магистратура';
        break;
    case 8:
        $rand_nom_text_3_1 = 'Курс';
        $rand_nom_text_3_2 = 'Выпускная работа';
        $rand_nom_text_3_3 = 'Магистер';
        break;
}


$rand_nom_4 = rand(1,5);

switch ($rand_nom_4) {

    case 1:
        $rand_nom_text_4 = 'Сделать заказ';
        break;
    case 2:
        $rand_nom_text_4 = 'Заказать';
        break;
    case 3:
        $rand_nom_text_4 = 'Перейти к заказу';
        break;
    case 4:
        $rand_nom_text_4 = 'Форма заказа';
        break;
    case 5:
        $rand_nom_text_4 = 'Оформить заказы';
        break;
}

$rand_nom_5 = rand(1,5);

switch ($rand_nom_5) {

    case 1:
        $rand_nom_text_5 = 'сделать заказ';
        break;
    case 2:
        $rand_nom_text_5 = 'заказать';
        break;
    case 3:
        $rand_nom_text_5 = 'перейти на сайт';
        break;
    case 4:
        $rand_nom_text_5 = 'форма заказа';
        break;
    case 5:
        $rand_nom_text_5 = 'оформить через портал';
        break;
}

$rand_nom_6 = rand(1,5);

switch ($rand_nom_6) {

    case 1:
        $rand_nom_text_6 = 'Отписка';
        break;
    case 2:
        $rand_nom_text_6 = 'Отказаться от рассылки';
        break;
    case 3:
        $rand_nom_text_6 = 'Отписаться';
        break;
    case 4:
        $rand_nom_text_6 = 'Отписывание';
        break;
    case 5:
        $rand_nom_text_6 = 'Не получать письма';
        break;
}

$rand_nom_7 = rand(1,5);

switch ($rand_nom_7) {

    case 1:
        $rand_nom_text_7 = '2008';
        break;
    case 2:
        $rand_nom_text_7 = '2009';
        break;
    case 3:
        $rand_nom_text_7 = '2010';
        break;
    case 4:
        $rand_nom_text_7 = '2011';
        break;
    case 5:
        $rand_nom_text_7 = '2012';
        break;
}

$rand_nom_8 = rand(1,10);

switch ($rand_nom_8) {
    case 1:
            $rand_nom_text_8 = ' оплата ';
            break;
        case 2:
            $rand_nom_text_8 = ' за ';
            break;
        case 3:
            $rand_nom_text_8 = ' по ';
            break;
        case 4:
            $rand_nom_text_8 = ' от ';
            break;
        case 5:
            $rand_nom_text_8 = ' до ';
            break;
        case 6:
            $rand_nom_text_8 = ' цена ';
            break;
        case 7:
            $rand_nom_text_8 = ' по цене ';
            break;
        case 8:
            $rand_nom_text_8 = ' стоимость ';
            break;
        case 9:
            $rand_nom_text_8 = ' ценой ';
            break;
        case 10:
            $rand_nom_text_8 = ' стоимостью ';
            break;
    }


$rand_nom_9 = rand(1,5);

switch ($rand_nom_9) {

    case 1:
        $rand_nom_text_9 = 'Helvetica, Аrial, sans-serif';
        break;
    case 2:
        $rand_nom_text_9 = 'sans-serif, Helvetica, Аrial';
        break;
    case 3:
        $rand_nom_text_9 = 'Аrial, sans-serif, Helvetica';
        break;
    case 4:
        $rand_nom_text_9 = 'Аrial, Helvetica, sans-serif';
        break;
    case 5:
        $rand_nom_text_9 = 'Helvetica, sans-serif, Аrial';
        break;
}

$rand_nom_10 = rand(1,5);

switch ($rand_nom_10) {

    case 1:
        $rand_nom_text_10 = '22px';
        break;
    case 2:
        $rand_nom_text_10 = '21px';
        break;
    case 3:
        $rand_nom_text_10 = '20px';
        break;
    case 4:
        $rand_nom_text_10 = '23px';
        break;
    case 5:
        $rand_nom_text_10 = '24px';
        break;
}

$rand_nom_11 = rand(1,4);

switch ($rand_nom_11) {

    case 1:
        $rand_nom_text_11 = '163';
        break;
    case 2:
        $rand_nom_text_11 = '164';
        break;
    case 3:
        $rand_nom_text_11 = '162';
        break;
    case 4:
        $rand_nom_text_11 = '161';
        break;
}


$rand_nom_12 = rand(1,3);

switch ($rand_nom_12) {

    case 1:
        $rand_nom_text_12 = '11px';
        break;
    case 2:
        $rand_nom_text_12 = '12px';
        break;
    case 3:
        $rand_nom_text_12 = '10px';
        break;
}

$rand_nom_13 = rand(1,3);

switch ($rand_nom_13) {

    case 1:
        $rand_nom_text_13 = '10px';
        break;
    case 2:
        $rand_nom_text_13 = '11px';
        break;
    case 3:
        $rand_nom_text_13 = '9px';
        break;
}

$rand_nom_14 = rand(1,3);

switch ($rand_nom_14) {

    case 1:
        $rand_nom_text_14 = '15px';
        break;
    case 2:
        $rand_nom_text_14 = '16px';
        break;
    case 3:
        $rand_nom_text_14 = '14px';
        break;
}

$rand_nom_15 = rand(1,3);

switch ($rand_nom_15) {

    case 1:
        $rand_nom_text_15 = '111';
        break;
    case 2:
        $rand_nom_text_15 = '112';
        break;
    case 3:
        $rand_nom_text_15 = '110';
        break;
}


$rand_nom_16 = rand(1,4);

switch ($rand_nom_16) {

    case 1:
        $rand_nom_text_16 = ' р.';
        break;
    case 2:
        $rand_nom_text_16 = ' руб.';
        break;
    case 3:
        $rand_nom_text_16 = ' рублей.';
        break;
    case 4:
        $rand_nom_text_16 = '.';
        break;
}

$rand_nom_17 = rand(1,5);

switch ($rand_nom_17) {

    case 1:
        $rand_nom_text_17 = ' д.';
        break;
    case 2:
        $rand_nom_text_17 = ' дн.';
        break;
    case 3:
        $rand_nom_text_17 = ' с.';
        break;
    case 4:
        $rand_nom_text_17 = ' сут.';
        break;
    case 5:
        $rand_nom_text_17 = ' суток';
        break;
}


$color_rand = rand(0, 9);

$body_2 = '<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <style  type="text/css" > 
    body {
      margin: 0;
      
      padding: 0;
      
      -ms-text-size-adjust: 99%;
      
      -webkit-text-size-adjust: 99%;
    }

    table {
      border-spacing: 0;
    }

    table td {
      border-collapse: collapse;
    }

img { 
      -ms-interpolation-mode: bicubic;
    }


    table {  
      mso-table-lspace: 1pt;      
      mso-table-rspace: 1pt;
    } 
  </style>
 
</head>


<body style="margin:1; padding:1;" bgcolor="#F0F1F'.$color_rand.'" leftmargin="1" topmargin="1" marginwidth="1" marginheight="1">

<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F'.$color_rand.'F1F0">

  <tr>
  
    <td align="center" valign="top" bgcolor="#F0F'.$color_rand.'F0" style="background-color: #F0F1F'.$color_rand.';">

      <br>


   
      <table border="0" width="'.$rand_nom_text_1.'"  cellpadding="0" cellspacing="0"  class="cont'.$style_1.'ain22" style="width: '.$rand_nom_text_1.'px; max-width: 599px">
        <tr>
        
          <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: 25px; font-weight: bold; padding-bottom: 13px; 
          color:#DF47'.$color_rand. '5; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
          
                  <span style="color: '.$rand_color_green.';">' .$name.'! '.$vid_rab.$rand_nom_text_8.$pay.$rand_nom_text_16.'</span><br>
                  
            '.$vibor_let.'
                 <br><span style="color: '.$rand_color_green.';">'.$vibor_akc.'</span><br>
            

          </td>
          
        </tr>
        
        <tr>
        
          <td class="content"  align="left" style=" padding-top: '.$rand_nom_text_12.'; padding-bottom: '.$rand_nom_text_12.'; 
          background-color:  #ffffff">

            <table width="'.$rand_nom_text_1.'" border="0" cellpadding="0" cellspacing="0" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_1.'px;">
            
              <tr>
              
                <td class="con3tent'.$style_1.'w43rapper" style="padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
                
                  <br>
                  
                  
                  <div class="title" style="font-family:'.$rand_nom_text_9.'; font-size: 17px; font-weight: '.$rand_nom_text_1.'; 
                  color: #374'.$color_rand.'52">'.$name.'! 
                  "<a href="'.$site_url.'">'.$site_name.'</a>"
                  '.$vibor_pris.'
                  
                  <a href="'.$site_url.'order.php" >'.$rand_nom_text_4.'</a>
                  
                  </div>
                  
                </td>
                
              </tr>
              
              <tr>
              
                <td class="coo'.$style_1.'332ls-wrapper" style="padding-left: '.$rand_nom_text_12.'; padding-right: '.$rand_nom_text_12.'">

                 


                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                  
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                        
                          <tr>
                          
                            <td style="padding-bottom:'.$rand_nom_text_14.'"><a>
                            
                            <img alt="'.$img_text_1.'" src="'.$kart_1.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" style="max-width:99%;" >
                            
                            </a>
                            
                            </td>
                            
                          </tr>
                          
                        </table>
                        
                        <table >
                        
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #24'.$color_rand.'9A1; padding-bottom:7px">'.$rand_nom_text_3_1.'
                            </td>
                          </tr>
                          
                        </table>
                        
                        <div class="coo'.$style_1.'332l-copy" style="font-family:'.$rand_nom_text_9.'; 
                        font-size: '.$rand_nom_text_12.'; line-height: 21px; text-align: left; color:#3333'.$color_rand.'2">'.$sut_kurs.$rand_nom_text_17.' <br>
                          '.$name.'!<br>'.$text_kurs.'
                          
                          
                        </div>
                        
                        <br>
                        
                      </td>
                      
                    </tr>
                    
                  </table>

                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.' ;padding-top:'.$rand_nom_text_14.'; padding-bottom:'.$rand_nom_text_13.'">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                          <tr>
                          
                            <td style="padding-bottom: '.$rand_nom_text_14.'"><img alt="'.$img_text_2.'" src="'.$kart_2.'" border="0" width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; " ></td>
                          </tr>
                          
                        </table>
                        
                        <table >
                        
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family: '.$rand_nom_text_9.'; font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.'; color: #2'.$color_rand.'69A1; padding-bottom: 7px">'.$rand_nom_text_3_2.'</td>
                          </tr>
                          
                        </table>
                        
                        <div class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#333'.$color_rand.'32">'.$sut_dip.$rand_nom_text_17.'<br>
                          '.$name.'!<br>'.$text_dip.'
                          
                                                 </div>
                                                 
                        <br>
                        
                      </td>
                      
                    </tr>
                    
                  </table>
                

                  <table width="'.$rand_nom_text_2.'" align="left" class="force2_row2'.$style_1.'" style="width: '.$rand_nom_text_2.'px;">
                  
                    <tr>
                    
                      <td class="coo'.$style_1.'332l"  style="padding-left: '.$rand_nom_text_13.'; padding-right: '.$rand_nom_text_13.'; padding-top: '.$rand_nom_text_14.'; 
                      padding-bottom: '.$rand_nom_text_13.'">
                      
                        <table class="im3g'.$style_1.'wrap25per">
                        
                          <tr>
                          
                            <td style="padding-bottom:'.$rand_nom_text_14.'"><img alt="'.$img_text_3.'" src="'.$kart_3.'" border="0"  width="'.$rand_nom_text_11.'" height="'.$rand_nom_text_15.'" 
                            style="max-width: 99%; ">
                            </td>
                            
                          </tr>
                          
                        </table>
                        
                        <table >
                        
                          <tr>
                          
                            <td class="sub'.$style_1.'3tit4tle" style="font-family:'.$rand_nom_text_9.';font-size: 13px; 
                            line-height: '.$rand_nom_text_10.'; font-weight: '.$rand_nom_text_1.';color:#2'.$color_rand.'69A1; padding-bottom: 7px">'.$rand_nom_text_3_3.'</td>
                          </tr>
                          
                        </table>
                        <div class="coo'.$style_1.'332l-copy" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_12.'; 
                        line-height: 21px; text-align: left; color:#33'.$color_rand.'332">'.$sut_mag.$rand_nom_text_17.'<br>
                          '.$name.'!<br>'.$text_mag.'
                        </div>
                        
                        <br>
                        
                      </td>
                      
                    </tr>
                    
                  </table>

               

                </td>
                
              </tr>
              <tr>
                <td class="cont'.$style_1.'ain22-padding header" align="left" style="font-family: '.$rand_nom_text_9.'; font-size: '.$rand_nom_text_10.'; 
                font-weight: bold; padding-bottom: 13px; color: #DF47'.$color_rand.'5;padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
                
                  <a href="'.$site_url.'order.php">'.$name.', '.$rand_nom_text_5.'</a><br>
                   '.$vibor_filial.'
                </td>
                
              </tr>
              
            </table>

          </td>
        </tr>
        <tr>
        
          <td class="cont'.$style_1.'ain22-padding footer-text" align="left" style="font-family: '.$rand_nom_text_9.'; 
          font-size: '.$rand_nom_text_12.'; line-height: '.$rand_nom_text_14.'; color:#aaaaa'.$color_rand.'; padding-left: '.$rand_nom_text_10.'; padding-right: '.$rand_nom_text_10.'">
            <br>
            
            <br>


            <strong><a href="'.$site_url.'" style="color:#aaaaa'.$color_rand.'">'.$site_name.'</a><br></strong><br>

            '.$name.'! '.$vibor_niz.'
            
            <span class="ios23'.$style_1.'foot434">
              '.$email.'<br>

            </span>

              
            <span class="ios23'.$style_1.'foot434">
              '.$name.'! <a href="'.$site_url.'otpiska.php" >'.$rand_nom_text_6.'</a>.<br>
            </span>

            ©'.$rand_nom_text_7.'-2017 <a href="'.$site_url.'" style="color: #aaaaa'.$color_rand.'">'.$site_name.'</a><br>
            
            

            <br>
            
            <br>
            

          </td>
          
        </tr>
        
      </table>
      


    </td>
    
  </tr>
  
</table>


</body>

</html>
';

//$per_str_rep = rand(1, 3);

//switch ($per_str_rep){
//    case 1: $body_2 = str_replace('х','x',$body_2);
//	$body_2 = str_replace('а','a',$body_2);
//	$body_2 = str_replace('р','p',$body_2);
  //      break;
//    case 2: $body_2 = str_replace('у','y',$body_2);
//	$body_2 = str_replace('а','a',$body_2);
//	$body_2 = str_replace('р','p',$body_2);
//        break;
//		case 3: $body_2 = str_replace('к','k',$body_2);
//	$body_2 = str_replace('а','a',$body_2);
//	$body_2 = str_replace('р','p',$body_2);
//       break;
//}
