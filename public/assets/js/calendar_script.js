const wrapper_calendar = document.querySelector('.wrapper_calendar');
const calendar_no = wrapper_calendar.querySelector('.calendar_no');
const bookNowButtons = document.querySelectorAll('[data-action="confirmation"]');
const iconClose = document.querySelector('.icon-closed');

bookNowButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        console.log('Book Now button clicked');
        wrapper_calendar.classList.add('active-popup');
    });
});

calendar_no.addEventListener('click', (event) => {
    event.preventDefault();
    console.log('No button clicked');
    wrapper_calendar.classList.remove('active-popup');
});

iconClose.addEventListener('click', () => {
    wrapper_calendar.classList.remove('active-popup');
});
