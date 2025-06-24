const toggleBtn = document.getElementById('toggleSidebar');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const content = document.getElementById('main-content');

// Toggle sidebar
toggleBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // chặn lan click ra ngoài
    if (window.innerWidth <= 768) {
        sidebar.classList.toggle('show');
        overlay.classList.toggle('show');
    } else {
        sidebar.classList.toggle('collapsed');
        content.classList.toggle('full');
    }
});

// Click overlay => đóng sidebar
// overlay.addEventListener('click', () => {
//     sidebar.classList.remove('show');
//     overlay.classList.remove('show');
// });

// Click bất kì đâu ngoài sidebar => đóng sidebar mobile
document.addEventListener('click', (e) => {
    if (window.innerWidth <= 768 && sidebar.classList.contains('show')) {
        if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        }
    }
});

