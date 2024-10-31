let aboutTitle = document.getElementById('aboutTitle')
let aboutContent = document.getElementById('aboutContent')//max = 482 
let causesFirstTitle = document.getElementById('causesFirstTitle')
let causesFirstContent = document.getElementById('causesFirstContent')
let causeSmallDescript = document.querySelectorAll('#causeSmallDescript')
let visionContent = document.getElementById('visionContent')
let missionContent = document.getElementById('missionContent')
let missionTitle  = document.getElementById('missionTitle')
let blogTitles = document.querySelectorAll('#blogTitle')
let blogContents = document.querySelectorAll('#blogContent')


console.log(document.getElementById('blogContent').innerText.length);

const limitChar = (maxLength,element)=>{

    if (element.textContent.length>140) {
        element.textContent = element.textContent.substring(0,maxLength)
        element.textContent = element.textContent+'...'
    }
}

limitChar(140,aboutTitle)
limitChar(600,aboutContent)
limitChar(148,causesFirstTitle)
limitChar(600,causesFirstContent)
causeSmallDescript.forEach(element => {
    limitChar(296,element)
});
limitChar(313,visionContent)
limitChar(510,missionContent)
limitChar(270,missionTitle)
blogTitles.forEach(element => {
    limitChar(59,element)
});
blogContents.forEach(element => {
    limitChar(160,element)
});