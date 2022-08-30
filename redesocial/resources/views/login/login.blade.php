@extends ('base.index')

@section('container')
@if(session('erro'))
<div class="alert alert-danger" role="alert">{{session('erro')}}</div>
@endif
    <form action='{{route("login")}}' method='POST'>
        @csrf

        @include('components.field', [
            'type' => 'hidden',
            'id' => 'id',
            'name' => 'id',
            'label' => '',
            'class' => '',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'username',
            'name' => 'username',
            'label' => 'Usuário',
            'class' => 'form-control',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'password',
            'id' => 'password',
            'name' => 'password',
            'label' => 'Senha',
            'class' => 'form-control',
            'value' => '',
        ])

        @include('components.button', ['type' => 'submit', 'color' => 'primary', 'text' => 'Conectar-se'])
    </form>
@endsection
