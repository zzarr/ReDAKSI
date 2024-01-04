document.addEventListener("DOMContentLoaded", function () {
    var jenisFileDropdown = document.getElementById("jenis-file-dropdown");
    var jenisFileFilter = document.querySelector(".jenis-file-filter");

    jenisFileDropdown.addEventListener("change", function () {
        var selectedValue = jenisFileDropdown.value;

        // Menyaring tabel berdasarkan jenis file yang dipilih
        filterTable(selectedValue);
    });

    function filterTable(selectedValue) {
        var tableRows = document.querySelectorAll("#datatablesSimple tbody tr");

        tableRows.forEach(function (row) {
            var jenisFileCell = row.cells[1]; // Kolom jenis file
            var jenisFileText = jenisFileCell.textContent.trim();

            if (selectedValue === "" || jenisFileText === selectedValue) {
                row.style.display = ""; // Menampilkan baris yang sesuai
            } else {
                row.style.display = "none"; // Menyembunyikan baris yang tidak sesuai
            }
        });
    }
});
