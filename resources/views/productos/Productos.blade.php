@extends('global.head')

<div class="w-100">
    <div class="m-5">
        <a href="/" class="btn btn-success">REGRESAR</a>
        <input type="hidden" id="id" value="{{$id}}">
    </div>

    <div class="">
        <div class="">
            {{-- <h2>LISTA DE PRODUCTOS DE {{$nameTienda}}</h2> --}}
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="d-flex flex-row mb-3">
                @include('componentes.CardP')
            </div>
        </div>
    </div>
</div>
