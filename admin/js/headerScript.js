document.addEventListener("DOMContentLoaded", function () {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const navbarMenu = document.querySelector(".navbar-menu");
    const toggleMenu = document.createElement("div");
    toggleMenu.className = "toggle-menu";
    toggleMenu.innerHTML = `
        <ul>
            <li><a href="./admin.php">Home</a></li>
            <li><a href="./projectsAdmin.php">Projects</a></li>
            <li><a href="./contactAdmin.php">Contact</a></li>
        </ul>
    `;

    hamburgerMenu.addEventListener("click", function () {
        document.body.appendChild(toggleMenu);
        navbarMenu.classList.toggle("show-menu");
        toggleMenu.classList.toggle("show-menu");
    });

    toggleMenu.addEventListener("click", function () {
        navbarMenu.classList.remove("show-menu");
        toggleMenu.classList.remove("show-menu");
        toggleMenu.remove();
    });
});
