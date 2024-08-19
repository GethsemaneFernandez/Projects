document.addEventListener('DOMContentLoaded', () => {
    const addButton = document.getElementById('addButton');
    const tableBody = document.getElementById('tableBody');

    addButton.addEventListener('click', () => {
        const inputID = document.getElementById('inputID').value;
        const inputName = document.getElementById('inputName').value;
        const inputAge = document.getElementById('inputAge').value;
        const inputEmail = document.getElementById('inputEmail').value;

        if (inputID && inputName && inputAge && inputEmail) {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${inputID}</td>
                <td>${inputName}</td>
                <td>${inputAge}</td>
                <td>${inputEmail}</td>
                <td><button class="edit">Edit</button> <button class="delete">Delete</button></td>
            `;
            tableBody.insertBefore(newRow, tableBody.lastElementChild);

            // Clear the input fields after adding the row
            document.getElementById('inputID').value = '';
            document.getElementById('inputName').value = '';
            document.getElementById('inputAge').value = '';
            document.getElementById('inputEmail').value = '';
        } else {
            alert('Please fill in all fields');
        }
    });

    // Event delegation for edit and delete buttons
    tableBody.addEventListener('click', (event) => {
        if (event.target.classList.contains('delete')) {
            event.target.parentElement.parentElement.remove();
        }

        if (event.target.classList.contains('edit')) {
            const row = event.target.parentElement.parentElement;
            const cells = row.querySelectorAll('td');
            document.getElementById('inputID').value = cells[0].innerText;
            document.getElementById('inputName').value = cells[1].innerText;
            document.getElementById('inputAge').value = cells[2].innerText;
            document.getElementById('inputEmail').value = cells[3].innerText;

            // Remove the row after editing
            row.remove();
        }
    });
});
