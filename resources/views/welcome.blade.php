<x-layout>
@if (session('message'))
    <div class="alert lert-success">
        {{session('message')}}
    </div>
@endif
@if (session('alert'))
    <div class="alert lert-danger">
        {{session('alert')}}
    </div>
@endif
<div class="continer-fluid p-5 bg-secondary-subtle tex-center">
    <div class="row justify-content-center">
        <div class="col-5">
            <strong> <h1 class="display-9">The Aulab Post</h1></strong>
        </div>
    </div>
</div>
        <div class="container my-5">
            <div class="row justify-content-evenly">
                @foreach ($articles as $article)
                    <div class="col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                alt="Immagine dell'articolo: {{$article->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-subtitle">{{ $article->subtitle }}</p>
                                <p class="small text-muted">Categoria:
                                    <a href="#" class="text-capitalize text-muted">{{ $article->category->name }}</a>
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p>Registato il {{$article->created_at->format('d/m/Y')}} <br>
                                    da {{$article->user->name}}</p>
                                <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</x-layout>
