
document.addEventListener('DOMContentLoaded', function() {
    const actionTiles = document.querySelectorAll('.action-tile');
    const modalContents = document.querySelectorAll('.modal-content');
    const productDisplaySection = document.querySelector('.product-display-section');

    // Initially hide all modal contents
    modalContents.forEach(content => {
        content.style.display = 'none';
    });

    actionTiles.forEach(tile => {
        tile.addEventListener('click', function() {
            // Get the target modal ID from data attribute
            const targetId = this.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);

            // Remove active class from all tiles
            actionTiles.forEach(t => t.classList.remove('active'));
            // Add active class to the clicked tile
            this.classList.add('active');

            // Hide all modal contents
            modalContents.forEach(content => {
                content.style.display = 'none';
            });

            // Display the target modal content
            if (targetContent) {
                targetContent.style.display = 'block';
            }
        });
    });

    // Optional: Automatically click the first tile to show its content on page load
    if (actionTiles.length > 0) {
        actionTiles[0].click();
    }
});