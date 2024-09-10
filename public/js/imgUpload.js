const preview = document.getElementById('noimage');
const imageInput = document.getElementById('image');

const previewPhoto = () => {
    const file = imageInput.files;
    if (file) {
        const fileReader = new FileReader();
        fileReader.onload = event => {
            preview.src = event.target.result
        }
        fileReader.readAsDataURL(file[0]);
    }
}
