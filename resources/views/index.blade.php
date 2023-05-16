@extends('layouts.app')
@section('content')
 {{-- hero --}}
<div class=" hero-bg-image flex flex-col items-center justify-center text-center ">
    <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10">welcome from my blog</h1>
    <a href="/" class="bg-gray-100 text-gray-700 py-5 px-10 rounded-lg text-xl uppercase font-bold ">start reading</a>
</div>
{{-- end hero --}}
{{-- expert div --}}
<div class="container sm:grid grid-cols-2 gap-14 mx-auto py-10">
    <div class="mx-2 md:mx-0" >
        <img class="sm:rounded-lg" src="https://picsum.photos/id/239/900/500">

    </div>
    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h1 class="font-bold text-gray-700 uppercase text-4xl">how to be an expert in 2023</h1>

        <p class="font-bold text-gray-600 text-xl pt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit.molestiae aut incidunt!</p>

        <p class="py-4 text-gray-500 text-sm leading-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto esse asperiores numquam. At accusantium aliquid aut, beatae saepe
             recusandae dolore nobis atque ab ipsam quibusdam!</p>

             <a class="bg-gray-700 text-gray-100 py-4 px-4 rounded-lg font-bold text-l place-self-start uppercase" href="/"> Read More</a>
    </div>
</div>

{{-- blog categories --}}
<div class="text-center p-20 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4 ">
        <div class="font-bold text-3xl py-2">Ux Design</div>
        <div class="font-bold text-3xl py-2">Programming</div>
        <div class="font-bold text-3xl py-2">Graphic Design</div>
        <div class="font-bold text-3xl py-2">Front-End</div>
        
    </div>
</div>
{{-- recent posts --}}
<div class="container mx-auto text-center m-10 ">
    <h2 class=" font-bold text-4xl py-10">Recent Posts</h2>
    <p class="text-gray-400  leading-6 px-10">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus alias temporibus quasi animi odit. Amet incidunt, reprehenderit rerum eum error totam culpa odit enim, voluptatum debitis ex soluta adipisci omnis!</p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block  m-auto pt-4 pb-15 w-4/5 ">
            <ul class="md:flex text:xs gap-2">
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100"><a href="/">Php</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100"><a href="/">Programming</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100"><a href="/">Languages</a></li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100"><a href="/">Back-End</a></li>
            </ul>
            <h3 class="text-l py-10 leading-6 text-gray-100 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur minus accusantium id? Fugiat nobis ut consequuntur excepturi ad est obcaecati, rerum laborum natus enim, at doloremque autem magni impedit ducimus adipisicing elit. Tenetur minus accusantium id? Fugiat nobis ut consequuntur excepturi ad est obcaecati, rerum laborum natus enim, at doloremque autem magni impedit ducimus!</h3>
            <a href="/" class="bg-transparent mb-10  border-2 text-gray-100 py-4 px-5 rounded-lg text-bold uppercase text-l inline-block">Read More</a>
        </div>
    </div>
    <div class="flex">
        <img class="object-cover"  src="https://picsum.photos/id/242/900/500">

    </div>
</div>

    
@endsection