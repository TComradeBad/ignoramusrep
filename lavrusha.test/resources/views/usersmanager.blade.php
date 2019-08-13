@extends('layouts.app')
@section('content')
<div>
    <table>
    @foreach($users as $user)
    <tr><td><a href="{{url('usersmanager/'.$user->id)}}">{{"$user->name    $user->email"}}</a></td>
        <td>@if(!$user->admin)<form method="Post" action="{{url('usersmanager/'.$user->id)}}">{{csrf_field()}}{{method_field('DELETE')}}<button>удалить</button></form>@endif</td><tr>
    @endforeach
    </table>
</div>
@endsection('content')