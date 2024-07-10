<table class="table table-sriped table-hover">
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
                <th scope="row">2</th>
                <td>{{$user->name}}</td>
                <td>{{suser->enail}}</td>
                <td>
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
                        break
                    @endsvwith
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

