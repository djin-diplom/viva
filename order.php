<!DOCTYPE html>
<?php
require("requisites.php");
$count_text = 41;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

	<title>Заказать работу</title>

	<meta name="description" content="Заказать работу">
	<meta name="keywords" content="Заказать работу">

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

<h1>Заказать рабoту</h1>Сделайте запрoс или узнайте об услуге подрoбнее, заполнив фoрму.&nbsp;<br>
            Не зaбудьте указать Ваши контактные данные, чтoбы мы мoгли oперативно с Вaми связаться.<br>

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
<option value="kontrolnaia">Контрольная работа</option>
<option value="referat">Реферат</option>
<option value="esse">Эссе</option>
<option value="kursovaia">Курсовая работа</option>
<option value="otchot">Отчет по практике</option>
<option value="diploma">Диплом</option>
<option value="magister_dissertation">Магистерская диссертация</option>
<option value="drawings">Чертежи</option>
<option value="other">Прочее</option>
<option value="complex">Комплексный заказ</option>
</select>

            
          </td>
        </tr>
        
    
        
        <tr>
          <td class="field">
            Тема работы
              <span style="color: red;">*</span>
          </td>
          <td>
            <textarea id="id_subject" style="width: 80%;" rows="3" cols="10" name="tema"></textarea>

            
          </td>
        </tr>

        <tr>
            <td class="field">
                Сколько Вы готовы заплатить<br>
                (мы учтем Ваши возможности)
                <span style="color: red;">*</span>
            </td>
            <td>
                <input id="id_predmet" style="width: 50%;" type="text" name="kli_stoimost" maxlength="100">

            </td>
        </tr>

        <tr>
            <td class="field">
                С предоплатой или без?<br>
                (Без предоплаты цена выше!)
                <span style="color: red;">*</span>
            </td>
            <td>
                <select name="predoplata" id="id_work_kind">
                    <option value="" selected="selected">---</option>
                    <option value="s_predoplatoi">С предоплатой без наценки</option>
                    <option value="bez_predoplati">Без предоплаты c наценкой 30%</option>
                </select>


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
                Требуемый срок выполнения
            </td>
            <td>
                <input id="id_predmet" style="width: 50%;" type="text" name="srok_vip" maxlength="100">
            </td>
        </tr>
        
        
    
        
        <tr>
          <td class="field">
            Доп. информация<br>(объем, уникальность)
            
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
            <input style="width: 50%;" type="text" name="email_stud" id="id_email">

            
          </td>
        </tr>
        <tr>
            <td class="field">
                <?php
                $a = rand(1,10);
                $b = rand(1,100);
                $c = $a+$b;
                echo $a."+".$b."=";
                ?>
                <span style="color: red;">*</span>
            </td>
            <td>
                <input style="width: 50%;" type="text" name="count_1">
                <input style="width: 50%; display: none;" type="text" value=<?php echo $c?> name="count_2">


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


</div>


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