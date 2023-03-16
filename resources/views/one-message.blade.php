@extends('layouts.app')

@section('title-block')
    {{$data->subject}}
@endsection

@section('content')
    <h1> {{$data->subject}} </h1>
    
        <div class='alert alert-info'>
            <p style='display:inline-block;'> <span class="lead">{{$data->name}}</span>&nbsp({{$data->email}}) </p>
            <h4> {{$data->subject}} </h4>            
            <p>{{$data->message}} </p>
            <small> {{$data->created_at}} </small> <br>
            <a href="{{route('contact-update', $data->id)}}"> <button class='btn btn-lg btn-primary mt2'> Редактировать </button> </a>
            <a href="{{route('contact-delete', $data->id)}}"> <button class='btn btn-lg btn-danger mt2'> Удалить </button> </a>
        </div>
@endsection