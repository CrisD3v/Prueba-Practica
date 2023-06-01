<div id="cardsContainer" class="d-flex flex-wrap"></div>

<script>
    // JavaScript
    const cardsContainer = document.getElementById('cardsContainer');

    // Hacer la solicitud Fetch
    fetch('/tiendas')
        .then(response => response.json())
        .then(data => {
            console.log(data)
            // Manipular los datos obtenidos
            data.forEach(item => {
                // Crear una card por cada objeto en los datos
                const card = document.createElement('div');
                card.classList.add('card','m-2');
                card.style.width = '18rem';



                const cardBody = document.createElement('div');
                cardBody.classList.add('card-body');

                const title = document.createElement('h5');
                title.classList.add('card-title');
                title.textContent = item.nombre;

                const description = document.createElement('p');
                description.classList.add('card-text');
                description.textContent = item.fecha_apertura;

                const link = document.createElement('a');
                link.href = `/listProductos/${item.id}`;
                link.classList.add('btn', 'btn-primary');
                link.textContent = 'Ver Productos';

                // Agregar los elementos a la card
                cardBody.appendChild(title);
                cardBody.appendChild(description);
                cardBody.appendChild(link);

                card.appendChild(cardBody);

                // Agregar la card al contenedor
                cardsContainer.appendChild(card);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
</script>
