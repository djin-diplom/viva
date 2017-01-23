

<div id="marquee">Сделайте заказ сейчас, воспользуйтесь формой заказа на сайте! У нас нет телефонных менеджеров, они увеличивают цену работы!</div>
<div id="marquee2">У нас нет телефонных менеджеров, они увеличивают цену работы!</div>

	<header>
		<noindex>
		<section>
			<div class="logo"><a href="index.php" ><img src="./index_files/1_logo.png" width="222" height="70" alt=""></a>
				<br><span style="color:green; font-size:18px;">Напишу - <?php echo $site_name; ?>!</span></div>
			<div class="addr"><a target="_blank" href="<?php echo $url_adres_yandex; ?>">
					<img src="./index_files/loc.gif" width="57" height="40" alt=""></a><b><?php echo $adres; ?></b><br><?php echo $vremia_raboti; ?></div>
			<div class="phone">
				<div id="pnumber" style="margin:0px 0px 0px 0px"><img src="./index_files/phone2.png" class="blink">Без менеджеров!</div>
				
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
							<button type="submit" name="submit" style="font-size: 18px; margin: 15px 0 0; background: #590;">Войти в кабинет</button><br>
						</div>
					</section>
				</form>
				<?php else: ?>
					<button><a href="kabinet/profile.php" style="color:white;">Здравствуйте, <?php echo $_SESSION['client_name']; ?>! Это вход в личный кабинет</a></button>
				<?php endif ?>
			</div>
		</section>
		<div style="position: absolute; left: 40%; top: 100px;">
			<a href="<?php echo $url_town_piter; ?>" class="jQtooltip" title="Санкт-Петербург"><img src="./index_files/book.png" width="<?php if(empty($town)) echo '50'; else echo '40';?>" height="<?php if(empty($town)) echo '64'; else echo '56';?>" alt=""></a>
			<a href="<?php echo $url_town_moscow; ?>" class="jQtooltip" title="Москва"><img src="./index_files/book.png" width="<?php if($town == 'moscow') echo '50'; else echo '40';?>" height="<?php if($town == 'moscow') echo '64'; else echo '56';?>" alt=""></a>
			<a href="<?php echo $url_town_kazan; ?>" class="jQtooltip" title="Казань"><img src="./index_files/book.png" width="<?php if($town == 'kazan') echo '50'; else echo '40';?>" height="<?php if($town == 'kazan') echo '64'; else echo '56';?>" alt=""></a>
			<a href="<?php echo $url_town_novosibirsk; ?>" class="jQtooltip" title="Новосибирск"><img src="./index_files/book.png" width="<?php if($town == 'novosibirsk') echo '50'; else echo '40';?>" height="<?php if($town == 'novosibirsk') echo '64'; else echo '56';?>" alt=""></a>
			<a href="<?php echo $url_town_ufa; ?>" class="jQtooltip" title="Уфа"><img src="./index_files/book.png" width="<?php if($town == 'ufa') echo '50'; else echo '40';?>" height="<?php if($town == 'ufa') echo '64'; else echo '56';?>" alt=""></a>
		</div>
			</noindex>
		<menu>
			<div><span><a href="o_kompanii.php">Наша компания</a></span></div>
			<div><span><a href="uslugi_i_ceny.php">Стоимость работ</a></span></div>
			<div><span><a href="poriadok_zakaza.php">Первые шаги</a></span></div>
			<div><span><a href="order.php">Сделать заказ</a></span></div>
			<div><span><a href="consult.php">Отзывы</a></span></div>
			<div><span><a href="dogovor.php">Оферта</a></span></div>
			<div><span><a href="primeri_rabot.php">Договор</a></span></div>
			<div><span><a href="job_creators.php">Авторы</a></span></div>
			<div><span><a href="kontakty.php">Контакты</a></span></div>
        </menu>
		
	</header>