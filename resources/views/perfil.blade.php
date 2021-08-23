@extends('layouts.layout')

@section('css')
  <link rel="stylesheet" href="{{ asset('/css/perfil.css') }}">
@endsection

@section('title', 'Tu Perfil | Papa Johns')

@section('content')
    <div class="mi-perfil">
        @if (Auth::user()->isAdmin)
        <div class="admin">
            <a href="/admin">Ir al Panel de Administracion</a>
        </div>
        @endif
        <div class="content">
            <div class="cards">
                <div class="cards-item">
                    <div class="card__header">
                        <i class="far fa-user"></i>
                        <h2>Mis Datos</h2>
                    </div>
                    <hr class="separator">
                    <div class="card__content">
                        <h1>{{ Auth::user()->name }}</h1>
                        <div class="data">
                            <i class="far fa-envelope"></i>
                            <p>{{ Auth::user()->email }}</p>
                        </div>
                        <form method="POST" action="/logout">
                            @csrf
                            <i class="fas fa-external-link-alt"></i>
                            <a href="#" onclick="this.closest('form').submit()">SALIR DE LA CUENTA</a>
                        </form>
                    </div>
                </div>
                <div class="cards-item">
                    <h2>Codigo</h2>
                </div>
                <div class="cards-item item-edit">
                    <p>No tienes puntos disponibles</p>
                </div>
                <div class="cards-item">
                    <div class="card__header">
                        <i class="fas fa-map-marker-alt"></i>
                        <h2>Mis Direcciones</h2>
                    </div>
                    <hr class="separator">
                    <div class="card__content">
                        <p>No tienes direcciones guardadas</p>
                    </div>
                </div>
                <div class="cards-item">
                    <div class="card__header">
                        <i class="fas fa-tag"></i>
                        <h2>Mis Cupones</h2>
                    </div>
                    <hr class="separator">
                    <div class="card__content">
                        <p>No tienes cupones usados</p>
                    </div>
                </div>
                <div class="cards-item">
                    <div class="card__header">
                        <i class="far fa-credit-card"></i>
                        <h2>Mis Tarjetas</h2>
                    </div>
                    <hr class="separator">
                    <div class="card__content">
                        <p>No tienes cupones usados</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection