<div class="container">
    <div class="mb-5" hidden id="boxTitle">
        <h2 class="text-center">Formulario <span id="typeForm"></span></h2>
    </div>

    <form action="{{ route('tiendas.store') }}" hidden id="formT" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input required name="nombre" type="text" id="floatingNombre" class="form-control">
            <label for="floatingNombre">NOMBRE</label>
        </div>

        <div class="form-floating mb-3">
            <input required name="fecha_apertura" type="text" id="floatingFecha" class="form-control"
                pattern="\d{2}/\d{2}/\d{4}" title="Ingrese la fecha en formato dd/mm/YYYY" oninput="formatFecha(this)">
            <label for="floatingFecha">FECHA DE APERTURA</label>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-success w-100">Registrar</button>
        </div>
    </form>

    <form action="{{ route('productos.store') }}" hidden id="formP" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input required name="nombre" type="text" id="floatingNombre" class="form-control">
            <label for="floatingNombre">NOMBRE</label>
        </div>

        <div class="form-floating mb-3">
            <input required name="sku" type="text" id="floatingSku" class="form-control">
            <label for="floatingSku">SKU</label>
        </div>

        <div class="form-floating mb-3">
            <textarea required name="descripcion" cols="30" rows="10" id="floatingDesc" class="form-control"></textarea>
            <label for="floatingDesc">DESCRIPCION</label>
        </div>

        <div class="form-floating mb-3">
            <input required name="valor" type="number" id="floatingValue" class="form-control">
            <label for="floatingValue">VALOR</label>
        </div>

        <div class="form-floating mb-3">
            <select required class="form-select text-center" name="tienda_id">
                @if ($tiendas == '[]')
                    <option value="" selected disabled>NO HAY TIENDAS REGISTRADAS</option>
                @else
                    <option selected disabled>SELECCIONE UNA TIENDA</option>
                    @foreach ($tiendas as $tienda)
                        <option value="{{ $tienda->id }}">{{ $tienda->nombre }}</option>
                    @endforeach
                @endif
            </select>
            <label for="floatingTienda">TIENDA</label>
        </div>

        <div class="form-floating mb-3">
            <input required name="imagen" type="file" id="floatingImg" class="form-control">
            <label for="floatingImg">IMAGEN</label>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-success w-100">Registrar</button>
        </div>
    </form>
</div>


<script async>
    function formatFecha(input) {
        let value = input.value;
        let formattedValue = value.replace(/\D/g, ''); // Eliminar todos los caracteres que no sean dígitos
        if (formattedValue.length >= 2) {
            formattedValue = formattedValue.replace(/(\d{2})(\d{0,2})(\d{0,4})/, '$1/$2/$3');
        } else if (formattedValue.length >= 4) {
            formattedValue = formattedValue.replace(/(\d{2})(\d{2})(\d{0,4})/, '$1/$2/$3');
        }
        input.value = formattedValue;

    }
</script>
