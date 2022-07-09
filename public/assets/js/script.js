$('#data-table').DataTable();
$('.select2').select2();
$('.datepicker-input').datepicker();
new Quill('#editor', {
    theme: 'snow'
});

const activePage = window.location.pathname;
const navLink = document.querySelectorAll('.side-nav-inner a');

navLink.forEach(link => {
    if (link.href.includes(`${activePage}`)) {
        link.classList.add('active');
    }
})