@extends('home')
@section('title','Data-Insert')
@section('sidebar')
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div class="ContainerInsert">
    <div>
        <h1>بيانات الورقة</h1>
    </div>
    <div class="InputsInsert">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div>
                <label for="title">عنوان الورقة</label>
                <input type="text" name="title" id="title" value="{{old('title')}}">
                @error("title")
                <div class="error">
                    <h1>{{$message}}</h1>
                </div>
                @enderror
            </div>
            <div>
                <label for="body">محتوى الورقة</label>
                <textarea name="body" id="body" cols="30" rows="10" placeholder="محتوى الورقه" value="{{old('body')}}"></textarea>
                @error("body")
                <div class="error">
                    <h1>{{$message}}</h1>
                </div>
                @enderror
            </div>
            <input type="submit" value="إرسال">
        </form>
    </div>
</div>
@endsection