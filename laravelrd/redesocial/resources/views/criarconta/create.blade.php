@extends ('base.index')

@section('container')
    <form action='/criarconta/store' method='POST'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}' />

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
            'id' => 'usuario',
            'name' => 'usuario',
            'label' => 'Usuário',
            'class' => 'form-control',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'email',
            'id' => 'email',
            'name' => 'email',
            'label' => 'Email',
            'class' => 'form-control',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'password',
            'id' => 'senha',
            'name' => 'senha',
            'label' => 'Senha',
            'class' => 'form-control',
            'value' => '',
        ])

        @include('components.button', ['type' => 'submit', 'color' => 'primary', 'text' => 'Cadastrar-se'])
    </form>
@endsection
