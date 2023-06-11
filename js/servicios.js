const infoservicios = document.getElementById('servs')
const barra = document.getElementById('barra')
const cardservs = document.getElementById('cardservs').content
const fragment = document.createDocumentFragment()


document.addEventListener('DOMContentLoaded', () =>{
    console.log(servicios)
    servs_elec(servicios)
})


const servs_elec = (servicio) => {
    servicio.forEach((serv) => {
        const servimg = '../img/servicios/'+serv.id+'.jpg'
        cardservs.querySelector('.imgserv').setAttribute("src", servimg)
        cardservs.querySelector('.nombre').innerHTML = serv.servicio
        cardservs.querySelector('.descripcion').innerHTML = "<b>Servicio:</b>"+" "+serv.descripcion
        cardservs.querySelector('.coordinador').innerHTML = "<b>Coordinador:</b>"+" "+serv.coordinador
        
        cardservs.querySelector('.conmutador').innerHTML = "<b>Telefono:</b>"+" "+serv.telefono
        cardservs.querySelector('.extension').innerHTML = "<b>Extension:</b>"+" "+serv.extension
        cardservs.querySelector('.ubicacion').innerHTML = "<b>Ubicacion:</b>"+" "+serv.ubicacion
        const clone = cardservs.cloneNode(true)
        fragment.appendChild(clone)
    })
    infoservicios.appendChild(fragment)
}



const buscar = () => {
    const texto = normalizeString(barra.value.toLowerCase().trim())
    infoservicios.innerHTML = ''
    const servsfilt = servicios.filter((serv) => {
        return (
            normalizeString(serv.servicio.toLowerCase()).includes(texto) ||
            normalizeString(serv.descripcion.toLowerCase()).includes(texto) ||
            normalizeString(serv.coordinador.toLowerCase()).includes(texto)
        )
    })
    servs_elec(servsfilt)
}
const normalizeString = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "")
}

barra.addEventListener('input', buscar)