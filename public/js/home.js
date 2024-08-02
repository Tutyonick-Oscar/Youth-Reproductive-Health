const rounded1  = document.querySelector("#rounded1")
let countRound = 0;
setInterval(() => {
   if (countRound === 0) {
    rounded1.animate([
        {width : 0,height : 0},{width : '7rem',height : '7rem'},
       ],
        {
            duration : 500,
            fill : 'forwards'
        }
    )
    countRound++;
   } 
   else{
    rounded1.animate([
        {width : '7rem',height : '7rem'},{width : 0,height : 0},
       ],
        {
            duration : 500,
            fill : 'forwards'
        }
    )
    countRound--
   }
}, 10000);
const rounded2  = document.querySelector("#rounded2")
setInterval(() => {
    if (countRound === 1) {
        rounded2.animate([
            {width : 0,height : 0},{width : '12rem',height : '12rem'},
           ],
            {
                duration : 500,
                fill : 'forwards',
                delay: 500
            }
        )
       } 
       else{
        rounded2.animate([
            {width : '12rem',height : '12rem'},{width : 0,height : 0},
           ],
            {
                duration : 500,
                fill : 'forwards',
                delay: 500
            }
        )
       }
}, 10000);
const observerTitle = new IntersectionObserver(
    (entries) =>{
        entries.forEach(entry =>{
            if(entry.isIntersecting){
              setTimeout(() => {
                entry.target.animate([
                    {transform :'translateX(-20rem)',opacity : 0},{transform :'translateX(0)',opacity : 1}
                ],
                {
                    duration : 500,
                    fill : 'forwards'
                }
                )
              }, 500);
              observerTitle.unobserve(document.getElementById('title'))
            }
        })
    }
)
let title = document.getElementById('title')
observerTitle.observe(title);

const observeText = new IntersectionObserver(
    (entries) => {
        entries.forEach(entry =>{
            if (entry.isIntersecting) {
                entry.target.animate([
                    {
                        transform : 'translateY(5rem)', opacity:0
                    },
                    {
                        transform : 'translateY(0)', opacity:1 
                    }
                ],
                {
                    duration : 500,
                    fill : 'forwards',
                    delay : 1000
                }
            )
            observeText.unobserve(document.getElementById('text'))
            }
        })
    }
)
const text = document.getElementById('text')
observeText.observe(text);
let countSlides = 0;
let slides = [
    {
        url : 'http://127.0.0.1:8000/images/8.JPG',
        title : ' Aider les pauvres femmes à jouir pleinement de leurs droits sexuels et reproductifs'
    },
    {
        url : 'http://127.0.0.1:8000/images/WhatsApp_Image_youth_2.jpg',
        title : ' Accompagner les femmes, filles et adolescentes survivantes des violences basées sur les genres'
    },
    {
        url : 'http://127.0.0.1:8000/images/WhatsApp_Image_youth_3.jpg',
        title : ' Faciliter l\'accès des femmes, filles et adolescentes aux opportunités sociales et économiques'
    }
]
const Slidescontainer = document.getElementById('Slidescontainer');

/**
 * home slide animation
 */

const sliding = ()=>{
    Slidescontainer.animate([
        {backgroundSize : '83.125rem'},{backgroundSize : '100rem'},
    ],
    {
        duration : 1000,
        fill : 'backwards'
    })
    setTimeout(() => {
        Slidescontainer.style.backgroundImage = `url(${slides[countSlides].url})`
        Slidescontainer.animate([
            {backgroundSize : '100rem'},{backgroundSize : '83.125rem'},
        ],
        {
            duration : 1000,
            fill : 'backwards'
        })
        title.style.transform = 'initial'
        title.style.opacity = 'initial'
        setTimeout(() => {
            title.innerText = slides[countSlides].title;
        }, 1000);
        observerTitle.observe(title);
    }, 999);
    
}

/**
 * setting the home's slides animation
 */

document.getElementById('arrowL').addEventListener('click',(e)=>{
    sliding();
    countSlides==0?countSlides=slides.length-1:countSlides--;
})
document.getElementById('arrowR').addEventListener('click',(e)=>{
    sliding();
    countSlides==slides.length-1?countSlides=0:countSlides++;
})
/**
 * playing animation on phone divices 
 */

if (window.matchMedia('(max-width:768px)').matches) {
    setInterval(() => {
        countSlides==slides.length-1?countSlides=0:countSlides++;
        sliding();
    }, 12000);
}
/**
 * observing following text and img elements
 */

const elementsObserver = new IntersectionObserver (entries =>{
    entries.forEach(entry =>{
        if (entry.isIntersecting) {
            entry.target.classList.add('observed');
        }else entry.target.classList.remove('observed');
    })
})
document.querySelectorAll('.unobserve').forEach(element =>{
    elementsObserver.observe(element);
})

const toleftElementObserver = new IntersectionObserver (entries =>{
    entries.forEach(entry =>{
        if (entry.isIntersecting) {
            entry.target.classList.add('leftshow');
        }else entry.target.classList.remove('leftshow');
    })
})
document.querySelectorAll('.lefthidden').forEach(element =>{
    toleftElementObserver.observe(element);
})