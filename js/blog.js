
const clear = (event) => {
    event.preventDefault(); // Prevent the default form submission behavior
    if (confirm('Are you sure you want to clear the fields?')) {
        document.querySelector('input').value = '';
        document.querySelector('textarea').value = '';
    } else {
        alert('Fields not cleared!');
    }
}

let clearButton = document.getElementById('clear');
clearButton.addEventListener('click', clear);