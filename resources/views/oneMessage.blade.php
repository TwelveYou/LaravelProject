@extends('layouts.app')

@section('title-block')
    {{$data->subject}}
@endsection

@section('content')
    <h1> {{$data->subject}} </h1>
    
        <div class='alert alert-info'>
            <p style='display:inline-block;'> ({{$data->email}}) </p>
            <h4> {{$data->subject}} </h4>            
            <p>{{$data->message}} </p>
            <small> {{$data->created_at}} </small> <br>
            <a href="{{route('contact-data-one', $data->id)}}"> <button class='btn btn-lg btn-warning mt2'> Редактировать </button> </a>
        </div>

    
@endsection