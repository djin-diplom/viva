<?php

$per = 4;

if ($per == 1) {
    $site_name = "<a href='http://vivadiplom.ru'>Да здравствует Диплом!</a>";
    $site_url = "http://vivadiplom.ru";
    $site_phone = "7 (905) 734 53 34";
    $email = "zakaz@vivadiplom.ru";
    $email2 = "vivadiplom.ru@gmail.com";
    $email3 = "info@vivadiplom.ru";
    $adres = "г. Москва, ул. Марии Ульяновой, д. 17а, оф. 234-236.";
    $url_oplata = "https://money.yandex.ru/to/410014647964140";
    $url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/CZggVH1z\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";
} elseif ($per == 2) {
    $site_name = "Vivaholes";
    $site_url = "http://viva.hol.es/";
    $site_phone = "7 (905) 734 53 34";
    $email = "zakaz@viva.hol.es";
    $email2 = "vivaholes@gmail.com";
    $email3 = "info@viva.hol.es";
    $adres = "г. Москва Большой Факельный пер 18с1 оф. 120";
    $url_adres_yandex = "https://yandex.ru/maps/-/CZgsN0p4";
    $url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/CZgsN0p4\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";
    $url_oplata = "https://money.yandex.ru/to/410014647964140";
    $push_impulse = "<script charset=\"UTF-8\" src=\"//cdn.sendpulse.com/js/push/9b4856f4d4e8109ccf19a9f64e457f0e_0.js\" async></script>";
} elseif ($per == 3) {
    $site_name = "База Знаний";
    $site_url = "http://bazadiplom.ru/";
    $site_phone = "+7 (960) 590 95 72";
    $email = "zakaz@bazadiplom.ru";
    $email2 = "	bazadiplom@gmail.com";
    $email3 = "info@bazadiplom.ru";
    $adres = "197022, г. Санкт-Петербург, Каменноостровский пр-кт, <br>дом № 27 литер Б, оф. 134-136, ИНН 7813239461";
    $url_adres_yandex = "https://yandex.ru/maps/-/CZs6uQyT";
    $url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/CZs6uQyT\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";
    $url_oplata = "https://money.yandex.ru/to/410014647964140";
    $push_impulse = "";

} else {
    $site_name = "Vivadip.xyz";
    $site_url = "http://vivadip.xyz/";
    $site_phone = "+7 (960) 590 95 72";
    $email = "zakaz@vivadip.xyz";
    $email2 = "vivadip.xyz@gmail.com";
    $email3 = "info@vivadip.xyz";
    $adres = "197022, г. Санкт-Петербург, Каменноостровский пр-кт, <br>дом № 27 литер Б, оф. 134-136, ИНН 7813239461";
    $url_adres_yandex = "https://yandex.ru/maps/-/CZs6uQyT";
    $url_adres_yandex_frame = "<iframe src=\"https://api-maps.yandex.ru/frame/v1/-/CZs6uQyT\" width=\"560\" height=\"400\" frameborder=\"0\"></iframe>";
    $url_oplata = "https://money.yandex.ru/to/410014714516309";
    $push_impulse = "";
}