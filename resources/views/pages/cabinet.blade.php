@extends('templates.'.$template)

@section('content')
    Кабинет
    <form action="/logout" method="GET">
        @csrf
        <input type="submit" value="Logout">
    </form>
@endsection