@include('global.index')
@extends('global.scripts')

<div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center">
        <div class=" W-25 mb-4">
            <select class="form-select text-center" id="selectForm"  onchange="typeForm(this.value)">
                <option selected>SELECCIONE EL TIPO DE FORMULARIO</option>
                <option value="1">Tienda</option>
                <option value="2">Productos</option>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        @include('home.homeForm')
    </div>
</div>
