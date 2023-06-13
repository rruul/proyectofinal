const infopagicios = document.getElementById('pags')
const barra = document.getElementById('barra')
const cardpags = document.getElementById('cardpags').content
const fragment = document.createDocumentFragment()


document.addEventListener('DOMContentLoaded', () =>{
    console.log(paginasug)
    pags_elec(paginasug)
})


const pags_elec = (paginas) => {
    paginas.forEach((pagina) => {
        const pagsvimg = '../img/pags/'+pagina.id+'.jpg'
        cardpags.querySelector('.imgpag').setAttribute("src", pagsvimg)
        cardpags.querySelector('.nombre').innerHTML = "<b>"+pagina.nombre+"</b>"
        cardpags.querySelector('.descripcion').innerHTML = "<b>Descripcion:</b>"+" "+pagina.descripcion
        
        const urlpag = pagina.urlpagina
        cardpags.querySelector('.pagina').setAttribute("href", urlpag)

        const clone = cardpags.cloneNode(true)
        fragment.appendChild(clone)
    })
    infopagicios.appendChild(fragment)
}
