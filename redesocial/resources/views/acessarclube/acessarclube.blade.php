@extends ('base.index')
@extends ('base.navbarLogado')

    <input type='hidden' name='_token' value='{{ csrf_token() }}' />
    <br>

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
                       <a href="{{route('acc.clube', $acessarclube->id )}}" class="btn btn-outline-dark" name="acessar" id="acessar">Acessar clube</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>