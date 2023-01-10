// Lightbox
const lightbox = document.createElement('div')
const main = document.querySelector('main')
const shadow = document.createElement('div');
lightbox.id = 'lightbox'
main.id = 'main'
shadow.id = 'shadow';
document.body.appendChild(main)
main.appendChild(shadow)
shadow.appendChild(lightbox)

const images = document.querySelectorAll('img')
images.forEach(image => {
    image.addEventListener('click', e => {
        shadow.classList.add('active')
        lightbox.classList.add('active')
        const img = document.createElement('img')
        img.src = image.src
        while (lightbox.firstChild) {
            lightbox.removeChild(lightbox.firstChild)
        }
        lightbox.appendChild(img)
    })

lightbox.addEventListener('click', e => {
    // if the click target is not the lightbox, it will hide the element
    if (e.target == e.currentTarget) return
    shadow.classList.remove('active')
    lightbox.classList.remove('active')
})
})
