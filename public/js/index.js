import { gallery, galleryArrows } from './modules/image_gallery';
import { mobileNav } from './modules/mobile_nav';

console.log("Welcome to SafePath!");

mobileNav();

if (document.getElementById("resources-image-gallery__gallery")) {
    gallery();
    galleryArrows();
}



