window.onload = function () {
    let tdList = document.getElementsByTagName('td');
    for (let td of tdList) {
        if(td.textContent === '+0' || td.textContent === '' || td.textContent === '0' ){
            td.style.backgroundColor = 'white';
            td.style.color = 'black';
            td.textContent = '';
        }
    }
}