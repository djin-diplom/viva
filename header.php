<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter40976924 = new Ya.Metrika({
					id:40976924,
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
<noscript><div><img src="https://mc.yandex.ru/watch/40976924" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<div id="marquee">Закажите работу прямо сейчас, ждем вашу заявку на почте! Мы не держим телефонных менеджеров, они удваивают стоимость заказа!</div>
<div id="marquee2">Мы не держим телефонных менеджеров, они удваивают стоимость заказа!</div>
<noindex>
	<header>
		<section>
			<div class="logo"><a href="index.php" ><img src="./index_files/1_logo.png" width="222" height="70" alt=""></a>
				<br><span style="color:green; font-size:18px;">Ваш <?php echo $site_name; ?>!</span></div>
			<div class="addr"><a target="_blank" href="<?php echo $url_adres_yandex; ?>"><img src="./index_files/loc.gif" width="57" height="40" alt=""></a><b><?php echo $adres; ?></b><br>С 6:00 до 22:00, без выходных</div>
			<div class="phone">
				<div id="pnumber" style="margin:0px 0px 0px 0px"><img src="./index_files/phone2.png" class="blink">Никаких менеджеров!</div>
				
				<div><span><?php echo $email2; ?></span></div>
				<?php if (empty($_SESSION['client_email'])): ?>
					<label onclick="document.forms.callback.className=document.forms.callback.className==&#39;hidden&#39;?&#39;showed&#39;:&#39;hidden&#39;;">Личный кабинет</label>
				<form name="callback" action="check_login.php" method="get" class="hidden">
					<input type="hidden" name="callback" value="">
					<span></span>
					<section>
						<div>

							Email:<br><input type="text" name="client_email" ><br>
							Пароль:<br><input type="text" name="client_pass" style=" margin-top: 5px;"><br>


						</div>

						<div>
							<div style="text-align: right;"><label onclick="document.forms.callback.className=&#39;hidden&#39;;">Закрыть окно</label></div>
							<p>Пароль вы должны получить по почте после заказа работы.</p>
							<button type="submit" name="submit" style="font-size: 18px; margin: 15px 0 0; background: #590;">Войти в личный кабинет</button><br>
						</div>
					</section>
				</form>
				<?php else: ?>
					<button><a href="kabinet/profile.php" style="color:white;">Здравствуйте, <?php echo $_SESSION['client_name']; ?>! Это вход в личный кабинет</a></button>
				<?php endif ?>
			</div>
		</section>
		<menu>
			<div><span><a href="o_kompanii.php">Наш Учебный центр</a></span></div>
			<div><span><a href="uslugi_i_ceny.php">Стоимость услуг</a></span></div>
			<div><span><a href="poriadok_zakaza.php">С чего начать</a></span></div>
			<div><span><a href="order.php">Заказать работу</a></span></div>
			<div><span><a href="consult.php">Отзывы</a></span></div>
			<div><span><a href="dogovor.php">Договор</a></span></div>
			<div><span><a href="got_rab.php">Авторам</a></span></div>
			<div><span><a href="kontakty.php">Контакты</a></span></div>
        </menu>
		
	</header>
	</noindex>