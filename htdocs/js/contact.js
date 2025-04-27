document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
  
    form.addEventListener('submit', function (e) {
      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const contact = document.getElementById('contact').value.trim();
      const country = document.getElementById('country').value.trim();
      const message = document.getElementById('message').value.trim();
  
      if (!name || !email || !contact || !country || !message) {
        e.preventDefault(); // prevent submission
        alert('Please fill in all fields.');
        return;
      }
  
      const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if (!emailPattern.test(email)) {
        e.preventDefault(); // prevent submission
        alert('Please enter a valid email address.');
        return;
      }
  
      // Form is valid, allow normal submission to PHP
    });
  });
  