// script.js

function openModal(videoSource) {
    const modal = document.getElementById('videoModal');
    const modalVideo = document.getElementById('modalVideo');

    // Set video source and width
    modalVideo.src = videoSource;
    modalVideo.style.width = '30%'; // Sesuaikan lebar sesuai kebutuhan, contoh: 80%

    // Display modal
    modal.style.display = 'flex';
    modal.style.justifyContent = 'center';
}

function closeModal() {
    const modal = document.getElementById('videoModal');
    const modalVideo = document.getElementById('modalVideo');

    modalVideo.pause();
    modalVideo.src = '';
    modal.style.display = 'none';
}

// Close modal if clicked outside of the video
window.onclick = function(event) {
    const modal = document.getElementById('videoModal');
    if (event.target == modal) {
        closeModal();
    }
}