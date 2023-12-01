let btn_menu_open=document.querySelector('.btn-menu-open')
let btn_menu_close=document.querySelector('.btn-menu-close')
let menu_window=document.querySelector('.menu-window')

btn_menu_close.addEventListener('click',(e)=>{
    menu_window.style.display='none'
})
btn_menu_open.addEventListener('click',(e)=>{
    menu_window.style.display='grid'
})
