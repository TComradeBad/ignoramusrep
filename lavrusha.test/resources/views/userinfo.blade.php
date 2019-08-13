@extends('layouts.app')

@section('content')

EMAIL : {{$user->email}}<br>
NAME : {{$user->name}}<br>
CREATED AT : {{$user->created_at}}<br>
UPDATED AT : {{$user->updated_at}}<br>
User Status : @if($user->admin)Admin @else User @endif

@endsection('content')
