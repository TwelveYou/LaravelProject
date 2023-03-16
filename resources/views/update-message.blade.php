@extends('layouts.app')

@section('title-block')
    Обновление записи
@endsection

@section('content')
    <h1> Обновление записи </h1>    
    <form action={{ route('contact-update',$data->id) }} method="POST"> 
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control">
                {{$data->message}}
            </textarea>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Обновить</button>
        </div>
    </form>
@endsection