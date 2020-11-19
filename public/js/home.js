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

function myFunction() {
    // Declare variables
    let input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.querySelector('.table');
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}