<div class="container">
    <div class="mb-5" hidden id="boxTitle">
        <h2 class="text-center">Formulario <span id="typeForm"></span></h2>
    </div>

    <form action="" hidden id="formT">
        <div class="form-floating mb-3">
            <input required name="nombre" type="text" id="floatingNombre" class="form-control">
            <label for="floatingNombre">NOMBRE</label>
        </div>

        <div class="form-floating mb-3">
            <input required name="fecha_apertura" type="date" id="floatingFecha" class="form-control">
            <label for="floatingFecha">FECHA DE APERTURA</label>
        </div>
    </form>

    <form action="" hidden id="formP">
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
            <select required class="form-select text-center" id="selectForm" onchange="typeForm(this.value)">
                <option selected disabled>SELECCIONE UNA TIENDA</option>
                <option value="1">Tienda</option>
                <option value="2">Productos</option>
            </select>
            <label for="floatingTienda">TIENDA</label>
        </div>

        <div class="form-floating">
            <input required name="imagen" type="file" id="floatingImg" class="form-control">
            <label for="floatingImg">IMAGEN</label>
        </div>
    </form>
</div>
