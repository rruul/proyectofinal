const acreditacioningles = document.getElementById('acreditacioningles')
const afiliacionimss = document.getElementById('afiliacionimss')
const bajadefinitiva = document.getElementById('bajadefinitiva')
const bajatemporal = document.getElementById('bajatemporal')
const calificacionfinal = document.getElementById('calificacionfinal')
const cambiosede = document.getElementById('cambiosede')
const cambiotutor = document.getElementById('cambiotutor')
const constancia = document.getElementById('constancia')
const correo = document.getElementById('correo')
const examenegreso = document.getElementById('examenegreso')
const reposicioncredencial = document.getElementById('reposicioncredencial')
const inscripcionadministrativa = document.getElementById('inscripcionadministrativa')
const inscripcionextemporanea = document.getElementById('inscripcionextemporanea')
const movilidad = document.getElementById('movilidad')
const vigenciaimss = document.getElementById('vigenciaimss')
const revisionkardex = document.getElementById('revisionkardex')
const revalidacionesdeestudio = document.getElementById('revalidacionesdeestudio')
const prorrogainscripcion = document.getElementById('prorrogainscripcion')


const titulo = document.getElementById('titulo')
const pdf = document.getElementById('pdf')

document.addEventListener('DOMContentLoaded', () => {
    titulo.innerHTML = 'Acreditación de Segunda Lengua'
    const srcpdf = './pdfs/acreditacioningles.pdf'
    pdf.setAttribute("src", srcpdf)
})

acreditacioningles.addEventListener('click', () => {
    titulo.innerHTML = 'Acreditación de Segunda Lengua'
    const srcpdf = './pdfs/acreditacioningles.pdf'
    pdf.setAttribute("src", srcpdf)
})

afiliacionimss.addEventListener('click', () => {
    titulo.innerHTML = 'Afilición al IMSS'
    const srcpdf = './pdfs/afiliacionimss.pdf'
    pdf.setAttribute("src", srcpdf)
})

bajadefinitiva.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Baja Definitiva'
    const srcpdf = './pdfs/bajadefinitiva.pdf'
    pdf.setAttribute("src", srcpdf)
})

bajatemporal.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Baja Temporal'
    const srcpdf = './pdfs/bajatemporal.pdf'
    pdf.setAttribute("src", srcpdf)
})

calificacionfinal.addEventListener('click', () => {
    titulo.innerHTML = 'Asignación de Calificación Final'
    const srcpdf = './pdfs/calificacionfinal.pdf'
    pdf.setAttribute("src", srcpdf)
})

cambiosede.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Cambio de Sede'
    const srcpdf = './pdfs/cambiosede.pdf'
    pdf.setAttribute("src", srcpdf)
})

cambiotutor.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Solicitud Cambio de Tutor'
    const srcpdf = './pdfs/cambiotutor.pdf'
    pdf.setAttribute("src", srcpdf)
})

constancia.addEventListener('click', () => {
    titulo.innerHTML = 'Tramite de Constancia'
    const srcpdf = './pdfs/constancia.pdf'
    pdf.setAttribute("src", srcpdf)
})

correo.addEventListener('click', () => {
    titulo.innerHTML = 'Problemas con el Correo Electrónico'
    const srcpdf = './pdfs/correo.pdf'
    pdf.setAttribute("src", srcpdf)
})

examenegreso.addEventListener('click', () => {
    titulo.innerHTML = 'Información Sobre el Examen de Egreso'
    const srcpdf = './pdfs/examenegreso.pdf'
    pdf.setAttribute("src", srcpdf)
})

reposicioncredencial.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Reposición de Credencial'
    const srcpdf = './pdfs/reposicioncredencial.pdf'
    pdf.setAttribute("src", srcpdf)
})

inscripcionadministrativa.addEventListener('click', () => {
    titulo.innerHTML = 'Solicitud de Inscripción Administrativa'
    const srcpdf = './pdfs/inscripcionadministrativa.pdf'
    pdf.setAttribute("src", srcpdf)
})

inscripcionextemporanea.addEventListener('click', () => {
    titulo.innerHTML = 'Solicitud de Inscripción Extemporánea'
    const srcpdf = './pdfs/inscripcionextemporanea.pdf'
    pdf.setAttribute("src", srcpdf)
})

movilidad.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Movilidad'
    const srcpdf = './pdfs/movilidad.pdf'
    pdf.setAttribute("src", srcpdf)
})

vigenciaimss.addEventListener('click', () => {
    titulo.innerHTML = 'Constancia de Vigencia de Derechos del Seguro Facultativo'
    const srcpdf = './pdfs/vigenciaimss.pdf'
    pdf.setAttribute("src", srcpdf)
})

revisionkardex.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Revisión de Kardex'
    const srcpdf = './pdfs/revisionkardex.pdf'
    pdf.setAttribute("src", srcpdf)
})

revalidacionesdeestudio.addEventListener('click', () => {
    titulo.innerHTML = 'Trámite de Revalidaciones de Estudio'
    const srcpdf = './pdfs/revalidacionesdeestudio.pdf'
    pdf.setAttribute("src", srcpdf)
})

prorrogainscripcion.addEventListener('click', () => {
    titulo.innerHTML = 'Solicitud de Prórroga de Inscripción'
    const srcpdf = './pdfs/prorrogainscripcion.pdf'
    pdf.setAttribute("src", srcpdf)
})
