@extends('layouts.app')
@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog posts
            </h1>

        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="">
            <img src="https://images.pexels.com/photos/18105/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                width="700" alt="">
        </div>
        <div class="">
            <h2 class="text-gray-700 font-bold text-5xl pb-4">Learn how to write Laravel Code</h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">Hamza</span>
            </span>, 1 day ago
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe possimus mollitia quam sed nihil illo esse
                non fugiat hic, fugit, assumenda modi odit commodi? Dignissimos reprehenderit deserunt saepe ex officiis!
            </p>
            <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
              keep reading
            </a>
        </div>
    </div>
@endsection
