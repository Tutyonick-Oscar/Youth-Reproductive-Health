//import './bootstrap';
import axios from 'axios';
import './navBar'

const footer_form = document.getElementById('footer_form')
const loading = document.getElementById('loading')
const contactError = document.getElementById('contact_sent_error')
const contactSent = document.getElementById('contact_sent')

footer_form.addEventListener('submit',e=>{

    e.preventDefault()
    if (!contactError.classList.contains('hidden')) {
        contactError.classList.add('hidden')
    }
    if (!contactSent.classList.contains('hidden')) {
        contactSent.classList.add('hidden')
    }
    loading.classList.remove('hidden')
    const data = new FormData(footer_form)
    axios.post(
        '/contact',
        {
            'contactname' : data.get('contactname'),
            'contactemail' : data.get('contactemail'),
            'contactmessage' : data.get('contactmessage')
        },{
            'content-type' : 'application/json',
            'XSRFToken': document.getElementById('token').content
        }
    ).then(
        response => {
            

            if (response.status == 200) {
                contactSent.classList.remove('hidden')
                contactError.classList.add('hidden') 
                footer_form.reset()
                loading.classList.add('hidden')

            }
            else {
                
                contactError.classList.remove('hidden') 
                contactSent.classList.add('hidden') 

                if (!loading.classList.contains('hidden')) {
                    loading.classList.add('hidden')
                }
            }
        }
    )
    .catch(error =>  {
        document.getElementById('contact_sent_error').classList.remove('hidden') 

        if (!loading.classList.contains('hidden')) {
            loading.classList.add('hidden')
        }
        document.getElementById('contact_sent').classList.add('hidden')   
    }
    )
})

/**
 * img lazy loading
 */

let imagesToLoad = document.querySelectorAll("img[data-src]");
const loadImages = (image) => {
  image.setAttribute("src", image.getAttribute("data-src"));
  image.onload = () => {
    image.removeAttribute("data-src");
  };
};

if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver((items, observer) => {
      items.forEach((item) => {
        if (item.isIntersecting) {
          loadImages(item.target);
          observer.unobserve(item.target);
        }
      });
    });
    imagesToLoad.forEach((img) => {
      observer.observe(img);
    });
  } else {
    imagesToLoad.forEach((img) => {
      loadImages(img);
    });
  }
  
/**
 * scroll back to top
 */

const backToTop = document.getElementById('backToTop')

backToTop.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
