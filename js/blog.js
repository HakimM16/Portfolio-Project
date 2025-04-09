const clear = () => {
    document.querySelector('input').value = '';
    document.querySelector('textarea').value = '';
}

let clearButton = document.getElementById('clear');
clearButton.addEventListener('click', clear);