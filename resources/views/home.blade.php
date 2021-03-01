@include('partials.header')
@extends('layouts.default')

@if (session('status'))
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
            <span class="inline-block align-middle">
                {{ session('status') }}
            </span>
    </div>
@endif

@if ($errors->any())
    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-pink-500">
            <span class="inline-block align-middle">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </span>
    </div>
@endif

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-8xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">

            <!--
              Mobile menu, show/hide based on menu open state.

              Entering: "duration-150 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
              Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->

            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Cuisine Africaine </span>
                        <span class="block text-indigo-600 xl:inline">Restaurant Osé</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Osé African cuisine rend les saveurs de la cuisine africaine, accessible à tous.                        </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="/reservation" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                Réserver
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="./img/Ose_Food.jpg" alt="">
    </div>
</div>



<div class="container mt-5 text-center">

    <h2 class="mb-5">Horaires</h2>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Lundi</th>
                <th scope="col">Mardi</th>
                <th scope="col">Mercredi</th>
                <th scope="col">Jeudi</th>
                <th scope="col">Vendredi</th>
                <th scope="col">Samedi</th>
                <th scope="col">Dimanche</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>9h - 18h</td>
                <td>9h - 18h</td>
                <td>9h - 18h</td>
                <td>9h - 18h</td>
                <td>9h - 18h</td>
                <td class="text-muted"><em>Fermé</em></td>
                <td class="text-muted"><em>Fermé</em></td>
            </tr>
            </tbody>
        </table>
    </div>

    <h2 class="my-5">Informations pratiques</h2>

    <div id="map" style="height: 350px; width: 100%;"></div>
    <br>
    <br>
</div>

@include('partials.footer')
