@extends('home')
@section('sidebar')
<div class="ContainerInsert">
    <div>
        <h1>تعديل بيانات الورقة</h1>
    </div>
    <div class="InputsInsert">
        <form action="{{route('posts.update',$post->id)}}" method="post">
            @method('PUT')
            @csrf
            <div>
                <label for="title">عنوان الورقة</label>
                <input type="text" name="title" id="title" value='{{$post->title}}'>
            </div>
            <div>
                <label for="body">محتوى الورقة</label>
                <textarea name="body" id="body" cols="30" rows="10" >{{$post->body}}</textarea>
            </div>
            <input type="submit" value="إرسال">
        </form>
    </div>
</div>
@endsection