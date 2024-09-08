const editor = new EditorJS(
  {
    holder: 'editorjs',
    tools : {
      image: SimpleImage,
      header: {
        class: Header,
        config: {
          placeholder: 'Titres',
          levels: [1, 2, 3],
          defaultLevel: 2,
          
        },
        inlineToolbar : true 
      },
      list: {
        class: List,
        inlineToolbar: true,
        config: {
          defaultStyle: 'unordered'
        }
      },
   
    },
    placeholder : 'Ecrire le texte ici !',
    autofocus : true ,
  },
  
);
  editor.isReady
  .then(() => {
    console.log('editor usable');
    
  })
  .catch((reason) => {
    console.log(`Editor.js initialization failed because of ${reason}`)
  });

const tagInput = document.getElementById('tags')
/**
 * array of all tags
 *@type HTMLParagraphElement[]
 */
let tags = []
/**
 * array of all x buttons used to remove tags
 *@type HTMLElement[]
 */
let xTags = []

const tagsDiv = document.getElementById('tagsDiv');

tagInput.addEventListener('input',(e)=>{
  if (e.data == ',') {
    let tag = document.createElement('p')
    tag.setAttribute('id','taged')
    tag.setAttribute('class','relative whitespace-nowrap  px-4 py-1 dash-border rounded-xl')
    let value = e.currentTarget.value.split(',').join('');
    tag.innerHTML = value;
    //add x button
    let removetag = document.createElement('i')
    removetag.setAttribute('class','fa-solid fa-x absolute text-[10px] rounded-full text-bg -top-2 -right-1 p-1 x-red cursor-pointer')
    tag.appendChild(removetag);
    tagsDiv.insertBefore(tag,e.currentTarget);
    tags.push(tag);
    xTags.push(removetag)
    //reinitialize input
    e.currentTarget.value = '',
    e.currentTarget.focus();
  }
  
})
tagsDiv.addEventListener('click',e=>{
  xTags.forEach(x =>{
    if (e.target == x) {
      tags.splice(tags.indexOf(x.parentNode),1)
      tagsDiv.removeChild(x.parentNode)
    }
  })
})
savedTags = []
const form = document.getElementById('form')
form.addEventListener('submit',(e)=>{
  e.preventDefault()
  tags.forEach(tag => {
    savedTags.push(tag.innerText);
  })
  console.log(savedTags.join(','));
})

