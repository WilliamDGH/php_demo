// Get the modal
const modal = document.getElementById('preview');

// Get the image and insert it inside the modal - use its "alt" text as a caption
const images = document.querySelectorAll('img');
const modalImg = document.getElementById("modal-img");
for (let i = 0; i < images.length; i++) {
  images[i].onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
  }
}

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
