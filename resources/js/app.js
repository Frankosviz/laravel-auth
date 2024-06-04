import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**", "../fonts/**"]);


document.getElementById('search-icon').addEventListener('click', function() {
    const searchBar = document.getElementById('search-bar');
    if (searchBar.style.display === 'none' || searchBar.style.display === '') {
        searchBar.style.display = 'block';
        searchBar.focus();
    } else {
        searchBar.style.display = 'none';
    }
});

const image = document.getElementById('upload_image');
if (image) {
    image.addEventListener('change', () => {
        const preview = document.getElementById('uploadPreview');
    });
}