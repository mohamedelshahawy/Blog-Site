@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="bg-red-900 text-center py-4 lg:px-4">
    <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
      <span class="flex rounded-full bg-red-500 uppercase px-2 py-1 text-xs font-bold mr-3">deleted</span>
      <span class="font-semibold mr-2 text-left flex-auto">{{session()->get('message')}} </span>
      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
  </div>
  @endif
<div class="container m-auto pt-10 pb-5 text-center">
    <h1 class="text-5xl font-bold">جميع الموضوعات</h1>
</div>
@if(Auth::check())
<div class="container sm:grid  mx-auto py-5 border-b border-gray-500 ">
    <a class="bg-green-700 text-gray-100 py-4 px-4 rounded-lg font-bold text-l place-self-start uppercase" href="/blog/create"> 
            اضف موضوعا جديدا  
  </a> 
</div>
@endif

@foreach ($posts as $post)
    

<div class="container sm:grid grid-cols-2 mx-auto gap-14 py-9 px-15 border-b border-gray-500 ">
    <div class="flex">
        <img class="object-cover"  src="/images/{{$post->image_path}}">
    </div>
    <div>
  
        <h2 class="text-4xl md:pt-0 font-bold py-5 text-gray-700 ">
           {{$post->title}}

        </h2>
    
    <div>
        By: <span class="text-gray-500 italic">{{$post->user->name}}</span>
        On <span class="text-gray-500 italic">{{date('d-m-Y' ,strtotime($post->updated_at))}}</span>
        <p class="text-gray-700 py-8 leading-6">
          {{$post->description}}
        </p>
        <a class="bg-gray-700 text-gray-100 py-4 px-4 rounded-lg font-bold text-l place-self-start uppercase" href="/blog/{{$post->slug}}"> 
            Read More
        </a>    
    </div>
    </div>
</div>
@endforeach







    
@endsection