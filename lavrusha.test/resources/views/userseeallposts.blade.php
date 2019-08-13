@extends('layouts.app')
@section('content')
<div>
    @if(Auth::user())
    <a href="{{route('postredactor')}}">Добавить пост</a><br/>
    @endif()
    <table>
    @foreach($posts as $post)
    <tr><td><a href="{{url('readposts/'.$post->id)}}">{{$post->label}}</a><tr>
    @endforeach
    </table>
</div>
@endsection('content')