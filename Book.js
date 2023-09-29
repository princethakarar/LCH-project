let left_btn1 = document.getElementsByClassName('fa-chevron-left1')[0];
let right_btn1 = document.getElementsByClassName('fa-chevron-right1')[0];
let row1 = document.getElementsByClassName('row1')[0];


left_btn1.addEventListener('click', ()=> {
    row1.scrollLeft -= 140;
})

right_btn1.addEventListener('click', ()=> {
    row1.scrollLeft += 140;
})

// General books

let json_url1 = "json files/General-Book.json";

fetch(json_url1)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description, url } = ele;
            let box = document.createElement('div');
            box.classList.add('box','general');
            box.innerHTML = `
                <a href="${url}">
                    <img src="${image_src}" alt="${title}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row1 = document.querySelector('.row1'); 
            row1.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

// Spiritual books

let left_btn2 = document.getElementsByClassName('fa-chevron-left2')[0];
let right_btn2 = document.getElementsByClassName('fa-chevron-right2')[0];
let row2 = document.getElementsByClassName('row2')[0];

left_btn2.addEventListener('click', ()=> {
    row2.scrollLeft -= 140;
})

right_btn2.addEventListener('click', ()=> {
    row2.scrollLeft += 140;
})

let json_url2 = "json files/Spiritual-Book.json";

fetch(json_url2)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description, url } = ele;
            let box = document.createElement('div');
            box.classList.add('box','spiritual');
            box.innerHTML = `
                <a href="${url}">
                    <img src="${image_src}" alt="${title}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row2 = document.querySelector('.row2'); 
            row2.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

// Computer books

let left_btn3 = document.getElementsByClassName('fa-chevron-left3')[0];
let right_btn3 = document.getElementsByClassName('fa-chevron-right3')[0];
let row3 = document.getElementsByClassName('row3')[0];

left_btn3.addEventListener('click', ()=> {
    row3.scrollLeft -= 140;
})

right_btn3.addEventListener('click', ()=> {
    row3.scrollLeft += 140;
})

let json_url3 = "json files/Computer-Book.json";

fetch(json_url3)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description, url } = ele;
            let box = document.createElement('div');
            box.classList.add('box','computer');
            box.innerHTML = `
                <a href="${url}">
                    <img src="${image_src}" alt="${title}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row3 = document.querySelector('.row3'); 
            row3.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

// Automobile books

let left_btn4 = document.getElementsByClassName('fa-chevron-left4')[0];
let right_btn4 = document.getElementsByClassName('fa-chevron-right4')[0];
let row4 = document.getElementsByClassName('row4')[0];

left_btn4.addEventListener('click', ()=> {
    row4.scrollLeft -= 140;
})

right_btn4.addEventListener('click', ()=> {
    row4.scrollLeft += 140;
})

let json_url4 = "json files/Automobile-Book.json";

fetch(json_url4)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description, url } = ele;
            let box = document.createElement('div');
            box.classList.add('box','automobile');
            box.innerHTML = `
                <a href="${url}">
                    <img src="${image_src}" alt="${title}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row4 = document.querySelector('.row4'); 
            row4.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

// Civil books

let left_btn5 = document.getElementsByClassName('fa-chevron-left5')[0];
let right_btn5 = document.getElementsByClassName('fa-chevron-right5')[0];
let row5 = document.getElementsByClassName('row5')[0];

left_btn5.addEventListener('click', ()=> {
    row5.scrollLeft -= 140;
})

right_btn5.addEventListener('click', ()=> {
    row5.scrollLeft += 140;
})

let json_url5 = "json files/Civil-Book.json";

fetch(json_url5)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description, url } = ele;
            let box = document.createElement('div');
            box.classList.add('box','civil');
            box.innerHTML = `
                <a href="${url}">
                    <img src="${image_src}" alt="${title}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row5 = document.querySelector('.row5'); 
            row5.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });

// Mechanical books

let left_btn6 = document.getElementsByClassName('fa-chevron-left6')[0];
let right_btn6 = document.getElementsByClassName('fa-chevron-right6')[0];
let row6 = document.getElementsByClassName('row6')[0];

left_btn6.addEventListener('click', ()=> {
    row6.scrollLeft -= 140;
})

right_btn6.addEventListener('click', ()=> {
    row6.scrollLeft += 140;
})

let json_url6 = "json files/Mechanical-Book.json";

fetch(json_url6)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description, url } = ele;
            let box = document.createElement('div');
            box.classList.add('box','civil');
            box.innerHTML = `
                <a href="${url}">
                    <img src="${image_src}" alt="${title}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row6 = document.querySelector('.row6'); 
            row6.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });