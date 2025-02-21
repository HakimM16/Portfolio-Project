document.addEventListener("DOMContentLoaded", () => {
    const loaderContainer = document.querySelector(".loader-container");
    
    // Simulate loading
    setTimeout(() => {
        loaderContainer.style.display = "none"; // Hide loader
        document.body.style.overflow = "auto"; // Enable scrolling
    }, 1500); // Adjust to match animation-delay
});