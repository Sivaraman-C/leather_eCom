  // Countries and states selection

  const countrySelect = document.getElementById('mn-select-country');
  const stateSelect = document.getElementById('mn-select-state');
  let countriesData = [];

  // Fetch countries and states from API
  fetch('https://countriesnow.space/api/v0.1/countries/states')
    .then(response => response.json())
    .then(data => {
      countriesData = data.data;

      countriesData.forEach(country => {
        const option = document.createElement('option');
        option.value = country.name;
        option.textContent = country.name;
        countrySelect.appendChild(option);
      });
    });

  // When a country is selected, populate the state dropdown
  countrySelect.addEventListener('change', function () {
    const selectedCountry = this.value;
    const foundCountry = countriesData.find(c => c.name === selectedCountry);

    // Reset state dropdown
    stateSelect.innerHTML = '<option selected disabled>Region/State</option>';

    if (foundCountry && foundCountry.states.length > 0) {
      foundCountry.states.forEach(state => {
        const option = document.createElement('option');
        option.value = state.name;
        option.textContent = state.name;
        stateSelect.appendChild(option);
      });
    } else {
      const option = document.createElement('option');
      option.disabled = true;
      option.textContent = 'No states available';
      stateSelect.appendChild(option);
    }
  });

  // Contact validation

  const phoneInput = document.getElementById('phone');
  const phoneError = document.getElementById('phone-error');

  phoneInput.addEventListener('input', () => {
    const phoneValue = phoneInput.value;

    if (phoneValue.length > 10) {
      phoneInput.value = phoneValue.slice(0, 10); // restrict to 10 digits
    }

    if (phoneValue.length < 10) {
      phoneError.style.display = 'block';
    } else {
      phoneError.style.display = 'none';
    }
  });

  // Show & Hide password

    function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.querySelector(".toggle-password");
    
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleIcon.textContent = "🙈"; // Hide icon
    } else {
      passwordInput.type = "password";
      toggleIcon.textContent = "👁️"; // Show icon
    }
  }