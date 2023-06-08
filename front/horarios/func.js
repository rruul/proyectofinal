const mecanica = document.getElementById('mecanica')
const electrica = document.getElementById('electrica')
const comunicaciones = document.getElementById('comunicaciones')
const mecatronica = document.getElementById('mecatronica')
const sistemas = document.getElementById('sistemas')
const gestion = document.getElementById('gestion')
const artes = document.getElementById('artes')
const datosyartificial = document.getElementById('datosyartificial')

const titulo = document.getElementById('titulo')
const pdf = document.getElementById('pdf')

document.addEventListener('DOMContentLoaded', () => {
    titulo.innerHTML = 'Horarios Ingeniería Mecánica'
    const srcpdf = './pdf/LIME.pdf'
    pdf.setAttribute("src", srcpdf)
})

mecanica.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Ingeniería Mecánica'
    const srcpdf = './pdf/LIME.pdf'
    pdf.setAttribute("src", srcpdf)
})

electrica.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Ingeniería Eléctrica'
    const srcpdf = './pdf/LIE.pdf'
    pdf.setAttribute("src", srcpdf)
})

comunicaciones.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Ingeniería en Comunicaciones y Electrónica'
    const srcpdf = './pdf/LICE_SAL.pdf'
    pdf.setAttribute("src", srcpdf)
})

mecatronica.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Ingeniería en Mecatrónica'
    const srcpdf = './pdf/LIMT.pdf'
    pdf.setAttribute("src", srcpdf)
})

sistemas.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Ingeniería en Sistemas Computacionales'
    const srcpdf = './pdf/LISC_SAL.pdf'
    pdf.setAttribute("src", srcpdf)
})

gestion.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Licenciatura en Gestión Empresarial'
    const srcpdf = './pdf/LGE_SAL.pdf'
    pdf.setAttribute("src", srcpdf)
})

artes.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Licenciatura en Artes Digitales'
    const srcpdf = './pdf/LAD.pdf'
    pdf.setAttribute("src", srcpdf)
})

datosyartificial.addEventListener('click', () => {
    titulo.innerHTML = 'Horarios Ingeniería en Datos e Ingeniería Artifícial'
    const srcpdf = './pdf/LIDIA.pdf'
    pdf.setAttribute("src", srcpdf)
})