const modal = document.querySelector('.modal')
const closeModal = document.getElementById('btnModal')

document.addEventListener('DOMContentLoaded', () => {
    modal.classList.add('modalShow')
})

closeModal.addEventListener('click', () => {
    modal.classList.remove('modalShow')
    categoria = 'Estrenos'
    loadEstYPop(1)
})