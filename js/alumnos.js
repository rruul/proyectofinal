const infoservicios = document.getElementById('servs')
const barra = document.getElementById('barra')
const cardservs = document.getElementById('cardservs').content
const fragment = document.createDocumentFragment()


document.addEventListener('DOMContentLoaded', () =>{
    console.log(usuarios)
    servs_elec(usuarios)
})


const servs_elec = (servicio) => {
    servicio.forEach((serv) => {
        cardservs.querySelector('.nombre').innerHTML = serv.nombrecompleto
        cardservs.querySelector('.correo').innerHTML = "<b>Correo:</b>"+" "+serv.correo
        const refmail = "mailto:"+serv.correo
        cardservs.querySelector('.mailto').setAttribute("href", refmail)

        cardservs.querySelector('.conmutador').innerHTML = "<b>Telefono:</b>"+" "+serv.numero

        const what = "https://wa.me/52"+serv.numero
        cardservs.querySelector('.wht').setAttribute("href", what)

        cardservs.querySelector('.descripcion').innerHTML = "<b>Servicio:</b>"+" "+serv.descripcion
        
        const clone = cardservs.cloneNode(true)
        fragment.appendChild(clone)
    })
    infoservicios.appendChild(fragment)
}



const buscar = () => {
    const texto = normalizeString(barra.value.toLowerCase().trim())
    infoservicios.innerHTML = ''
    const servsfilt = usuarios.filter((serv) => {
        return (
            normalizeString(serv.nombrecompleto.toLowerCase()).includes(texto) ||
            normalizeString(serv.descripcion.toLowerCase()).includes(texto)
        )
    })
    servs_elec(servsfilt)
}
const normalizeString = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "")
}

barra.addEventListener('input', buscar)