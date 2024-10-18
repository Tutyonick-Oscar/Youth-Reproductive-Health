//import './bootstrap';
import axios from 'axios';
import './navBar'

const footer_form = document.getElementById('footer_form')

footer_form.addEventListener('submit',e=>{

    e.preventDefault()

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
                document.getElementById('contact_sent').classList.remove('hidden')
                document.getElementById('contact_sent_error').classList.add('hidden') 
                footer_form.reset()

            }
            else {
                
                document.getElementById('contact_sent_error').classList.remove('hidden') 
                document.getElementById('contact_sent').classList.add('hidden') 
            }
        }
    )
    .catch(error =>  {
        document.getElementById('contact_sent_error').classList.remove('hidden') 
        document.getElementById('contact_sent').classList.add('hidden')   
    }
    )
})
