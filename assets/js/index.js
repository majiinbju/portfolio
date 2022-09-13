
const lightbox = document.createElement('div')
const main = document.querySelector('main')
lightbox.id = 'lightbox'
main.id = 'main'
document.body.appendChild(main)
main.appendChild(lightbox)

const images = document.querySelectorAll('img')
images.forEach(image => {
    image.addEventListener('click', e => {
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
    lightbox.classList.remove('active')
})
})