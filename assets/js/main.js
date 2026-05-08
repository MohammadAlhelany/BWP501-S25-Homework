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
const filterButtons = document.querySelectorAll("#filter-buttons button");
const filterableCards = document.querySelectorAll("#filterable-cards .card");

const filterCards = (e) => {
    const clickedButton = e.currentTarget;

    //Active Button
    const currentActive = document.querySelector("#filter-buttons .active");
    if (currentActive) currentActive.classList.remove("active");
    clickedButton.classList.add("active");

    // Get the filter value
    const filterValue = clickedButton.dataset.filter.toLowerCase().trim();

    filterableCards.forEach(card => {
        // Get the card category from the data-name attribute
        const cardCategory = card.dataset.name.toLowerCase().trim();

        // Logik: Show if 'all' or if it matches the category
        if (filterValue === "all" || cardCategory === filterValue) {
            card.classList.remove("hide");
            card.classList.add("show");
        } else {
            card.classList.remove("show");
            card.classList.add("hide");
        }
    });
};

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

            // get the card section and clean it up (lowercase and no spaces)
            const cardSection = (card.dataset.section || "").toLowerCase().trim();
            const selectedSection = activeFilters.section.toLowerCase().trim();

            // check: Is it "all" OR does it match the button?
            const isMatch = selectedSection === 'all' || cardSection === selectedSection;

            // apply visibility
            if (isMatch) {
                container.style.setProperty('display', 'flex', 'important');
            } else {
                container.style.setProperty('display', 'none', 'important');
            }
        });
    };


    allFilterButtons.forEach(button => {
        button.addEventListener("click", (e) => {
            e.preventDefault();

            const filterValue = e.target.dataset.filter;
            const parentId = e.target.closest('ul').id;

            if (parentId === "filterSection") {
                activeFilters.section = filterValue;
            }
            const dropdownToggle = e.target.closest('.dropdown').querySelector('.dropdown-toggle');
            dropdownToggle.textContent = e.target.textContent;
            runAllFilters();
        });
    });
});

document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const box = document.getElementById("messageBox");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (name === "" || email === "" || message === "") {
        box.innerHTML = '<div class="alert alert-danger">All fields are mandatory.</div>';

        if (name === "") document.getElementById("name").focus();
        else if (email === "") document.getElementById("email").focus();
        else if (message === "") document.getElementById("message").focus();
        return;
    }

    if (!emailPattern.test(email)) {
        box.innerHTML = '<div class="alert alert-warning">Please enter a valid email address.</div>';
        document.getElementById("email").focus();
        return;
    }

    box.innerHTML = '<div class="alert alert-success">Your message has been sent successfully.</div>';

    this.reset();
});


// =========Booking modal====================
// function to open the modal when "Add to calendar" is clicked
function bookEvent() {
    const myModal = new bootstrap.Modal(document.getElementById('bookingModal'));
    myModal.show();
}

//Function to handle the "Confirm Booking" button logic
function confirmBooking() {
    const userName = document.getElementById("userName").value.trim();
    const messageBox = document.getElementById("bookingMessage");

    if (userName === "") {
        messageBox.innerHTML = '<div class="alert alert-danger">Please enter your name to book.</div>';
        document.getElementById("userName").focus();
        return;
    }


    messageBox.innerHTML = '<div class="alert alert-success">Booking successful! Check your calendar.</div>';

    setTimeout(() => {
        document.getElementById("userName").value = "";
        messageBox.innerHTML = "";
        const modalElement = document.getElementById('bookingModal');
        const modalInstance = bootstrap.Modal.getInstance(modalElement);
        modalInstance.hide();
    }, 2000);
}