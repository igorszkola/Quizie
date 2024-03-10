const btn = document.querySelector('.btn')
const ikony = document.querySelector('.ikony')
const zamknij = document.querySelector('.close')
const ikon = document.querySelectorAll('.ikon')
const podst = document.querySelector('.podstawowe')
btn.addEventListener("click",event=>{
    ikony.style.display = 'flex'
})
zamknij.addEventListener('click',event=>{
    ikony.style.display ='none'
})
ikon.forEach(Element =>{
    Element.addEventListener('click',()=>{
        podst.src = Element.src
    })
})