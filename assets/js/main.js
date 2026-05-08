// ===============Nav=================
const menuButton = document.querySelector("header div button:first-of-type");
const closeNavButton = document.querySelector("header nav > button");
const navBar = document.querySelector("header nav");

function showMenu() {
    navBar.classList.add("navIsOpen");
}

function closeMenu() {
    navBar.classList.remove("navIsOpen");
}

// elementVariable.addEventListener("eventName", functionName);
menuButton.addEventListener("click", showMenu); // add an event listener to the button
closeNavButton.addEventListener("click", closeMenu); // add an event listener to the button


// ============== Home Page Filters ==================
// Ensure these variables are defined at the top
const filterButtons = document.querySelectorAll("#filter-buttons button");
const filterableCards = document.querySelectorAll("#filterable-cards .card");

const filterCards = (e) => {
    // Use e.currentTarget to ensure we get the button even if clicking inner text
    const clickedButton = e.currentTarget;

    // 1. Manage Active Button
    const currentActive = document.querySelector("#filter-buttons .active");
    if (currentActive) currentActive.classList.remove("active");
    clickedButton.classList.add("active");

    // 2. Get the filter value (lowercase and trimmed)
    const filterValue = clickedButton.dataset.filter.toLowerCase().trim();

    filterableCards.forEach(card => {
        // 3. Get the card category from the data-name attribute
        const cardCategory = card.dataset.name.toLowerCase().trim();

        // 4. Logic: Show if 'all' or if it matches the category
        if (filterValue === "all" || cardCategory === filterValue) {
            card.classList.remove("hide");
            card.classList.add("show");
        } else {
            card.classList.remove("show");
            card.classList.add("hide");
        }
    });
};

// 5. Attach the listeners (only once!)
filterButtons.forEach(button => button.addEventListener("click", filterCards));



// =============theme===================
const modeButton = document.querySelector("#mode");
const body = document.querySelector(".body");
const modeIcon = document.querySelector("#mode img");
function changeMode() {
  body.classList.toggle("darkMode");}
modeButton.addEventListener("click", changeMode);


// ===============scroll down button=================
// when the user clicks on the button, scroll to the top of the document
// get the button:
let mybutton = document.getElementById("myBtn");

// when the user scrols down 20px from the top of the documant,show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the buton,scroll to the top of the documant
function topFunction() {
  document.documentElement.scrollTop = 0;
}
//date filter
const filterdateButton = document.querySelector(".datefilter");




// =================section filters=========================
document.addEventListener("DOMContentLoaded", () => {
    const filterableCardsContainers = document.querySelectorAll("#filterEvent > .col-auto");
    const allFilterButtons = document.querySelectorAll(".dropdown-item");

    // State object to remember the selection
    let activeFilters = {
        section: 'all'
    };

    // The main logic function
    const runAllFilters = () => {
        filterableCardsContainers.forEach(container => {
            const card = container.querySelector(".card");
            if (!card) return;

            // Get the card section and clean it up (lowercase and no spaces)
            const cardSection = (card.dataset.section || "").toLowerCase().trim();
            const selectedSection = activeFilters.section.toLowerCase().trim();

            // Check: Is it "all" OR does it match the button?
            const isMatch = selectedSection === 'all' || cardSection === selectedSection;

            // Apply visibility
            if (isMatch) {
                container.style.setProperty('display', 'flex', 'important');
            } else {
                container.style.setProperty('display', 'none', 'important');
            }
        });
    };

    // Attach the trigger to the buttons
    allFilterButtons.forEach(button => {
        button.addEventListener("click", (e) => {
            // Prevent link behavior if it's an <a> tag
            e.preventDefault();

            // Get the filter value from the clicked button
            const filterValue = e.target.dataset.filter;
            const parentId = e.target.closest('ul').id;

            // Only update if it's a section filter
            if (parentId === "filterSection") {
                activeFilters.section = filterValue;
            }
            const dropdownToggle = e.target.closest('.dropdown').querySelector('.dropdown-toggle');
            dropdownToggle.textContent = e.target.textContent;
            runAllFilters();
        });
    });
});


// ===============language=================
const currentLangElement = document.getElementById('currentLang');
const elements = document.querySelectorAll('[data-en]');
const flagEn = document.getElementById('flag-en');
const flagAr = document.getElementById('flag-ar');

// function to updat (en and ar)
function setLanguage(langCode) {
  const isArabic = langCode === 'ar';

  //   text content
  elements.forEach(el => {
    el.textContent = isArabic ? el.dataset.ar : el.dataset.en;
  });

  //text direction
  document.body.dir = isArabic ? 'rtl' : 'ltr';
  currentLangElement.textContent = isArabic ? 'Arabic' : 'English';
}

//  default language (English)
setLanguage('en');


// document.getElementById("contactForm").addEventListener("submit", function(e)
// {
//     e.preventDefault();

//     let name = document.getElementById("name").value.trim();
//     let email = document.getElementById("email").value.trim();
//     let message = document.getElementById("message").value.trim();
//     let box = document.getElementById("messageBox");
//     let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//     if (name === "" || email === "" || message === "") {

//         e.preventDefault();

//         box.innerHTML = '<div class="alert alert-danger">All fields are mandatory. Please fill them out before submitting.</div>';

//         if(name === "") document.getElementById("name").focus();
//         else if(email === "") document.getElementById("email").focus();
//         else if(message === "") document.getElementById("message").focus();

//         return;
//     }

//     if(!emailPattern.test(email)){
//         box.innerHTML = '<div class="alert alert-warning">Please enter a valid email address.</div>';
//         return;
//     }

//     box.innerHTML = '<div class="alert alert-success">Your message has been sent successfully.</div>';
//     document.getElementById("contactForm").reset();
// });


document.getElementById("contactForm").addEventListener("btnSubmit", function(e) {
    // 1. Always prevent the default form submission first
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const box = document.getElementById("messageBox");

    // Regular expression for basic email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // 2. Check for empty fields
    if (name === "" || email === "" || message === "") {
        box.innerHTML = '<div class="alert alert-danger">All fields are mandatory.</div>';

        // Focus the first empty field found
        if (name === "") document.getElementById("name").focus();
        else if (email === "") document.getElementById("email").focus();
        else if (message === "") document.getElementById("message").focus();

        return;
    }

    // 3. Check for valid email format
    if (!emailPattern.test(email)) {
        box.innerHTML = '<div class="alert alert-warning">Please enter a valid email address.</div>';
        document.getElementById("email").focus();
        return;
    }

    // 4. If we reached here, validation passed!
    box.innerHTML = '<div class="alert alert-success">Your message has been sent successfully.</div>';

    this.reset();
});