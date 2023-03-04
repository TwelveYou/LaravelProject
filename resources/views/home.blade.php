@extends('layouts.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <h1> Главная страница </h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ut minima unde eaque, fugit nihil animi perferendis blanditiis assumenda aperiam iusto quisquam adipisci, ad ab facere eveniet voluptatibus expedita aspernatur?
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection

