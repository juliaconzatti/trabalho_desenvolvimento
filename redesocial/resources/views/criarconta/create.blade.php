
@extends ('base.index')
@extends ('base.navbarCriar')



    <form action='/criarconta/store' method='POST'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />

        <div class="forms_log">
            <div class="form-group row">
        <div class="d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column my-5">
                <div class="my-5">
                <h1>Bem-vindo!✨</h1>
                <p>Cadastre-se para compartilhar suas <br>
                     leituras e fazer amigos :)</p>


        @include('components.field', [
            'type' => 'hidden',
            'id' => 'id',
            'name' => 'id',
            'label' => '',
            'class' => '',
            'value' => '',
            'placeholder' => '',
        ])

        @include('components.field', [
            'type' => 'text',
            'id' => 'name',
            'name' => 'name',
            'label' => '',
            'class' => 'form-control',
            'placeholder' => 'Nome',
            'value' => '',
        ])

                @include('components.field', [
            'type' => 'email',
            'id' => 'email',
            'name' => 'email',
            'label' => '',
            'class' => 'form-control',
            'placeholder' => 'Email',
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

        @include('components.button', ['type' => 'submit', 'id' => 'btn', 'color' => 'btn btn-outline-dark', 'text' => 'Cadastrar-se'])

        <p class="mt-3 text-center">Já possui uma conta? <a class="bnt-link-primary" href="/login" title=""><b>Conecte-se</b></a></p>
    </form>
</div>

