@extends('layouts.app')

@section('title-block', $contact->subject)

@section('content')

    <div class="content">
            <div class="alert alert-info">
                <p>{{$contact->message}}</p>
                <p>{{ $contact->email }} - {{ $contact->name }}</p>
                <p><small>{{ $contact->created_at }}</small></p>
                <a href="{{ route('contact-update', $contact->id) }}"><buttom class="send">Редактировать |</buttom></a>
                <a href="{{ route('contact-delete', $contact->id) }}"><buttom class="send">Удалить</buttom></a>
            </div>
    </div>

@endsection
