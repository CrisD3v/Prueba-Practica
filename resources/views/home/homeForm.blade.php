<div class="container">
    <div class="mb-5" hidden id="boxTitle">
        <h2 class="text-center">Formulario <span id="typeForm"></span></h2>
    </div>

    <form action="" hidden id="formT">
        <div class="form-floating mb-3">
            <input name="nombre" type="text" id="floatingNombre" class="form-control">
            <label for="floatingNombre">NOMBRE</label>
        </div>

        <div class="form-floating mb-3">
            <input name="fecha_apertura" type="date" id="floatingFecha" class="form-control">
            <label for="floatingFecha">FECHA DE APERTURA</label>
        </div>
    </form>

    <form action="" hidden id="formP">
        <div class="form-floating mb-3">
            <input name="nombre" type="text" id="floatingNombre" class="form-control">
            <label for="floatingNombre">NOMBRE</label>
        </div>

        <div class="form-floating mb-3">
            <input name="sku" type="text" id="floatingSku" class="form-control">
            <label for="floatingSku">SKU</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="descripcion" cols="30" rows="10" id="floatingDesc" class="form-control"></textarea>
            <label for="floatingDesc">DESCRIPCION</label>
        </div>

        <div class="form-floating mb-3">
            <input name="valor" type="number" id="floatingValue" class="form-control">
            <label for="floatingValue">VALOR</label>
        </div>

        <div class="form-floating mb-3">
            <input name="tienda_id" type="text" id="floatingTienda" class="form-control">
            <label for="floatingTienda">TIENDA</label>
        </div>

        <div class="form-floating">
            <input name="imagen" type="file" id="floatingImg" class="form-control">
            <label for="floatingImg">IMAGEN</label>
        </div>
    </form>
</div>
