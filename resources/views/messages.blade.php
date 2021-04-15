@extends('layouts.app')

@section('title-block', 'Все сообщения')

@section('content')

    <div class="content">
        @foreach($contacts as $contact)
            <div class="alert alert-info">
                <h3>{{ $contact->subject }}</h3>
                <p>{{ $contact->email }}</p>
                <p><small>{{ $contact->created_at }}</small></p>
                <a href="{{ route('contact-data-one', $contact->id) }}"><buttom class="send">Детальнее</buttom></a>
            </div>
        @endforeach
    </div>

@endsection
