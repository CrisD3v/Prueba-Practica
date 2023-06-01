<div id="cardsContainer" class="d-flex flex-wrap"></div>

<script>
    // JavaScript
    const cardsContainer = document.getElementById('cardsContainer');
    const id = document.getElementById('id').value;

    // Hacer la solicitud Fetch
    fetch(`/productoTienda/${id}`)
        .then(response => response.json())
        .then(data => {
            // Manipular los datos obtenidos
            data.forEach(item => {
                const imagenUrl = `{{ asset('storage') }}/${item.imagen}`;

                console.log(data);
                // Crear una card por cada objeto en los datos
                const card = document.createElement('div');
                card.classList.add('card', 'm-2');
                card.style.width = '18rem';

                const image = document.createElement('img');
                image.classList.add('card-img-top', 'img-fluid');
                image.src = imagenUrl;
                image.width = 200;
                image.height = 200;

                const cardBody = document.createElement('div');
                cardBody.classList.add('card-body');

                const title = document.createElement('h5');
                title.classList.add('card-title');
                title.textContent = item.nombre;

                const subtitle = document.createElement('h6');
                subtitle.classList.add('card-subtitle', 'mb-2', 'text-body-secondary');
                subtitle.textContent = item.sku;

                const description = document.createElement('p');
                description.classList.add('card-text');
                description.textContent = item.descripcion;

                const price = document.createElement('p');
                price.classList.add('card-link');
                price.textContent = item.valor;

                const buyLink = document.createElement('a');
                buyLink.href = item.buyLink;
                buyLink.classList.add('btn', 'btn-primary');
                buyLink.textContent = 'BUY';

                // Agregar los elementos a la card
                card.appendChild(image);
                cardBody.appendChild(title);
                cardBody.appendChild(subtitle);
                cardBody.appendChild(description);
                cardBody.appendChild(price);
                cardBody.appendChild(buyLink);

                card.appendChild(cardBody);

                // Agregar la card al contenedor
                cardsContainer.insertAdjacentElement('afterbegin', card);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
</script>
