let recentEventTitle = document.querySelectorAll('#recentEventTitle')



const limitChar = (maxLength,element)=>{

    if (element.textContent.length>140) {
        element.textContent = element.textContent.substring(0,maxLength)
        element.textContent = element.textContent+'...'
    }
}
recentEventTitle.forEach(element => {
    limitChar(125,element)
    
});


