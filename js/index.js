let seleccinados = [];

 const obtenerSeleccionados = async (url) => {
    await fetch(url)
    .then(res => res.json())
    .then(data => {
        console.log(seleccionados);
    })
    .catch(err => console.log(err));
}

 obtenerSeleccionados
