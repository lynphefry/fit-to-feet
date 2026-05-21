// FEET TO FIT JAVASCRIPT

// Welcome Message

console.log("Welcome to FEET TO FIT Gym");

// ===============================
// FETCH TRAINERS DATA
// ===============================

fetch("https://jsonplaceholder.typicode.com/users")

.then(response => response.json())

.then(data => {

    console.log(data);

    const trainersContainer =
    document.getElementById("trainers-data");

    data.slice(0, 6).forEach(trainer => {

        trainersContainer.innerHTML += `

        <div class="col-lg-4 col-md-6 mb-4">

            <div class="card-box p-4 text-center">

                <h3>${trainer.name}</h3>

                <p>${trainer.email}</p>

                <p>${trainer.phone}</p>

                <button class="btn-yellow">
                    Book Trainer
                </button>

            </div>

        </div>

        `;

    });

})

.catch(error => {

    console.log("Error fetching data:", error);

});

// ===============================
// CONTACT FORM
// ===============================

const form = document.querySelector("form");

if(form){

    form.addEventListener("submit", function(event){

        event.preventDefault();

        alert("Message Sent Successfully!");

        form.reset();

    });

}

// ===============================
// BUTTON CLICK EFFECT
// ===============================

const buttons =
document.querySelectorAll(".btn-yellow");

buttons.forEach(button => {

    button.addEventListener("click", () => {

        console.log("Button clicked!");

    });

});

// ===============================
// DARK MODE TOGGLE
// ===============================

const darkBtn =
document.getElementById("darkModeBtn");

if(darkBtn){

    darkBtn.addEventListener("click", () => {

        document.body.classList.toggle("light-mode");

    });

}
