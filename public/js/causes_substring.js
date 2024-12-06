causes_content  = document.querySelectorAll('.causes_content')
first_cause  = document.querySelector('.first_cause')

const limitChar = (maxLength,element)=>{

    if (element.textContent.length>140) {
        element.textContent = element.textContent.substring(0,maxLength)
        element.textContent = element.textContent+'...'
    }
}

limitChar(600,first_cause)
causes_content.forEach(content => {
    limitChar(208,content)
});
