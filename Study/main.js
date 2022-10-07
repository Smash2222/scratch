let but = document.querySelector('#but');

but.addEventListener('click', function () {
    let elems = document.querySelectorAll('div');
    for (let i = 1; i < elems.length; i++) {
        elems[i].classList.toggle('selected');
    }
});

