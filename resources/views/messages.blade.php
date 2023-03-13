@extends('layouts.app')

@section('title-block')
    Данные
@endsection

@section('content')
    <h1> Данные </h1>
    @foreach ($data as $element)  {{-- $data из сотроллера ContactController.php --}}
        <div class='alert alert-info'>
            <h3 style='display:inline-block;'> {{$element->name}} </h3>
            <p style='display:inline-block;'> ({{$element->email}}) </p>
            <h4> {{$element->subject}} </h4>            
            <p>{{$element->message}} </p>
            <small> {{$element->created_at}} </small>
            <a href='#'> <button> Открыть </button> </a>
        </div>
    @endforeach
    
@endsection