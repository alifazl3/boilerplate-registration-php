const loginTab = document.querySelector('.login-tab');
const signupTab = document.querySelector('.signup-tab');
const loginForm = document.querySelector('.login-form');
const signupForm = document.querySelector('.signup-form');

loginTab.addEventListener('click', function() {
  setActiveTab('login');
});

signupTab.addEventListener('click', function() {
  setActiveTab('signup');
});

function setActiveTab(tab) {
  if (tab === 'login') {
    loginTab.classList.add('active');
    signupTab.classList.remove('active');
    loginForm.classList.add('active');
    signupForm.classList.remove('active');
  } else {
    signupTab.classList.add('active');
    loginTab.classList.remove('active');
    signupForm.classList.add('active');
    loginForm.classList.remove('active');
  }
}
