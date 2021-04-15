@extends('layouts.app')

@section('title-block', 'Итэвон класс')

@section('content')

	<div class="main">


            <div class="content">
				<h1>Итэвон класс</h1>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/NeaHNQJ1kCo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="info_film_page">
					<span class="label">Рейтинг: </span><span class="value">8.2</span>
					<span class="label">год: </span><span class="value">2020</span>
					<span class="label">Режиссер: </span><span class="value">
Ким Сон-юн, Кан Мин-гу</span>
				</div>
				<hr>
				<h2>Описание Итэвон класс</h2>
				<div class="description_film">
					<img src="assets/img/Itaewon.png" width="250" height="315" alt>
					История бывшего осужденного Пак Сэрои (Пак Соджун), чья жизнь перевернулась с ног на голову после того, как его исключили из школы. Он потерял отца из-за хулигана-одноклассника Чан Гынвона (Ан Бохён), сына генерального директора крупной корпорации, Чан Дэхи (Ю Джэмён). Пак Сэрои открывает свой бар-ресторан Данбан в Итхэвоне и вместе со своим менеджером Чо Исо (Ким Дами) и сотрудниками стремится к достижению больших высот.
				</div>
				<hr>
				<h2>Отзывы о Итэвон класс</h2>
				<div class="review">
					<div class="review_name">
						Надя
					</div>
					<div class="review_text">
						Итэвон класс - это нечто потрясающее, что заставляет плакать и смеяться одновременно, что заставляет переживать за каждого героя. Я точно могу сказать, что я еще не раз буду пересматривать сей шедевр. Для меня это самая лучшая дорама, которую я видела (хоть я пока и немного их посмотрела) и один из лучших сериалов (их я достаточно посмотрела), который запросто может конкурировать с американскими аналогами.
					</div>
						<div class="review_name">
						vlmeil
					</div>
					<div class="review_text">
						Динамичная дорама, затягивающая с первой серии. На этом её плюсы заканчиваются. Сюжет очень простой и предсказуемый, но главная проблема даже не в этом. Для дорам предсказуемые сюжеты - это обычное явление. Здесь же не получилось наполнить его глубиной, интересными живыми героями, лёгкостью и юмором. Совсем не получилось. Вроде бы и дружный коллектив есть, вместе стремятся к цели и преодолевают трудности - но всё настолько неаккуратно слеплено, что этому не веришь и не сопереживаешь.
					</div>
				</div>
				<div class="send">
					<form method="post" action="#" id="review">
						<input type="text" name="review_name" placeholder="ваше имя">
						<textarea name="review_text"></textarea>
						<input type="submit" value="отправить">
					</form>
				</div>
			</div>

	</div>
@endsection
