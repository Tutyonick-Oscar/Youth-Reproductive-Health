/**
 * geting divs dropdown
 */
let show = document.querySelectorAll('#show')
let arrow = document.querySelectorAll('#arrow')
arrow.forEach(arrw =>{
    arrw.addEventListener('click',e =>{
        show.forEach(divs =>{
            if (divs.dataset.show == e.currentTarget.dataset.show) { 
                if (divs.parentNode.clientHeight===24) {
                    divs.parentNode.animate(
                        [
                            {height : '1.5625rem'},{height :((divs.scrollHeight+25)/16).toString()+'rem' }
                        ],{
                            duration : 300,
                            fill : 'forwards'
                        }
                    )
                }else{
                    divs.parentNode.animate(
                        [
                            {height :((divs.scrollHeight+25)/16).toString()+'rem' },{height : '1.5625rem'}
                        ],{
                            duration : 300,
                            fill : 'forwards'
                        }
                    )
                }
            }
        })
        arrw.classList.toggle('rotate-[89deg]')
    })
})
const sideBar = document.getElementById('sideBar');
const x = document.getElementById('close')
const menu = document.getElementById('menu')
let sideBarWidth = 0;
sideBar.addEventListener('click',e =>{
    sideBarWidth = (sideBar.clientWidth/16).toString()+'rem'
    if (e.target == e.currentTarget) {
       sideBar.animate([
        {width : '100%'},{width: 0 }
       ],{
        duration : 300,
        fill : 'forwards'
       });
       document.getElementById('side').animate([
        {width : '80%'},{width: 0 }
       ],{
        duration : 300,
        fill : 'forwards'
       })
    } 
    
    e.preventDefault();
})
x.addEventListener('click',e=>{
    sideBarWidth = (sideBar.clientWidth/16).toString()+'rem'
    sideBar.animate([
        {width : '100%'},{width: 0 }
       ],{
        duration : 300,
        fill : 'forwards'
       })
    document.getElementById('side').animate([
        {width : '80%'},{width: 0 }
       ],{
        duration : 300,
        fill : 'forwards'
       })
})
menu.addEventListener('click',e =>{
    sideBarWidth = (sideBar.clientWidth/16).toString()+'rem'
    sideBar.animate([
        {width: 0 },{width : '100%'}
       ],{
        duration : 300,
        fill : 'forwards'
       })
    document.getElementById('side').animate([
        {width: 0 },{width : '80%'}
       ],{
        duration : 300,
        fill : 'forwards'
       })
})

const droped = document.querySelectorAll('.droped')
const dropdowns = document.querySelectorAll('#dropdown')
document.addEventListener('click',e =>{
    dropdowns.forEach(dropdown =>{
        if (e.target.parentNode!==dropdown.parentNode && dropdown.clientHeight>8) {
            dropdown.animate([
                {height : `${dropdown.scrollHeight/16}rem`},{height : 0}
            ],{
                duration : 300,
                fill : 'forwards'
            })
        }
    })
})
droped.forEach(droped =>{
    droped.addEventListener('click',e =>{
        dropdowns.forEach(dropdown =>{
            if (dropdown.clientHeight>8 && dropdown.parentNode!==e.currentTarget) {
                dropdown.animate([
                    {height : `${dropdown.scrollHeight/16}rem`},{height : 0}
                ],{
                    duration : 300,
                    fill : 'forwards'
                })
            }
            if (dropdown.parentNode === e.currentTarget) {
                if (dropdown.clientHeight<=8) {
                    dropdown.animate([
                        {height : 0},{height : `${dropdown.scrollHeight/16}rem`}
                    ],{
                        duration : 300,
                        fill : 'forwards'
                    })
                }
                else{
                    dropdown.animate([
                        {height : `${dropdown.scrollHeight/16}rem`},{height : 0}
                    ],{
                        duration : 300,
                        fill : 'forwards'
                    })
                }
            }
        })
    })
})