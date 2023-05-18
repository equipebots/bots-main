
/* Nav */

let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

/* Cotação */


const cardValuesQuotes = document.querySelectorAll('.quotes .cards .card-value');
const cardValuesStocks = document.querySelectorAll('.stocks .cards .card-value');



function fetchData() {
    fetch('https://cors-everywhere.onrender.com/https://api.hgbrasil.com/finance?key=c60e30cf')
        .then(response => response.json())
        .then(data => {
            const results = data.results;
            const stocks = results.stocks;
            const currencies = results.currencies;

            Object.entries(stocks).forEach(([key, value]) => {
                cardValuesStocks.forEach(element => {
                    const id = element.dataset.id;
                    if (id === key) {
                        element.textContent = `${value.variation.toFixed(2)}%`;
                        if (value.variation < 0) {
                            element.classList.add("negative");
                        } else {
                            element.classList.remove("negative");
                        }
                    }
                });
            });

            Object.entries(currencies).forEach(([key, value], index) => {
                if (index > 0) {
                    cardValuesQuotes.forEach(element => {
                        const id = element.dataset.id;
                        if (id === key) {
                            element.textContent = value.buy.toLocaleString('pt-BR', {
                                style: 'currency',
                                currency: 'BRL'
                            });
                        }
                    });
                }
            });
        })
        .catch(error => {
            console.error(error);
        });
}

function displayDate() {
    const dateHourElem = document.getElementById('date-hour');
    const now = new Date();
    const formattedDate = now.toLocaleDateString('pt-BR', {
        day: 'numeric',
        month: 'numeric',
        year: 'numeric'
    });
    const formattedTime = now.toLocaleTimeString('pt-BR', {
        hour: 'numeric',
        minute: 'numeric'
    });
    dateHourElem.textContent = `Atualizado em: ${formattedDate} às ${formattedTime}`;
}

fetchData();
setInterval(fetchData, 3600000);
setInterval(displayDate, 1000);

// icone
//Multiple options dropdown
//https://codepen.io/gatoledo1/pen/QWmpWjK

const optionMenu = document.querySelector(".select-menu"),
  selectBtn = optionMenu.querySelector(".select-btn"),
  options = optionMenu.querySelectorAll(".option"),
  sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () =>
  optionMenu.classList.toggle("active")
);

options.forEach((option) => {
  option.addEventListener("click", () => {
    let selectedOption = option.querySelector(".option-text").innerText;
    sBtn_text.innerText = selectedOption;

    optionMenu.classList.remove("active");
  });
});
