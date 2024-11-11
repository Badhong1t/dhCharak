    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
          $('.nice-select').niceSelect();
        });
      </script>

      <script>
          // for update product quantity

   // Select all quantity containers
  document.querySelectorAll(".product-details-quantity-container").forEach((container) => {
      // Select elements within the current container
      const plusBtn = container.querySelector(".increase-btn");
      const minusBtn = container.querySelector(".decrease-btn");
      const quantityInput = container.querySelector(".product-details-quantity-input");

      // Update UI function
      function updateQuantity(value) {
          quantityInput.value = value;
      }

      // Increment function
      plusBtn.addEventListener("click", () => {
          let currentValue = parseInt(quantityInput.value) || 1; // Default to 1 if value is NaN
          currentValue++;
          updateQuantity(currentValue);
      });

      // Decrement function
      minusBtn.addEventListener("click", () => {
          let currentValue = parseInt(quantityInput.value) || 1; // Default to 1 if value is NaN
          if (currentValue > 1) {  // Prevent going below 1
              currentValue--;
              updateQuantity(currentValue);
          }
      });

      // Manual input - allow typing freely but validate on blur or Enter key
      quantityInput.addEventListener("input", () => {
          // Allow typing, don't validate immediately to prevent issues like typing "20"
      });

      // Validate input when user leaves the input field (blur event) or presses Enter
      quantityInput.addEventListener("blur", validateQuantity);
      quantityInput.addEventListener("keydown", (e) => {
          if (e.key === "Enter") {
              validateQuantity();
          }
      });

      // Function to validate the input and update the UI
      function validateQuantity() {
          let inputValue = parseInt(quantityInput.value);
          if (isNaN(inputValue) || inputValue < 1) {  // Default to 1 if input is invalid
              updateQuantity(1);
          } else {
              updateQuantity(inputValue);
          }
      }
  });

      </script>
@stack('scripts')
