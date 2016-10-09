<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter40103015 = new Ya.Metrika({
					id:40103015,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/40103015" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<noindex>
	<header>
		<section>
			<div class="logo"><a href="index.php" ><img src="./index_files/1_logo.png" width="222" height="70" alt=""></a></div>
			<div class="addr"><a target="_blank" href="https://yandex.ru/maps/213/moscow/?ll=37.522863%2C55.681357&z=16&from=1org_map&whatshere%5Bpoint%5D=37.522884%2C55.681429&whatshere%5Bzoom%5D=16"><img src="./index_files/loc.gif" width="57" height="40" alt=""></a><b><?php echo $adres; ?></b><br>С 6:00 до 22:00, без выходных</div>
			<div class="phone">
				<div><span>(960)</span> 590-95-72<br>
<span><?php echo $email; ?></span></div>
				<label onclick="document.forms.callback.className=document.forms.callback.className==&#39;hidden&#39;?&#39;showed&#39;:&#39;hidden&#39;;">Заказать обратный звонок</label>
				<form name="callback" action="" method="post" class="hidden">
					<input type="hidden" name="callback" value="">
					<span></span>
					<section>
						<div>
							<span style="color: red;">Извините! Мобильная связь<br> временно недоступна.<br>Попробуйте завтра или<br>свяжитесь с нами по почте!</span><br>
							Ваше имя:<br><input required="" type="text" name="name" style="width: 200px; margin: 5px 0 10px;"><br>
							Телефон:<br><input type="text" name="phone1" maxlength="2" style="text-align: center; width: 30px; margin: 5px 0 10px 2px;" placeholder="+7"> <input type="text" name="phone2" maxlength="5" style="text-align: center; width: 50px; margin: 0 2px;" placeholder="812"> <input required="" type="text" name="phone3" maxlength="9" style="width: 100px;" placeholder="123-45-67"><br>
							Номер заказа (если есть):<br><input type="text" name="ordernum" style="width: 150px; margin-top: 5px;"><br>
						</div>
						<div>
							<div style="text-align: right;"><label onclick="document.forms.callback.className=&#39;hidden&#39;;">Закрыть окно</label></div>
							<b>Я хочу:</b>
							<div><label><input checked="" type="radio" name="action" value="сделать заказ"> Сделать заказ</label></div>
							<div><label><input type="radio" name="action" value="узнать о готовности работы"> Узнать о готовности работы</label></div>
							<div><label><input type="radio" name="action" value="уточнить про доработку"> Уточнить про доработку</label></div>
							<button type="submit" style="font-size: 18px; margin: 15px 0 0; background: #590;">Перезвонить мне</button><br>
						</div>
					</section>
				</form>
			</div>
		</section>
		<menu>
			<div><span><a href="o_kompanii.php">О компании</a></span></div>
			<div><span><a href="uslugi_i_ceny.php">Услуги и цены</a></span></div>
			<div><span><a href="poriadok_zakaza.php">Порядок заказа</a></span></div>
			<div><span><a href="order.php">Расчет стоимости</a></span></div>
			<div><span><a href="consult.php">Отзывы</a></span></div>
			<div><span><a href="kontakty.php">Контакты</a></span></div>
        </menu>
		
	</header>
	</noindex>