// JavaScript code for handling the popup
const openPopupButton = document.getElementById('openAddProjectPopup');
const closePopupButton = document.getElementById('closeAddProjectPopup');
const popup = document.getElementById('addProjectPopup');
const overlay = document.getElementById('overlay');

openPopupButton.addEventListener('click', () => {
    popup.style.display = 'block';
    overlay.style.display = 'block';
    setTimeout(() => {
        popup.classList.add('popup-grow');
    }, 50);
});

closePopupButton.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
    popup.classList.remove('popup-grow');
});