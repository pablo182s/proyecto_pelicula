const nombre = document.getElementById("name")
const apellido = document.getElementById("lastname")
const edad = document.getElementById("age")
const fecha = document.getElementById("fecha")
const email = document.getElementById("email")
const pass = document.getElementById("password")
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""
    if(nombre.value.length <3){
        warnings += `El nombre no es valido <br>`
        entrar = true
    }
    if(apellido.value.length <2){
        warnings += `El apellido no es valido <br>`
        entrar = true
    }
    if(edad.value < 0 || edad.value > 110 || edad.value.length == 0){
        warnings += `La edad no es valida <br>`
        entrar = true
    }
    if(parseInt(String(fecha.value).substring(0,4)) > 2006 || fecha.value.length == 0){
        warnings += `La fecha no es valida <br>`
        entrar = true
    }
    if(!regexEmail.test(email.value)){
        warnings += `El email no es valido <br>`
        entrar = true
    }
    if(pass.value.length < 8){
        warnings += `La contraseña no es valida <br>`
        entrar = true
    }

    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "Registrado"
    }
})