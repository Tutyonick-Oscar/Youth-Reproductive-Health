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
