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

let json_url1 = "General-Book.json";

fetch(json_url1)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description } = ele;
            let box = document.createElement('div');
            box.classList.add('box','general');
            box.innerHTML = `
                <a href="#">
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

let json_url2 = "Spiritual-Book.json";

fetch(json_url2)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description } = ele;
            let box = document.createElement('div');
            box.classList.add('box','spiritual');
            box.innerHTML = `
                <a href="#">
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

let json_url3 = "Computer-Book.json";

fetch(json_url3)
    .then(response => response.json())
    .then((data) => {
        data.forEach((ele) => { 
            let { title, image_src, description } = ele;
            let box = document.createElement('div');
            box.classList.add('box','computer');
            box.innerHTML = `
                <a href="#">
                    <img src="${image_src}" alt="${title}">
                    <p class="heading">${title}</p>
                    <p class="content">${description}</p>
                </a>
            `;
            // Assuming you have a 'row' element to append the 'box' elements to
            let row2 = document.querySelector('.row3'); 
            row2.appendChild(box);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });