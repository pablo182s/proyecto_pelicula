function traerPersonajes(done) {
    const results = fetch("https://rickandmortyapi.com/api/character");

    results
        .then(response => response.json())
        .then(data => {
            done(data)
        });
}

traerPersonajes(data => {
    // console.log(data);
    data.results.forEach(personaje => {
        const container = document.createRange().createContextualFragment(/*HTML*/`
        <div class="container">
            <div class="container-card">
                <img src="${personaje.image}" alt="">
                <h2>${personaje.name}</h2>
                <p>${personaje.status}</p>
                <p>${personaje.species}</p>
            </div>
        </div>
        
        `);

        const body = document.querySelector('body');
        body.append(container);
    });
})