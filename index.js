document.addEventListener("DOMContentLoaded", function() {
    fetch('index.json')
        .then(response => response.json())
        .then(data => {
            const knows = data.knows;
            const knowContainer = document.getElementById('know-cards');

            knows.forEach(know => {
                const card = `
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="${know.image}" class="card-img-top" alt="${know.name}">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">${know.name}</h5>
                                <p class="card-text">${know.description}</p>
                                <a href="${know.name}.php" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                `;
                knowContainer.innerHTML += card;
            });
        })
        .catch(error => console.error('Error loading JSON data:', error));
});
