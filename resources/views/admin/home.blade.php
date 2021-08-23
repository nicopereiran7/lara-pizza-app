@extends('../layouts.adminLayout')

@section('titleAdmin', 'Iniicio | ADMIN')

@section('adminCss')
    <link rel="stylesheet" href="{{ asset('css/admin-home.css') }}">
@endsection

@section('contentAdmin')
    <div class="admin-home">
        <div class="data-cards">
            <div class="data-cards__item">
                <h2>9.894</h2>
                <p>Usuarios</p>
            </div>
            <div class="data-cards__item">
                <h2>9.894</h2>
                <p>Usuarios</p>
            </div>
            <div class="data-cards__item">
                <h2>9.894</h2>
                <p>Usuarios</p>
            </div>
            <div class="data-cards__item">
                <h2>9.894</h2>
                <p>Usuarios</p>
            </div>
        </div>
        <div class="social-cards">
            <div class="social-cards__item">
                <h3>Facebook</h3>
            </div>
            <div class="social-cards__item">
                <h3>Instagram</h3>
            </div>
            <div class="social-cards__item">
                <h3>Twitter</h3>
            </div>
        </div>
    </div>
@endsection