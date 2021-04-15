@extends('layouts.app')

@section('title-block', 'Добавить дораму')

@section('content')



            <div class="content">
				<h1>Добавить дораму</h1>
				<div class="send">
					<form method="post" action="#" id="review">
						<input type="text" name="review_name" placeholder="Название дорамы">
						<input type="text" name="review_name" placeholder="год">
						<input type="text" name="review_name" placeholder="режиссер">
						<input type="text" name="review_name" placeholder="Главные актеры">
						<textarea name="review_text"></textarea>
						<input type="submit" value="добавить">
					</form>
				</div>

			</div>





@endsection
