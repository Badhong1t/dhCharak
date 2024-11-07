
document.addEventListener('DOMContentLoaded', function () {
    const quantityButtons = document.querySelectorAll('.quantity-btn');
    
    // Function to close all open modals
    function closeAllModals(exceptModal = null) {
        const allModals = document.querySelectorAll('.quantity-modal');
        allModals.forEach(modal => {
            if (modal !== exceptModal) {
                modal.classList.remove('open');
            }
        });
    }

    quantityButtons.forEach(button => {
        const modalContainer = button.nextElementSibling;
        const productQuantity = button.querySelector('.product-quantity');
        const inputField = modalContainer.querySelector('input[type="number"]');
        const finalQuantityInput = button.closest('.item').querySelector('.product-final-quantity');

        // Toggle modal visibility on button click
        button.addEventListener('click', function (event) {
            event.stopPropagation();
            
            if (modalContainer.classList.contains('open')) {
                modalContainer.classList.remove('open');
            } else {
                closeAllModals(modalContainer);
                modalContainer.classList.add('open');
            }
        });

        // Update the quantity when a number is clicked and reset the input field
        modalContainer.querySelectorAll('.quantity-number').forEach(number => {
            number.addEventListener('click', function () {
                productQuantity.textContent = number.textContent;
                finalQuantityInput.value = number.textContent;
                inputField.value = '';
                modalContainer.classList.remove('open');
                console.log(finalQuantityInput);
            });
        });

        // Update the quantity when a value is input
        inputField.addEventListener('input', function () {
            const value = inputField.value;
            productQuantity.textContent = value;
            finalQuantityInput.value = value;
            console.log(finalQuantityInput);
        });

        // Close modal if clicked outside
        document.addEventListener('click', function (event) {
            if (!modalContainer.contains(event.target) && !button.contains(event.target)) {
                modalContainer.classList.remove('open');
            }
        });
    });


    const openModalButton = document.querySelector('.home-category-dropdown-btn');
    const modalContainer = document.querySelector('.home-categories-list');

    openModalButton.addEventListener('click', function () {
        modalContainer.classList.toggle('open');
    });

    // Close modal if clicked outside of it
    document.addEventListener('click', function (event) {
        if (!modalContainer.contains(event.target) &&
            !openModalButton.contains(event.target)) {
            modalContainer.classList.remove('open');

        }
    });


    // for toggle sidebar
    // Toggle menu and body scroll on menu click
    document.querySelector('.mobile-menu').addEventListener('click', function() {
        console.log('clicking');
        document.querySelector('.header').classList.toggle('show');
        document.body.classList.toggle('no-scroll');
    });

    // Close the sidebar if clicking outside of it
    document.addEventListener('click', function(event) {
        // Check if the click is outside the sidebar and the menu button
        if (!event.target.closest('.header') && !event.target.closest('.mobile-menu')) {
            if (document.querySelector('.header').classList.contains('show')) {
                document.querySelector('.header').classList.remove('show');
                document.body.classList.remove('no-scroll');
            }
        }
    });

});


$(document).ready(function() {
    $('.nice-select').niceSelect();
  });

