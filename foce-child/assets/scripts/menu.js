// menu burger
document.addEventListener("DOMContentLoaded", function toggleMenu () {
    const navigation = document.querySelector('.main-navigation')
    const menuBurger = document.querySelector('.menu-toggle')
    menuBurger.addEventListener('click', () => {
        navigation.classList.toggle('open-nav')
    })
})