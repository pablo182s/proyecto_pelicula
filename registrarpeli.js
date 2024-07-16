const titulo = document.getElementById("titulo")
const descripcion = document.getElementById("descripcion")
const genero = document.getElementById("genero")
const calificacion = document.getElementById("calificacion")
const anio = document.getElementById("anio")
const director = document.getElementById("director_id")
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")


form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""

    if(titulo.value.length =="" || titulo.value.length < 2){
        warnings += `El titulo no es valido <br>`
        entrar = true
    }
    if(descripcion.value.length =="" || titulo.value.length < 2){
        warnings += `La descripcion no es valida <br>`
        entrar = true
    }
    if(genero.value.length =="" || titulo.value.length < 2){
        warnings += `La descripcion no es valida <br>`
        entrar = true
    }
    if(calificacion.value.length ==""){
        warnings += `La calificacion no es valida <br>`
        entrar = true
    }
    if(anio.value =="" || anio.value < 0){
        warnings += `El año de pelicula no es valido <br>`
        entrar = true
    }
    if(director.value.length =="" || titulo.value.length < 2){
        warnings += `El director no es valido <br>`
        entrar = true
    }
    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "Enviado"
    }
})