window.addEventListener('setIcon', event => {
    // Menyusun ikon berdasarkan data yang dikirimkan
    const iconInput = document.querySelector('[name="icon"]');
    iconInput.value = event.detail.icon;
});