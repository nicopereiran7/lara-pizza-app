@extends('layouts.layout')

@section('title')
    @yield('titleAdmin')
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-layout.css') }}">
    @yield('adminCss')
@stop

@section('content')
  <div class="admin-layout">
    <div class="admin-header">
      <h2>Administracion</h2>
    </div>
    <div class="admin-data">
      <div class="admin__menu-side">
        <a href="/admin" class="link">
          <div class="menu-item {{ request()->routeIs('admin.home') ? 'active-admin' : '' }}">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </div>
        </a>
        <a href="/admin/usuarios" class="link">
          <div class="menu-item {{ request()->routeIs('admin.users') ? 'active-admin' : '' }}">
            <i class="fas fa-users"></i>
            <span>Usuarios</span>
        </div>
      </a>
        <a href="/admin/productos" class="link">
          <div class="menu-item {{ request()->routeIs('admin.products') ? 'active-admin' : '' }}">
            <i class="fas fa-dolly-flatbed"></i>
            <span>Productos</span>
          </div>
        </a>
        <a href="/admin" class="link">
          <div class="menu-item {{ request()->routeIs('admin.types') ? 'active-admin' : '' }}">
            <i class="far fa-clipboard"></i>
            <span>Tipos</span>
          </div>
        </a>
        <a href="/admin/promociones" class="link">
          <div class="menu-item {{ request()->routeIs('admin.promo') ? 'active-admin' : '' }}">
            <i class="fas fa-dumpster"></i>
          <span>Promociones</span>
        </div
        ></a>
      </div>
      <div class="admin__content">
        @yield('contentAdmin')
      </div>
    </div>
  </div>
@stop