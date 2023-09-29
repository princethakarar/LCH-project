let search = document.getElementsByClassName('search')[0];
let search_input = document.querySelector('#search_input');

// Mix json for search bar

let json_url7 = "json files/Mix.json";


fetch(json_url7)
    .then(response => response.json())
    .then((data) => {

        data.forEach(element => {
            let { title, image_src, description, url } = element;
            let card = document.createElement('a');
            card.classList.add('card');
            card.innerHTML = `
             <a href="${url}" class="card">
                <img src="${image_src}" alt="${title}">
                <div class="cont">
                    <h4>${title}</h4>
                    <p>${description}</p>  
                </div>
             </a>    
            `
            search.appendChild(card);
        });
        // search filter

        search_input.addEventListener('keyup', () => {
            let filter = search_input.value.toUpperCase();
            let a = search.getElementsByTagName('a');

            for (let index = 0; index < a.length; index++) {
                let b = a[index].getElementsByClassName('cont')[0];
                // console.log(a.textContent);
                let TextValue = b.textContent || b.innerText;
                if(TextValue.toUpperCase().indexOf(filter) > -1)
                {
                    a[index].style.display = "flex";
                    search.style.visibility = "visible";
                    search.style.opacity = 1;
                }
                else
                {
                    a[index].style.display = "none";
                }
            }
        })
    });