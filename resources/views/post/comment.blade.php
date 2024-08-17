@extends('home')
@section("sidebar")
<ul>
 @foreach ($posts as $post)
     <li>{{$post->body}}</li>
 @endforeach
 </ul>
@endsection