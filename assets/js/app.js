
document.addEventListener('DOMContentLoaded', function() {
  const personIcon = document.querySelector('.person-icon');
  const popupContainer = document.querySelector('.popup-container');
  const loginForm = document.getElementById('loginForm');
  const signupForm = document.getElementById('signupForm');
  const closeBtns = document.querySelectorAll('.close-btn');
  const openSignupFormBtn = document.getElementById('openSignupForm');

  personIcon.addEventListener('click', function() {
    popupContainer.classList.add('active');
    loginForm.classList.add('active');
    signupForm.classList.remove('active');
  });

  openSignupFormBtn.addEventListener('click', function() {
    loginForm.classList.remove('active');
    signupForm.classList.add('active');
  });

  closeBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      popupContainer.classList.remove('active');
      loginForm.classList.remove('active');
      signupForm.classList.remove('active');
    });
  });

  popupContainer.addEventListener('click', function(e) {
    if (e.target === popupContainer) {
      popupContainer.classList.remove('active');
      loginForm.classList.remove('active');
      signupForm.classList.remove('active');
    }
  });
});

document.querySelector(".popout.active .close-btn").addEventListener("click", function(){
      document.querySelector(".popout.active").classList.remove("acitve")
})
  


