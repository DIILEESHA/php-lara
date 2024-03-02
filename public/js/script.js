// script.js

// Function to show/hide spinner
function showSpinner() {
document.querySelector('.spinner').style.display = 'block';
}

function hideSpinner() {
document.querySelector('.spinner').style.display = 'none';
}

// Function to toggle edit form
function toggleEditForm() {
var optionsMenu = document.querySelector('.options-menu');
optionsMenu.style.display = 'none'; // Hide the options menu
var modal = document.getElementById('edit');
if (modal.style.display === 'none' || modal.style.display === '') {
modal.style.display = 'block';
} else {
modal.style.display = 'none';
}
}

function toggleSingleCloser() {
// Hide the single card component
var cardContainer = document.querySelector('.single_card_container');
cardContainer.style.display = 'none';

// Navigate back to the homepage
window.location.href = '/';
}

function toggleOptions() {
// Toggle the display of the options menu
var optionsMenu = document.querySelector('.options-menu');
optionsMenu.style.display = optionsMenu.style.display === 'none' ? 'block' : 'none';
}

function confirmDelete() {
if (confirm("Are you sure you want to delete this cloth?")) {
document.getElementById("deleteForm").submit();
}
}
