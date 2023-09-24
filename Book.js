let left_btn = document.getElementsByClassName('fa-chevron-left')[0];
let right_btn = document.getElementsByClassName('fa-chevron-right')[0];
let row = document.getElementsByClassName('row')[0];

left_btn.addEventListener('click', ()=> {
    row.scrollLeft -= 140;
})

right_btn.addEventListener('click', ()=> {
    row.scrollLeft += 140;
})

// let json_url = "Book.json";

// fetch(json_url).then(Response => Response.json())
//     .then((data) => {
//         data.forEach(ele, i => {
//             let {url, title, image_src,image_alt, description} = ele;
//             let box = document.createElement('div');
//             box.classList.add('box');
//             box.innerHTML = `
//             <a href="${url}">
//                 <img src="${image_src}" alt="${image_alt}">
//                 <p class="heading">${title}</p>
//                 <p class="content">${description}</p>
//             </a>
//             `
//             row.appendChild(box);
//         });
//     });


let json_url = "Book.json";

fetch(json_url)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { // Corrected forEach loop syntax
            let { title, image_src, image_alt, description } = ele;
            let box = document.createElement('div');
            box.classList.add('box');
            box.innerHTML = `
                <a href="#">
                    <img src="${image_src}" alt="${image_alt}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row = document.querySelector('.row'); // Replace 'your-row-id' with your actual element's ID
            row.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
