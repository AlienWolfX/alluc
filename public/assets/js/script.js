
const wrapper = document.querySelector('.wrapper');
const signinLink = document.querySelector('.signin-link');
const signupLink = document.querySelector('.signup-link');

const iconPopup = document.querySelector('[data-action="Signup"]');
const btnPopup = document.querySelector('[data-action="Signin"]');
const iconClose = document.querySelector('.icon-closed');

signupLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});

signinLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
});
iconPopup.addEventListener('click', ()=>{
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', ()=>{
    wrapper.classList.remove('active-popup');
});

