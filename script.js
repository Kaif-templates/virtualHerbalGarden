document.addEventListener("DOMContentLoaded", function () {
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
        
            menuBtn.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        });



// for closing the image popup
function openModal() {
    document.getElementById("navbar").classList.add("hidden");
    document.getElementById('plantModal1').classList.remove('hidden');
}

function closeModal() {
    document.getElementById("navbar").classList.remove("hidden");
    document.getElementById('plantModal1').classList.add('hidden');
}


