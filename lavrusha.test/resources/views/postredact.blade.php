@extends('layouts.app')
@section('content')

<form method="POST" action="{{url('/postredactor')}}">
    {{csrf_field()}}
    <input type="text" name="name" ><br/>
    <textarea cols="255" rows="30" name="text"></textarea>
    <button type="submit">Добавить пост</button>
    
</form>
@endsection('content')
