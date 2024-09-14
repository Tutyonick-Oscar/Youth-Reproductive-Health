

const previewPhoto = (id = '') => {
    const preview = document.getElementById(`noimage${id}`);
    const imageInput = document.getElementById(`image${id}`);
    
    const file = imageInput.files;
    if (file) {
        const fileReader = new FileReader();
        fileReader.onload = event => {
            preview.src = event.target.result
        }
        fileReader.readAsDataURL(file[0]);
    }
}
