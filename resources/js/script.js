
document.addEventListener("DOMContentLoaded", function () {
  const listIcon = document.querySelector(".toggle-btn");
  const closeIcon = document.querySelector(".close-btn");
  const tablette = document.querySelector(".tablette");
  const navbar = document.querySelector(".navbar");
  const element = document.querySelector(".element");
  const main = document.querySelector(".main");

  const md = window.matchMedia('(min-width:768px) and (max-width:1023px)')

  listIcon.addEventListener("click", () => {
    if (md.matches) {
      navbar.animate([
        {width : '9%'},{width : '30%'}
      ],{
        duration : 300,
        fill : 'forwards'
      })
      const listNames = Array.from(document.querySelectorAll('.list-name'))
      listNames.forEach(list =>{
        list.animate([
          {display : 'none', opacity : 0},{display : 'block', opacity : 1}
        ],{
          duration : 300,
          fill : 'forwards',
          delay : 300
        })
      })
    }
    navbar.classList.add("h-auto");
    element.classList.add("visible");
    element.classList.remove("hidden");
    listIcon.classList.add("hidden");
    closeIcon.classList.remove("hidden");
  });

  closeIcon.addEventListener("click", () => {
    if (md.matches) {
      const listNames = Array.from(document.querySelectorAll('.list-name'))
      listNames.forEach(list =>{
        list.animate([
         {opacity : 1, display : 'block'}, {opacity : 0, display : 'none'}
        ],{
          duration : 300,
          fill : 'forwards'
        })
      })
      navbar.animate([
        {width : '30%'},{width : '9%'}
      ],{
        duration : 300,
        fill : 'forwards',
        delay : 300
      })
      
    }
    navbar.classList.remove("h-auto");
    element.classList.add("hidden");
    element.classList.remove("visible");
    listIcon.classList.remove("hidden");
    closeIcon.classList.add("hidden");
  });

  tablette.addEventListener("click", () => {
    if (element.classList.contains("md:w-[9%]")) {
      element.classList.replace("md:w-[9%]", "md:w-[5%]");
      main.classList.replace("md:flex-1", "md:w-[95%]");
      element.querySelector(".md:hidden").classList.add("hidden");
    } else {
      element.classList.replace("md:w-[5%]", "md:w-[9%]");
      main.classList.replace("md:w-[95%]", "md:flex-1");
      element.querySelector(".md:hidden").classList.remove("hidden");
    }
  });
});

const divEvents = document.getElementById('showEvents')
const arrow = document.getElementById('arrowEvents')


divEvents.addEventListener('click',(e)=>{
  if (divEvents.clientHeight===39) {
    divEvents.animate(
        [
            {height : '40px'},{height :((divEvents.scrollHeight+1)).toString()+'px' }
        ],{
            duration : 300,
            fill : 'forwards'
        }
    )
    }else{
      divEvents.animate(
            [
                {height :((divEvents.scrollHeight+1)).toString()+'px' },{height : '40px'}
            ],{
                duration : 300,
                fill : 'forwards'
            }
        )
    }
    arrow.classList.toggle('rotate-[89deg]')
})




