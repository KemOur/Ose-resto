@include('partials.header')

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

        <main class="mt-8 mx-auto max-w-7xl">
            <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline">Vous partez déjà ?</span> <br>
                    <span class="block text-indigo-600 xl:inline">À bientôt</span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                    Merci de nous rendre visite ès que possible, nous vous recevrons à nouveau avec plaisir , Osé </p>
            </div>
        </main>
    </div>
</div>

<div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <div class="row justify-content-center">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-center mb-4">Réservation confirmée ✌  🤗 </h1>

                            <p class="card-text text-center">Vous pouvez à tout moment annuler votre venue en utilisant le lien présent dans l'email que nous venons de vous envoyer.</p>

                            <div class="d-grid gap-2 mt-4">
                                <a href="/" class="btn btn-outline-danger" type="button">Annuler la réservation</a>
                                <a href="/" class="btn btn-light" type="button">Retour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
