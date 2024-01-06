const signupBtn = document.getElementById('signup-btn');
const signupModal = document.getElementById('signup-modal');
const closeBtn = document.getElementsByClassName('close')[0];
const signupForm = document.getElementById('signup-form');

signupBtn.addEventListener('click', () => {
  signupModal.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
  signupModal.style.display = 'none';
});

signupForm.addEventListener('submit', (e) => {
  e.preventDefault();
  // Handle form submission here
  // You can use JavaScript or send a request to a server
  console.log('Form submitted!');
  signupModal.style.display = 'none';
});

