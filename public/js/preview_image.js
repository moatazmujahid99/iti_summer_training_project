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
}
