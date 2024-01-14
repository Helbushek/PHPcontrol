@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
<h1>Главная Страница</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis earum fugiat modi, pariatur consequuntur hic quaerat deleniti facere dolorum unde, voluptatem labore doloribus fugit adipisci tempore voluptas eaque dolor. Expedita?</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
    
@endsection
