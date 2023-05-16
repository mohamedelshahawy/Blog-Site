@extends('layouts.app')
@section('content')
<div class="container m-auto pt-10 pb-5 text-center">
    <h1 class="text-5xl font-bold">تعديل الموضوع</h1>
</div>
<div class="container blog_form m-auto pt-10 pb-5 ">
<form 
     action="/blog/{{$post->slug}}"
     method="POST"
     enctype="multipart/form-data">
     @csrf
     @method("PUT");
     
    <input type="text"
     name="title"
     value="{{$post->title}}"
     class="w-full h-20 text-5xl rounded-lg shadow-lg border-transparent p-15 mb-4 "
     >
    <textarea 
    name="description"
    
    class="w-full h-50 text-l blog_form rounded-lg shadow-lg  p-15 mb-4 ">
    {{$post->description}}
    </textarea>
    <div class="py-14">
        <label
           class="
           bg-gray-200 hover:bg-gray-700
           text-gray-700 hover:text-gray-200
           transition duration-300
           cursor-pointer
           p-5 rounded-lg
           text-bold uppercase
           "
        >
            <span>Select An Image</span>
            <input type="file" name="image" class="hidden">
        </label>

    </div>
    <button
    class="
    bg-green-700 hover:bg-green-200
    text-gray-200 hover:text-gray-700
    transition duration-300
    cursor-pointer
    p-5 rounded-lg
    text-bold uppercase
    "
     type="submit">save post</button>
</form>
</div>







    
@endsection