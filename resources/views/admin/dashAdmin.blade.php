@extends('layouts.app_3')

@section('content')
<div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <div class="mr-5">AGREGAR PRODUCTO</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('addProdIndex')}}">
                    <span class="float-left">Agregar</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="mr-5">PRODUCTOS</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{route('productindex')}}">
                    <span class="float-left">Ver</span>
                    <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                </a>
            </div>
        </div>
    <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div class="mr-5">AGREGAR ADMIN</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Ir</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
</div>
@endsection