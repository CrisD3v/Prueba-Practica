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

                const cardBody = document.createElement('div');
                cardBody.classList.add('card-body');

                const title = document.createElement('h5');
                title.classList.add('card-title');
                title.textContent = item.title;

                const subtitle = document.createElement('h6');
                subtitle.classList.add('card-subtitle', 'mb-2', 'text-body-secondary');
                subtitle.textContent = item.subtitle;

                const description = document.createElement('p');
                description.classList.add('card-text');
                description.textContent = item.description;

                const price = document.createElement('p');
                price.classList.add('card-link');
                price.textContent = item.price;

                const buyLink = document.createElement('a');
                buyLink.href = item.buyLink;
                buyLink.classList.add('card-link');
                buyLink.textContent = 'BUY';

                // Agregar los elementos a la card
                cardBody.appendChild(title);
                cardBody.appendChild(subtitle);
                cardBody.appendChild(description);
                cardBody.appendChild(price);
                cardBody.appendChild(buyLink);

                card.appendChild(cardBody);

                // Agregar la card al contenedor
                cardsContainer.appendChild(card);
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
</script>
