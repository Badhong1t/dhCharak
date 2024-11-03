// tarek js code start from here

// for business acoount

const customerRadio = document.querySelector('input[name="accountType"][value="customer"]');
const businessRadio = document.querySelector('input[name="accountType"][value="business"]');
const businessFields = document.querySelectorAll('.business-fields');
const submitBtn = document.getElementById('submitBtn');

customerRadio?.addEventListener('change', () => {
  businessFields.forEach(field => field.classList.add('tm-hidden'));
  submitBtn.textContent = "Submit and register";
});

businessRadio?.addEventListener('change', () => {
  businessFields.forEach(field => field.classList.remove('tm-hidden'));
  submitBtn.textContent = "Submit for Approval";
});


 // file uploader

 document.addEventListener('DOMContentLoaded', function () {
    const uploadArea = document.getElementById('upload-area');
    const fileInput = document.getElementById('profile');
    const uploadText = document.getElementById('upload-text');
    const uploadIcon = document.getElementById('upload-icon');

    // Trigger file input click only when clicking within the upload area
    uploadArea.addEventListener('click', (event) => {
        if (!event.target.classList.contains('remove-icon')) {
            fileInput.click();
        }
    });

    // Handle file input change
    fileInput.addEventListener('change', () => {
        const files = fileInput.files;
        if (files.length > 0) {
            displayFileName(files[0]);
        }
    });

    function displayFileName(file) {
        // Hide the upload icon and update text to display file name
        uploadIcon.style.display = 'none';
        uploadText.innerHTML = `${file.name} <span class="remove-icon" style="cursor:pointer; color:#ff0000; font-size: 15px; margin-left: 10px;">❌</span>`;

        // Add event listener to the remove icon
        const removeIcon = uploadText.querySelector('.remove-icon');
        removeIcon.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent click from propagating to uploadArea
            resetUploadArea();
        });
    }

    function resetUploadArea() {
        // Reset display and clear file input
        fileInput.value = '';
        uploadIcon.style.display = 'inline';
        uploadText.textContent = 'Upload file';
    }
});




