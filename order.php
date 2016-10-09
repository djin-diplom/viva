<!DOCTYPE html>
<?php
require("requisites.php");
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

	<title>Расчет стоимости</title>

	<meta name="description" content="Расчет стоимости">
	<meta name="keywords" content="Расчет стоимости">

    <?php
    require("head_1.php");
    ?>
<body>
<?php
require("header.php");
?>

<!-- section of script -->


<div style="background: url(/img/leather1.jpg) repeat-x left top; padding-top: 40px;">
    <section class="main">
        <?php
        require("calc2.php");
        ?>
        <div>

<h1>Расчет стоимости</h1>Сделайте запрос или узнайте об услуге подробнее, заполнив форму.&nbsp;<br>Не забудьте указать Ваши контактные данные, чтобы мы могли оперативно с Вами связаться.<br>
<script type="text/javascript" src="./order_files/jquery.min.js.Без названия"></script>
<script type="text/javascript" src="./order_files/jquery-ui.min.js.Без названия"></script>
<script type="text/javascript" src="./order_files/jquery-ui-i18n.min.js.Без названия"></script>
<script type="text/javascript" src="./order_files/jquery.maskedinput.min.js.Без названия"></script>
<script type="text/javascript" src="./order_files/jquery.form.js.Без названия"></script>

<style>
	form#request_form { width: 75%; }
	form#request_form table { width: 100%; }
        form#request_form table tr td:first-of-type { white-space: nowrap; width: 10%; }
	form#request_form table td { padding: 10px 20px 10px 0; font-size: 16px; white-space: nowrap; }
	form#request_form table td input, form#request_form table td textarea, , form#request_form table td select { width: 100%; font-size: 16px; padding: 0.3em; }
	form#request_form table td sup { font-size: 10px; color: #b00; }
	form#request_form table td button { font-size: 20px; padding: 5px 10px; }
	form#request_form table tr:last-of-type td input { visibility: hidden; width: 30px; }
</style>

<br>

<div id="request_div"><form id="request_form" method="post" enctype="multipart/form-data" action="order2.php">
  <div style="display:none"><input type="hidden" name="csrfmiddlewaretoken" value="oBlyEDpYaBC7PNlqaGEbTOT3xFrlrCTL"></div><table class="order">
    <tbody>
    

    

    
        
        <tr>
          <td class="field">
            Тип работы
            <span style="color: red;">*</span>
          </td>
          <td>
            <select name="work_kind" id="id_work_kind">
<option value="" selected="selected">---</option>
<option value="control">Контрольная работа</option>
<option value="paper">Реферат</option>
<option value="essay">Курсовая работа</option>
<option value="report">Отчет по практике</option>
<option value="diploma">Диплом</option>
<option value="mage_dissertation">Магистерская диссертация</option>
<option value="drawings">Чертежи</option>
<option value="other">Прочее</option>
<option value="complex">Комплексный заказ</option>
</select>

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Тема работы
            
          </td>
          <td>
            <textarea id="id_subject" style="width: 80%;" rows="3" cols="10" name="subject"></textarea>

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Предмет
            
          </td>
          <td>
            <input id="id_predmet" style="width: 50%;" type="text" name="predmet" maxlength="100">

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Учебное заведение
            
          </td>
          <td>
            <input id="id_university" style="width: 50%;" type="text" name="university" maxlength="100">

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Доп. информация
            
          </td>
          <td>
            <textarea id="id_add_info" style="width: 80%;" rows="3" cols="10" name="add_info"></textarea>

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Ваше имя
            <span style="color: red;">*</span>
          </td>
          <td>
            <input style="width: 50%;" type="text" name="name" id="id_name">

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            E-mail
            <span style="color: red;">*</span>
          </td>
          <td>
            <input style="width: 50%;" type="text" name="email" id="id_email">

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Телефон
            
          </td>
          <td>
            <input style="width: 50%;" type="text" name="phone" id="id_phone">

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Решите задачу
            <span style="color: red;">*</span>
          </td>
          <td>
            <input type="hidden" value="eec913da06a4be5d9d9916d554ef6ffcf9e08b7034202b2032" name="math_captcha_question"> 4 + 2 = <input type="text" name="math_captcha_field" id="id_math_captcha_field">
              <input type="hidden" value="" name="ordernum">
            
          </td>
        </tr>
        


    <tr>
      <td class="field">&nbsp;</td>
      <td><span style="color: red;">*</span> — обязательные поля</td>
    </tr>

    <tr>
      <td class="field">&nbsp;</td>
      <td>
        <button type="submit" name = "submit" class="blue" style="font-size: 18px;">
          Отправить заказ
        </button>
      </td>
    </tr>
    </tbody>
  </table>
</form>

<script type="text/javascript">
  $("#id_phone").mask("+7 (999) 999-99-99", {placeholder:" "});
</script>
</div>

<script type="text/javascript">
$(document).ajaxSend(function (event, xhr, settings) {
  function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie != '') {
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++) {
        var cookie = jQuery.trim(cookies[i]);
        if (cookie.substring(0, name.length + 1) == (name + '=')) {
          cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
          break;
        }
      }
    }
    return cookieValue;
  }

  function sameOrigin(url) {
    var host = document.location.host;
    var protocol = document.location.protocol;
    var sr_origin = '//' + host;
    var origin = protocol + sr_origin;
    return (url == origin || url.slice(0, origin.length + 1) == origin + '/') ||
        (url == sr_origin || url.slice(0, sr_origin.length + 1) == sr_origin + '/') || !(/^(\/\/|http:|https:).*/.test(url));
  }

  function safeMethod(method) {
    return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
  }

  if (!safeMethod(settings.type) && sameOrigin(settings.url)) {
    xhr.setRequestHeader("X-CSRFToken", getCookie('csrftoken'));
  }
});

  $.getJSON('order2.php', function( response ) {
      $('div#request_div').html(response.html);

      var options = {
        dataType:  'json',
        beforeSubmit: function() {$("#request_form").find("input:not(:disabled), select:not(:disabled), textarea:not(:disabled), button:not(:disabled)").prop("disabled",true);},
        success:   processJson
      };

      function processJson(data) {
        if(data.success) {
          $('div#request_message').remove();
          $('div#request_div').html(data.html);
        } else {
          $('div#request_div').html(data.html);
          $('#request_form').ajaxForm(options);
        }
      }

      $('#request_form').ajaxForm(options);
  });
</script>

		</div>
	</section>
</div>


    <section class="offers"><div><a href="aktcii_i_skidki.php"><img src="./index_files/offer1.gif" width="805" height="189" alt=""></a></div></section>
    <?php
    require("responses.php");
    require("payment.php");
    require("footer.php");
    ?>
</body>
</html>