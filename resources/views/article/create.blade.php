<x-layout>
       <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Inserisci un articolo</h1>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12 col-nd-8">
                <form action="{{route('article.store')}}" method="post" class="card p-5 shadow" enctype="multipart/form-data">
                @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                             @error('title')
                                <span class="text-danger">(($message))</span>
                             @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sottotitolo</label>
                            <input type="text" name="subtitle" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                            @error('subtitle')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                                <label for="image" class="form-label">Immagine</label>
                                <input type="file" name="image" class="form-control" id="image">
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select name="category" id="category" class="form-control"> <option selected disabled>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                            @error('category')

                        <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <diy class="mb-3">
                            <Label for="body" class="form-Label">Corpo del testo</labet>
                            <textarea name="body" class="form-control" id="body" cols="30" rows="7">{{old('body')}}</textarea>
                            @error('body')
                            <but class="text-danger">{{$message}}</span>
                            @enderror
                        <div class="mt-3 d-flex justify-content-center flex-colunn align-itens-center">
                            <button type="subnit" class="btn btn-outline-secondary"> Inserisci articoli </button>
                        <a href="{{route('homepage')}}" class="text-secondary mt-1"> Torna alla hone </a>
                    </div>
                </form>
            </div>
       </div>
    </div>
</x-layout>
