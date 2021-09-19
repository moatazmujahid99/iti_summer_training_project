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


    if (document.getElementById("created_td")) {
        document.getElementById("created_td").remove();
    }

    if (!document.getElementById("existing_td")) {

        const created_td = document.createElement('td');
        created_td.innerText = 'Post Image';
        created_td.className = "field";
        created_td.setAttribute("id", "created_td")
        created_td.style.fontWeight = "bold";

        const image_container_td = document.querySelector('#image_container_td');
        image_container_td.parentNode.insertBefore(created_td, image_container_td);
    }




}


