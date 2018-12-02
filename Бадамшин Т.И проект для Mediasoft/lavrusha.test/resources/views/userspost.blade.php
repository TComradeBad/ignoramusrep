@extends('layouts.app')
@section('content')
<div>
    <?php
    echo $post->label."</br>" ;
    echo $post->text."</br>";
    echo $post->user;
    
    
    ?>
    
    
    
</div>
@endsection('content')