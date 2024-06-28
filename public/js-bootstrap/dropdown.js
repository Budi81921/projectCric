document.addEventListener('DOMContentLoaded', function() {
    const checkboxes1 = document.querySelectorAll('#dropdown-type .form-check-input');
    const checkboxes2 = document.querySelectorAll('#dropdown-location .form-check-input');
    const dropdownButton1 = document.getElementById('dropdownMenuButton1');
    const dropdownButton2 = document.getElementById('dropdownMenuButton2');
    const dropdownButton3 = document.getElementById('dropdownMenuButton3');

    checkboxes1.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            updateDropdownText(dropdownButton1, checkboxes1, 'Tipe');
        });
    });

    checkboxes2.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            updateDropdownText(dropdownButton2, checkboxes2, 'Lokasi');
        });
    });

    function updateDropdownText(button, checkboxes, prefix) {
        let selectedOptions = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedOptions.push(checkbox.value);
            }
        });

        if (selectedOptions.length > 0) {
            button.textContent = prefix + ': ' + selectedOptions.join(', ');
        } else {
            button.textContent = button.getAttribute('data-original-text');
        }
    }

    const dropdownItems3 = document.querySelectorAll('#dropdown-salary .dropdown-item');
    dropdownItems3.forEach(item => {
        item.addEventListener('click', function() {
            dropdownButton3.textContent = 'Gaji: ' + item.textContent;
        });
    });

    // Simpan teks default untuk dropdown "Tipe Pekerjaan" dan "Lokasi Kerja"
    dropdownButton1.setAttribute('data-original-text', dropdownButton1.textContent);
    dropdownButton2.setAttribute('data-original-text', dropdownButton2.textContent);
});
