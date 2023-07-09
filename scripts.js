const nav = document.getElementById('navbar');

const burgerHandler = () => {
    if(nav.classList.contains('open-menu'))
    {
        nav.classList.remove('open-menu');
    }
    else
    {
        nav.classList.add('open-menu');
    }
}

nav.addEventListener("click", burgerHandler);