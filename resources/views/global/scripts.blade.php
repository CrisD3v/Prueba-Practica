<script async>
    const formT = document.getElementById('formT');
    const formP = document.getElementById('formP');
    const title = document.getElementById('typeForm');
    const boxTitle = document.getElementById('boxTitle');

    function typeForm(value) {

        if (value == 1) {
            formT.removeAttribute("hidden")
            title.innerHTML = "Tienda"
            formP.setAttribute("hidden", true)
            boxTitle.removeAttribute("hidden")
        } else if (value == 2) {
            formP.removeAttribute("hidden")
            title.innerHTML = "Producto"
            formT.setAttribute("hidden", true)
            boxTitle.removeAttribute("hidden")
        } else {
            formT.setAttribute("hidden", true)
            formP.setAttribute("hidden", true)
            boxTitle.setAttribute("hidden", true)
        }

        return;
    }
</script>
