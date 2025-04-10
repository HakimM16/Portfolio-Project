// make variables
let input = document.getElementById("input");
let text = document.getElementById("text");

// prevent form submission
const preventSubmit = (event) => {
    if (input.value === "" && text.value === "") {
        event.preventDefault();
        alert("Please fill in both fields.");
    } else if (input.value === "") {
        event.preventDefault();
        alert("Please fill in the input field.");
    } else if (text.value === "") {
        event.preventDefault();
        alert("Please fill in the text field.");
    }
}

// add event listener to form
const form = document.getElementById("blog-form");
form.addEventListener("submit", preventSubmit);