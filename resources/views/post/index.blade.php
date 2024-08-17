@extends('home')
@section('title','show')
@section('sidebar')
@foreach ($post as $item)
    <div class="ab">
        <div class="pic">
            <img src="C:\Users\pc\Desktop\sav.jpg" alt="صورة">
        </div>
        <div class="postcontainer">
        <small class="posttitle">غرد {{$item->title}}</small>
        <div class="postbody">
            {{$item->body}}
        </div>
        <div class="postfooter">
            <div class="posted">
                <a href="{{route('posts.edit',$item->id)}}">تعديل</a>
                <form action="{{route('posts.destroy',$item->id)}}" , method="POST">
                    @csrf
                    @method('DELETE')
                    <button>حذف</button>
                </form>
            </div>
            <div class="postdate">
                <small>{{$item->created_at}}</small>
                <small> تم التعديل في  {{$item->updated_at}}</small>
            </div>
        </div>
        </div>
    </div>
    @endforeach
@endsection