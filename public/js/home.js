
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

let slides = []

window.addEventListener('load',e =>{
    
    fetch('http://127.0.0.1:8000/getslides',{
        method : "GET",
        headers :{
            'Accept' : 'application/json',
        }
    })

    .then(response => {
        response.json()
        .then
        (
            data => {
                data.data.forEach(slide => {
                    slides.push({
                        image : slide.image,
                        title : slide.title
                    })
                });
            }
        )
        .catch(e => console.log('error while fetching data from http://127.0.0.1:8000/getslides \n detail : ',e.message)
        )
    })
})

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
        Slidescontainer.style.backgroundImage = `url(/storage/${slides[countSlides].image})`
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

if (window.matchMedia('(max-width:1023px)').matches) {
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
/**
 * Team slides
 */

const members = Array.from(document.querySelectorAll('#member'));
const left = document.getElementById('backward');
const right = document.getElementById('forward');
let memberCount = 0;
/**
 * incrementing the variable memberCount for handling the slide
 */
const counting = (direction)=>{

   if (direction === 'left') {
    memberCount==0?memberCount=members.length-1:memberCount--;
    
    return;
   }

    memberCount==members.length-1?memberCount=0:memberCount++;
    
}
/**
 * slides animation
 */
const  memberSliding = ( direction )=> {

    members[memberCount].animate([
        {transform : 'translateX(0)', display :'flex', opacity:1}, 
        {transform : 'translateX(-50%)',display:'none', opacity:0},
    ],{
        duration : 500,
        fill : 'forwards'
    })

   counting(direction);

    members[memberCount].animate([
        {display :'none', transform : 'translateX(50%)',opacity:0}, 
        {display :'flex', transform : 'translateX(0)',opacity:1},
    ],{
        duration : 500,
        fill : 'forwards',
        delay : 501
    })
   
}
left.addEventListener('click',(e)=>{
    /**
     * play slide animation
     */
    memberSliding ('left');
})
right.addEventListener('click',(e)=>{
    /**
     * play slide animation
     */
    memberSliding ('right');
})


/**
 * our vision slides
 */

let visionElemets = Array.from(document.querySelectorAll('#visionImg'));
let visionBtn = Array.from(document.querySelectorAll('#visionBtn'));

let visions  = []

visionElemets.map(element =>{
    visions.push( {
        button : visionBtn[visionElemets.indexOf(element)],
        element : element,
    })
})
let vCount = 0;

if (window.matchMedia('(max-width:767px)').matches) {
    setInterval(() => {
        visions[vCount].element.animate([
            {display : 'flex',filter: 'blur(0)', transform: 'translateX(0)'},
            {display : 'none',filter: 'blur(5px)', transform: 'translateX(-100%)'},
        ],{
            duration : 1000,
            fill : 'forwards',
    
        })
        visions[vCount].button.classList.remove('bg-accent1')
        visions[vCount].button.classList.add('bg-white')
    
        vCount == visions.length-1 ? vCount = 0 : vCount++; 
    
        visions[vCount].element.animate([
            {display : 'none',filter: 'blur(5px)', transform: 'translateX(-100%)'},
            {display : 'flex',filter: 'blur(0)', transform: 'translateX(0)'}
        ],{
            duration : 1000,
            fill : 'forwards',
            delay : 980
        })
        visions[vCount].button.classList.remove('bg-white')
        visions[vCount].button.classList.add('bg-accent1')
    
    }, 5000);
}
