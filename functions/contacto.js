document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const fileInput = document.getElementById('file-upload');
    const fileError = document.getElementById('file-error');
    
    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        const fileName = file.name.toLowerCase();

        if (!fileName.endsWith('.mp3')) {
            fileError.classList.remove('hidden');
            return;
        } else {
            fileError.classList.add('hidden');
        }
    }

    showSuccessModal();

    document.getElementById('contact-form').reset();
});

function showSuccessModal() {
    const modal = document.getElementById('successModal');
    modal.classList.remove('hidden');
    
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 3000);
}

function closeSuccessModal() {
    const modal = document.getElementById('successModal');
    modal.classList.add('hidden');
}
