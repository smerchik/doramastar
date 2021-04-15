@extends('layouts.app')

@section('title-block', 'Рейтинг дорам')

@section('content')

	<div class="main">

			<div class="content">
				<table>
					<tr>
						<th></th>
						<th>Дорамы</th>
						<th class="center">Год</th>
						<th class="center">Рейтинг</th>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/Itaewon.png"></td>
						<td>1. <a href="{{ route('show') }}">Итэвон класс</a></td>
						<td class="center">2020</td>
						<td class="center" rating>8.2</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/Potomkisun.png"></td>
						<td>2. <a href="{{ route('show') }}">Потомки солнца</a></td>
						<td class="center">2018</td>
						<td class="center" rating>8.4</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/Psih.png"></td>
						<td>3. <a href="{{ route('show') }}">Псих, но все в порядке</a></td>
						<td class="center">2020</td>
						<td class="center" rating>8.3</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/flower.png"></td>
						<td>4. <a href="{{ route('show') }}">Цветок зла</a></td>
						<td class="center">2020</td>
						<td class="center" rating>8.4</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/BokJu.png"></td>
						<td>5. <a href="{{ route('show') }}">Фея тяжелой атлетики</a></td>
						<td class="center">2017</td>
						<td class="center" rating>8.1</td>
					</tr>
						<tr>
						<td class="center"><img src="assets/img/Bong.png"></td>
						<td>6. <a href="{{ route('show') }}">Силачка До Бон Сун</a></td>
						<td class="center">2017</td>
						<td class="center" rating>7.9</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/30but17.png"></td>
						<td>7. <a href="{{ route('show') }}">30, но 17</a></td>
						<td class="center">2018</td>
						<td class="center" rating>7.8</td>
					</tr>
					<tr>
						<td class="center"><img src="assets/img/young.png"></td>
						<td>8. <a href="{{ route('show') }}">Записки юности</a></td>
						<td class="center">2020</td>
						<td class="center" rating>8.4</td>
					</tr>
				</table>

			</div>


	</div>

@endsection
