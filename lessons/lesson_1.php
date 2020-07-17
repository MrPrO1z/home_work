<?php
			//Home work

			/*
			*1) посчитать количество повторений в строке выражения Твин Пикс
			*2) заменить в строке Твин Пикс на Twin Peaks
			*3) посчитать количество символов в строке
			*4) посчитать количество символов без пробелов в строке
			*5) убрать html-теги (<p>) в строке
			*6) вывести строку в браузере как html-код
			*7) первое слово "В" в начале тексте должно быть с большой буквы
			*/

			$mainString = '<p>в том же 1990 году стартовал первый телесериал Линча — Твин Пикс. В основе сюжета сериала — расследование загадочного убийства школьницы Лоры Палмер, произошедшего в небольшом американском городке Твин Пикс. Сериал пользовался поначалу большим успехом, но уже через год съёмки были свёрнуты из-за низких рейтингов. Тем не менее сериал стал знаковым культурным явлением начала 1990-х. Ежегодно под Сиэтлом проходит слёт поклонников Твин Пикса</p>';

			//  каждое задание вывести как заголовок h2 и под ним готовое решение
			//  заголовок h2 - синим цветом 
			// решение - темно-серым 


			echo "<h2><font color=#0000ff>Home Work #1</font></h2>";
			
			echo "<h2><font color=#0000ff>1) посчитать количество повторений в строке выражения Твин Пикс</font></h2>";

				echo '<pre>', substr_count($mainString, 'Твин Пикс');

			
			echo "<h2><font color=#0000ff>2) заменить в строке Твин Пикс на Twin Peaks</font></h2>";

				$replace = str_replace( 'Твин Пикс', 'Twin Peaks' , $mainString);

			

				echo '<pre>', $replace;

			echo "<h2><font color=#0000ff>3) посчитать количество символов в строке</font></h2>";


			echo '<pre>', strlen($mainString);


			echo "<h2><font color=#0000ff>4) посчитать количество символов без пробелов в строке</font></h2>";

			$replace = str_replace( ' ', '' , $mainString);
			echo '<pre>', strlen($replace);

			echo "<h2><font color=#0000ff>5) убрать html-теги (&lt;p&gt;) в строке</font></h2>";


			

			$replace2 = str_replace( '<p>', '' , $mainString);

			echo $replace2;


			echo "<h2><font color=#0000ff>6) вывести строку в браузере как html-код</font></h2>";
						
			
			echo htmlentities($mainString);

	


			echo "<h2><font color=#0000ff>7) первое слово 'В' в начале тексте должно быть с большой буквы</font></h2>";



			if (!function_exists('mb_ucfirst') && extension_loaded('mbstring'))
					{
					    /**
					     * mb_ucfirst - преобразует первый символ в верхний регистр
					     * @param string $str - строка
					     * @param string $encoding - кодировка, по-умолчанию UTF-8
					     * @return string
					     */
					    function mb_ucfirst($mainStr, $encoding='UTF-8')
					    {
					        $mainStr = mb_ereg_replace('^[\ ]+', '', $str);
					        $mainStr = mb_strtoupper(mb_substr($mainStr, 0, 1, $encoding), $encoding).
					               mb_substr($str, 1, mb_strlen($mainStr), $encoding);
					        return $mainStr;
					    }
					}

					$mainStr = $mainString;



					// преобразовываем функцией mb_convert_case
					echo mb_convert_case($mainStr, MB_CASE_TITLE, 'UTF-8');





		
			

?>