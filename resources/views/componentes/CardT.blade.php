<div id="cardsContainer"></div>

<script>
    // JavaScript
    const cardsContainer = document.getElementById('cardsContainer');

    // Hacer la solicitud Fetch
    fetch('URL_DE_TU_API')
        .then(response => response.json())
        .then(data => {
            // Manipular los datos obtenidos
            data.forEach(item => {
                // Crear una card por cada objeto en los datos
                const card = document.createElement('div');
                card.classList.add('card');
                card.style.width = '18rem';

                const image = document.createElement('img');
                image.classList.add('card-img-top', 'img-fluid');
                image.src = item.image;
                image.width = 200;
                image.height = 200;

                const cardBody = document.createElement('div');
                cardBody.classList.add('card-body');

                const title = document.createElement('h5');
                title.classList.add('card-title');
                title.textContent = item.title;

                const description = document.createElement('p');
                description.classList.add('card-text');
                description.textContent = item.description;

                const link = document.createElement('a');
                link.href = item.link;
                link.classList.add('btn', 'btn-primary');
                link.textContent = 'Ver Productos';

                // Agregar los elementos a la card
                cardBody.appendChild(title);
                cardBody.appendChild(description);
                cardBody.appendChild(link);

                card.appendChild(image);
                card.appendChild(cardBody);

                // Agregar la card al contenedor
                cardsContainer.appendChild(card);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
</script>
