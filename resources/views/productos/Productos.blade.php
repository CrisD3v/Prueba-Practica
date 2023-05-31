@extends('global.head')

<div class="">
    <a href="" class="btn btn-success">REGRESAR</a>
</div>

<div class="W-100 mt-5">
    <div class="">
        {{-- <h2>LISTA DE PRODUCTOS DE {{$nameTienda}}</h2> --}}
    </div>
    <div class="d-flex justify-content-center align-items-center">
        @include('componentes.CardP')
    </div>
</div>
