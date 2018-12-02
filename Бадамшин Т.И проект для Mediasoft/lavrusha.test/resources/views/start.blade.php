@extends('layouts.app')
@section('content')
@if(Auth::user()->admin ?? false)
<div>
    Пользователь админ<br/>
    <a href="/postsmanager">Управление постами</a><br/>
    <a href="/usersmanager">Доминация над пользователями</a><br/>
    
</div>
@else
просто челик
@endif
<div>
   <a href='/readposts'>Смотреть Посты</a>
    
</div>
@endsection('content')
