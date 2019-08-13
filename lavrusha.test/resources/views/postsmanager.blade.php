@extends('layouts.app')
@section('content')
    <div>
        <table>
            @foreach($posts as $post)
                <tr>
                    <td><a href="{{url('postsmanager/'.$post->id)}}">{{$post->label}}</a></td>
                    <td>
                        <form method="POST"
                              action="{{url('postsmanager/'.$post->id)}}">{{csrf_field()}}{{method_field('DELETE')}}
                            <button>удалить</button>
                    </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection('content')
