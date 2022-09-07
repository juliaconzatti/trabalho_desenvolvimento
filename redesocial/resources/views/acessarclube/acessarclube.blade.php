@extends ('base.index')
@extends ('base.navbarLogado')

    <input type='hidden' name='_token' value='{{ csrf_token() }}' />

    <table class="table table-striped my-5">
        <thead>
            <tr>
                <th>Clube</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($acessarclubes as $acessarclube)
    
                <tr>
                    <td>{{$acessarclube->nome}}</td>
                    <td>
                       <button>Teste</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>