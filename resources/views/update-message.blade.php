@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')

    <div class="content">
        @include('inc.messages')
        <h1>Контакты</h1>
        <h2>Отправьте ваш отзыв о портале Дорамастар</h2>
        <div class="send">
            <form method="post" action="{{ route('contact-update-submit', $contact->id) }}" id="review">
                @csrf
                <input type="text" name="name" value="{{ $contact->name }}" placeholder="ваше имя" id="name">
                <input type="text" name="email" value="{{ $contact->email }}" placeholder="ваш email" id="email">
                <textarea name="message" id="message" placeholder="Введите сообщение">{{ $contact->message }}</textarea>
                <input type="submit" value="обновить">
            </form>
        </div>
    </div>

@endsection
