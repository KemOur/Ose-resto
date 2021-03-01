@include('partials.header')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
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
            <main class="mt-10 mx-auto max-w-7xl px-8 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Réservez votre place</span><br>
                        <span class="block text-indigo-600 xl:inline"> Bon appétit !</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Ce petit restaurant aux lignes modernes offre des recettes africaines dans des boîtes sur place et à emporter.                    </p>
                </div>
            </main>
        </div>
    </div>


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



    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <br>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="/reservation">
                            @csrf
                            <label  for="api_token" style="display: none;">api token</label>
                            <input type="hidden" name="api_token" value="{{md5(uniqid(true))}}" required="">

                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="" min="2021-02-21" required="">

                            <div class="my-3">
                                <label for="heure" class="form-label">Heure</label>
                                <input type="time" id="heure" class="form-control" name="heure" min="09:00" max="18:00" step="3600" required="">
                            </div>
                            <div class="my-3">
                                <label for="emails" class="form-label">Votre adresse e-mail</label>
                                <input type="email" class="form-control" id="emails" name="emails" placeholder="osé@gmail.com" value="" required="">
                            </div>

                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" id="cgu" name="cgu" required="">
                                <label class="form-check-label" for="cgu">
                                    J'ai lu et accepté les <a href="#">conditions d'utilisation</a>
                                </label>
                            </div>

                            <div class=" d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-primary">Réserver</button>
                                <a href="/" class="btn btn-light" type="button">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')

