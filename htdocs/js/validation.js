document.getElementById("feedbackForm").addEventListener("submit", function(event) {
    let isValid = true;
    const fields = ["firstName", "lastName", "email", "contact", "country", "feedback", "city"];
    let firstErrorField = null;
  
    fields.forEach(field => {
      const value = document.getElementById(field).value.trim();
      const errorSpan = document.getElementById(field + "Error");
  
      if (!value) {
        errorSpan.textContent = `Please enter your ${field}.`;
        isValid = false;
        if (!firstErrorField) firstErrorField = document.getElementById(field);
      } else {
        errorSpan.textContent = "";
      }
    });
  
    // Gender validation
    const genderError = document.getElementById("genderError");
    const genderChecked = document.querySelector('input[name="gender"]:checked');
    if (!genderChecked) {
      genderError.textContent = "Please select your gender.";
      isValid = false;
      if (!firstErrorField) firstErrorField = document.querySelector('input[name="gender"]');
    } else {
      genderError.textContent = "";
    }
  
    // Hobbies validation
    const hobbiesError = document.getElementById("hobbiesError");
    const hobbyChecked = document.querySelectorAll('input[name="hobbies[]"]:checked');
    if (hobbyChecked.length === 0) {
      hobbiesError.textContent = "Please select at least one hobby.";
      isValid = false;
      if (!firstErrorField) firstErrorField = document.querySelector('input[name="hobbies[]"]');
    } else {
      hobbiesError.textContent = "";
    }
  
    if (!isValid) {
      event.preventDefault();
      firstErrorField.focus();
    }
  });
  