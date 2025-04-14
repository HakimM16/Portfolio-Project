// make variables
let input = document.getElementById("input");
let text = document.getElementById("text");

// prevent form submission
const preventSubmit = (event) => {
    if (input.value === "" && text.value === "") {
        event.preventDefault();
        alert("Please fill in both fields.");
        input.style.border = "5px solid red";
        text.style.border = "5px solid red";

        setTimeout(function() {
            console.log("This is shown after 3 seconds");
            input.style.border = "none";
            text.style.border = "none";
        }, 1000);
    } else if (input.value === "") {
        event.preventDefault();
        alert("Please fill in the input field.");
        input.style.border = "5px solid red";

        setTimeout(function() {
            console.log("This is shown after 3 seconds");
            input.style.border = "none";
        }, 1000);
    } else if (text.value === "") {
        event.preventDefault();
        alert("Please fill in the text field.");
        text.style.border = "5px solid red";

        setTimeout(function() {
            console.log("This is shown after 3 seconds");
            text.style.border = "none";
        }, 1000);
    }
}

// add event listener to form
const form = document.getElementById("blog-form");
form.addEventListener("submit", preventSubmit);