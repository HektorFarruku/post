<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-cente">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Bentornato, Revisore {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articlo da revissionare</h2>
                <x-requests-table: roleRequests="$adminRequests" role="amministratore"/>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articolo publicati</h2>
                <x-articles-table: :articles="$acceptedArticles"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articolo respinti</h2>
                <x-articles-table: :articles="$rejectedArticles"/>
            </div>
        </div>
    </div>
</x-layout>
