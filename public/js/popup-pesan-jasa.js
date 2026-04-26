function bukaPopup() {
    document.getElementById('overlay').classList.add('active');
    document.getElementById('popup').classList.add('active');
}

function tutupPopup() {
    document.getElementById('overlay').classList.remove('active');
    document.getElementById('popup').classList.remove('active');
}