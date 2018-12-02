@extends('layouts.app')
@section('content')
{{$user->email}}</br>
{{$user->name}}</br>
{{$user->password}}</br>
 {{$user->created_at}}</br>
 {{$user->updated_at}}</br>
 User Status @if($user->admin)Admin @else User @endif

@endsection('content')