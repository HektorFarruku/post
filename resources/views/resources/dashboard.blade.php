<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-cente">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Bentornato, Amministratore {{Auth::user()->name}}</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{session(massage)}}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per il ruolo di amministratore</h2>
                <x-requests-table: roleRequests="$adminRequests" role="amministratore"/>
                <table class=" table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Azione</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($roleRequests as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{suser->enail}}</td>
                                </tr>
                                    @switch($role)
                                        @case('amministratore')
                                            <form action="{(route('admin.setAdmin', {{$user)}}" method="POST">
                                                @csrf
                                                @method("PATCH")
                                                <button type="submit" class="btn btn-secondary">Attiva {{$role}}</button>
                                            </form>
                                            @break
                                        @casel(revisore')
                                            <form action="((route('admin.setRevisor', $user)}}" method="POST">
                                                @csrf
                                                @method("PATCH")
                                                <button type="submit" class="btn btn-secondary">Attiva {{$role}}</button>
                                            </form>
                                            @break
                                        @case(redattore')
                                            <form action="{{route('adnin.setWriter', $user)}}" method="POST">
                                                @csrf
                                                @method("PATCH")
                                                <button type="submit" class="btn btn-secondary">Attiva {{$role}}</button>
                                            </form>
                                        @break
                                    @endswitch
                                </td>
                            <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
