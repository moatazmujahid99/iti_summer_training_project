// const signUpButton = document.getElementById('signUp');
// const signInButton = document.getElementById('signIn');
// const container = document.getElementById('container');

// signUpButton.addEventListener('click', () => {
//     container.classList.add('right-panel-active');
// });

// signInButton.addEventListener('click', () => {
//     container.classList.remove('right-panel-active');
// });

document.getElementById('file-input').onchange = function () {
    var src = URL.createObjectURL(this.files[0])
    document.getElementById('show_image').src = src
    document.getElementById('show_image').setAttribute("width", "280px");
    document.getElementById('show_image').setAttribute("height", "180px");

    var element = document.getElementById("exist");

    if (!element) {
        const elem = document.createElement('td');
        elem.innerText = 'Post Image';
        elem.className = "field";
        elem.style.fontWeight = "bold";

        const target = document.querySelector('#before_it');
        target.parentNode.insertBefore(elem, target);
    }




}


