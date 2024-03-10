const back = document.querySelector('.icon-reply-1')
back.addEventListener('click',event=>{
    window.location.assign("start.php")
})
const add = document.querySelector('.icon-plus')
const nowe_pytanie = document.querySelector('.nowe-pytanie')
add.addEventListener('click',event=>{
    nowe_pytanie.style.display = 'grid'
})
const cancel = document.querySelector('.cancel-question')
cancel.addEventListener('click',event=>{
    nowe_pytanie.style.display = 'none'
})