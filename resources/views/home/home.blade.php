@include('global.index')
@extends('global.scripts')

<style>
    .alerta {
        width: 100%;
        padding: 16px;
        color: #faced2;
        background: #8b5f63;
        border: #ea868f;
        transition: all ease-in 2000ms
    }

    @keyframes fadeOut {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }

    .hidden {
        animation: fadeOut 1.5s ease-in-out forwards;
    }
</style>

<div class="W-100 mt-5">
    @if ($errors != '[]')
        <div class="alerta" id='alert'>
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-center  flex-grow-1" style="margin-bottom: 0; text-transform: uppercase;">{{ $errors }}</p>
                <span class="ml-auto" style="cursor: pointer;" onclick="hiddenAlert()">X</span>
            </div>
        </div>
    @endif


    <div class="d-flex justify-content-center align-items-center">
        @include('componentes.CardT')
    </div>
</div>


<script>
    // OCULTAR ALERTA
    function hiddenAlert() {
        let alert = document.getElementById('alert');
        alert.addEventListener('animationend', function() {
            alert.setAttribute('hidden', true);
        });
        alert.classList.add('hidden');

    }
</script>
