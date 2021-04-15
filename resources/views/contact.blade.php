@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')

    <div class="content">
        @include('inc.messages')
            <h1>Контакты</h1>
            <h2>Отправьте ваш отзыв о портале Дорамастар</h2>
            <div class="send">
                <form method="post" action="{{ route('contact-form') }}" id="review">
                    @csrf
                    <input type="text" name="name" placeholder="ваше имя" id="name">
                    <input type="text" name="email" placeholder="ваш email" id="email">
                    <textarea name="message" id="message" placeholder="Введите сообщение"></textarea>
                    <input type="submit" value="отправить">
                </form>
            </div>
    </div>

@endsection
