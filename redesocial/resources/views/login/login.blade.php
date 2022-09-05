@extends ('base.index')
@extends ('base.navbarCriar')

<div class="mx-auto" style="width: 90%;" id="divforms">

@section('container')
@if(session('erro'))

<div class="alert alert-danger" role="alert">{{session('erro')}}</div>
@endif
    <form action='{{route("login")}}' method='POST'>
        @csrf

        <div class="forms_log">
            <div class="form-group row">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="d-flex flex-column my-5">
                <h1>Você voltou!💖</h1>
                <p>Não esqueça de contar <br>
                    o que está achando das suas leituras!</p>

        @include('components.field', [
            'type' => 'hidden',
            'id' => 'id',
            'name' => 'id',
            'label' => '',
            'class' => '',
            'placeholder' => '',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'username',
            'name' => 'username',
            'label' => '',
            'class' => 'form-control',
            'placeholder' => 'Usuário',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'password',
            'id' => 'password',
            'name' => 'password',
            'label' => '',
            'class' => 'form-control',
            'placeholder' => 'Senha',
            'value' => '',
        ])

        @include('components.button', ['type' => 'submit', 'id' => 'btn', 'color' => 'btn btn-outline-dark', 'text' => 'Conectar-se'])

        <p class="mt-3 text-center">Ainda não possui uma conta? <a class="bnt-link-primary" href="/criarconta/" title=""><b>Cadastre-se</b></a></p>
    </form>
@endsection
</div>