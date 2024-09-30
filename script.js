function setMinDate() {
    const today = new Date();
    const dd = String(today.getDate()).padStart(2, '0');
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    const yyyy = today.getFullYear();
    const minDate = yyyy + '-' + mm + '-' + dd; // Format: YYYY-MM-DD
    document.getElementById('date').setAttribute('min', minDate);
}

// Set the minimum date when the page loads
window.onload = setMinDate;

// Validate form fields before booking
function validateAndBook() {
    const origin = document.getElementById('origin').value;
    const destination = document.getElementById('destination').value;
    const date = document.getElementById('date').value;

    if (!origin || !destination || !date) {
        alert("Please fill in all fields before proceeding.");
        return; // Prevents the function from continuing
    }

    // Redirect to the bus selection page
    window.location.href = 'searchbuses.html';
}


