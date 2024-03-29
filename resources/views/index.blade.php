@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">Do you want to become a Developer
                    ?</h1>
                <a class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase" href="/blog">
                    Read more
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="">
            <img src="https://images.pexels.com/photos/18105/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer ?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur corrupti cupiditate voluptatem
                reiciendis.
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere itaque non beatae obcaecati sequi aliquam.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find out
                more</a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I am an expert in...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            UX Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Develepment
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s font-extrabold text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">Recent posts</h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, doloremque quos consequuntur quia optio autem
            debitis, quisquam animi dolore adipisci aspernatur expedita! Error molestiae provident aspernatur, obcaecati
            veniam est modi.
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse maiores dignissimos culpa excepturi
                    accusamus tempore a iste minus officiis. Delectus aperiam ullam cumque, ex amet qui similique! Mollitia,
                    enim recusandae!
                </h3>
                <a class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl  "
                    href="">
                    find out more
                </a>
            </div>
        </div>
        <div class="">
            <img src="https://images.pexels.com/photos/18105/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                width="700" alt="">
        </div>
    </div>
@endsection
