export function gallery() {
    console.log("This is the gallery")
    const current = document.querySelector('#current');
    const imgs = document.querySelectorAll('.images img');

    imgs.forEach((img => img.addEventListener('click', (e) => current.src = e.target.src)))

}

export function galleryArrows() {
    // if you click on the right arrow, you will move through the image gallery from the right in relation to your current image viewed.
    // Same with the left side.
    let rightArrow = document.querySelector(".forward-arrow");
    let leftArrow = document.querySelector(".back-arrow");
    let imageGallery = document.querySelector(".images");

    rightArrow.addEventListener("click", () => {
        changeImage("right");
    })

    leftArrow.addEventListener("click", () => {
        changeImage("left");
    })

    function changeImage(arrowDirection) {
        // check what is current image selected
        let currentImage = document.querySelector('#current');
        let currentImageSRC = currentImage.src;
        // find that image in the images div
        const imgs = document.querySelectorAll('.images img');
    
        // loop through the images div and find the src above
        imgs.forEach((img) => {
                if(currentImageSRC == img.src) {
                    // once found then make the new selected image the next child element.
                    // if the right arrow was hit then choose the next child from the current image selected
                    if (arrowDirection == "right") {
                        if (img.nextElementSibling == null) {
                            currentImage.src = imageGallery.firstElementChild.src
                        } else {
                            currentImage.src = img.nextElementSibling.src; 
                        }
                    }
                    // if the left arrow is hit choose the previous child selected
                    if (arrowDirection == "left") {
                        if (img.previousElementSibling == null) {
                            currentImage.src = imageGallery.lastElementChild.src
                        } else {
                            currentImage.src = img.previousElementSibling.src;
                        }
                    }
                }
            }
        );
    }
}


    
