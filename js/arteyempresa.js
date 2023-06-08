const infoprofes = document.getElementById('profes')
const barra = document.getElementById('barra')
const cardprofes = document.getElementById('cardprofes').content
const fragment = document.createDocumentFragment()


document.addEventListener('DOMContentLoaded', () =>{
    console.log(arteyempresa)
    profes_elec(arteyempresa)
})


const profes_elec = (profes) => {
    profes.forEach((profe) => {
        cardprofes.querySelector('.nombre').innerHTML = profe.nombre
        cardprofes.querySelector('.correo').innerHTML = "<b>Correo:</b>"+" "+profe.correo
        const refmail = "mailto:"+profe.correo
        cardprofes.querySelector('.mailto').setAttribute("href", refmail)
        cardprofes.querySelector('.conmutador').innerHTML = "<b>Conmutador:</b>"+" "+profe.conmutador
        cardprofes.querySelector('.extension').innerHTML = "<b>Extension:</b>"+" "+profe.extension
        const clone = cardprofes.cloneNode(true)
        fragment.appendChild(clone)
    })
    infoprofes.appendChild(fragment)
}



const buscar = () => {
    const texto = normalizeString(barra.value.toLowerCase().trim())
    infoprofes.innerHTML = ''
    const profesfilt = arteyempresa.filter((profe) => {
        return (
            normalizeString(profe.nombre.toLowerCase()).includes(texto) ||
            normalizeString(profe.correo.toLowerCase()).includes(texto) ||
            normalizeString(profe.conmutador.toLowerCase()).includes(texto) ||
            normalizeString(profe.extension.toLowerCase()).includes(texto)
        )
    })
    profes_elec(profesfilt)
}
const normalizeString = (str) => {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "")
}

barra.addEventListener('input', buscar)