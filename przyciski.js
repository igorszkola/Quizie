
const create_btn = document.querySelector('.tworz')
const glowny = document.querySelector('.glowny')
const opcje = document.querySelector('.opcje')
const edytor = document.querySelector('.edytor')
const dolacz_btn = document.querySelector('.dolacz')
const profil = document.querySelector('.profil')
const edytor_btn = document.querySelector('.edytor-btn')
const back_btn = document.querySelector('.icon-reply-1')
const add_btn = document.querySelector('.add-quiz')
const cancel_btn = document.querySelector('.cancel-quiz')
const new_quiz = document.querySelector('.nowy-quiz')

create_btn.addEventListener('click',event=>{
    glowny.style.display = 'none'
    opcje.style.display = 'grid'
})
dolacz_btn.addEventListener('click',event=>{
    glowny.style.display = 'none'
    profil.style.display = 'grid'
})
back_btn.addEventListener('click',event=>{
    opcje.style.display = 'none'
    profil.style.display = 'none'
    glowny.style.display = 'grid'
    edytor.style.display = 'none'
    ikony.style.display ='none'
})
edytor_btn.addEventListener('click',event=>{
    opcje.style.display = 'none'
    edytor.style.display = 'grid'
})
add_btn.addEventListener('click',event=>{
    new_quiz.style.display = 'grid'
})
cancel_btn.addEventListener('click',event=>{
    new_quiz.style.display = 'none'
})
