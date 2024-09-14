let jsonData =''
try {
  jsonData = document.getElementById('json').innerText
} catch (error) {
  console.log(error.message);
}
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
          defaultLevel: 1,
          
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
    data : jsonData.trim().length === 0 ? {} : JSON.parse(jsonData)
  },
  
);
  editor.isReady
  .then(() => {
    console.log('editor usable');
    
  })
  .catch((reason) => {
    console.log(`Editor.js initialization failed because of ${reason}`)
  });
  
/**
 * fetching the vision store route 
 */
// async function postVision (data) {
//   const response = await fetch('http://127.0.0.1:8000/adminpanel/set/vision',{
//     method : 'POST',
//     headers : {
//       'Accept' : 'application/json',
//       'Content-Type' : 'application/json',
//       'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
//     },
//     body : JSON.stringify({
//       title : data.title,
//       content : data.content
//     })
//   })
//   if (response.ok) {
//     return response.json()
//   }
//   //throw new Error("impossible de contacter le serveur...");
// }
/**
 * storing images
 */
// const images = {}
// const inputImgFiles = Array.from(document.querySelectorAll('.img_store'))

// inputImgFiles.forEach(inputImgFile =>{
//   inputImgFile.addEventListener('change',(e)=>{
//     let data = new FormData()
//     data.append(`image${inputImgFiles.indexOf(inputImgFile)+1}`,inputImgFile.files[0])
//     const response = fetch('http://127.0.0.1:8000/adminpanel/set/vision',{
//       method : 'POST',
//       headers : {
//         'Content-Type' : 'multipart/form-data',
//         'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content
//       },
//       body : data
//     }).then(response => console.log(response.text())).catch(reason =>  console.log(reason))
//   })
// })

const form = document.getElementById('form')
form.addEventListener('submit',(e)=>{
  editor.save()
    .then(datas =>{
      if (datas.blocks.length == 0) {
        e.preventDefault();
        document.getElementById('error').classList.remove('hidden')
      }else{
        // const visionInfos = {
        //   title : document.getElementById('title'),
        //   content : datas.blocks
        // }
        // postVision(visionInfos)
        //   .then(response =>{console.log(response);})
        //   .catch(reason =>{console.log(`failed to post vision cause :  ${reason.message}`);})

        document.getElementById('error').classList.add('hidden')
        document.getElementById('content').value = JSON.stringify(datas);
      }
    })
    .catch(reason =>{
      console.log('saving failed because of '+reason);
    })
})