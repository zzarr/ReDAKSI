document.addEventListener("DOMContentLoaded", function () {
    const fileInput = document.getElementById("file-upload");
    const fileNameInfo = document.getElementById("file-name-info");
    const dropArea = document.getElementById("drop-area");

    dropArea.addEventListener("dragover", (e) => {
        e.preventDefault();
        dropArea.classList.add("dragover");
    });

    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("dragover");
    });

    dropArea.addEventListener("drop", (e) => {
        e.preventDefault();
        dropArea.classList.remove("dragover");

        const files = e.dataTransfer.files;
        handleFiles(files);
    });

    fileInput.addEventListener("change", () => {
        handleFiles(fileInput.files);
    });

    // Periksa saat halaman dimuat
    if (fileInput.files.length > 0) {
        displayFileName(fileInput.files[0].name);
    } else {
        resetFileName();
    }
});

function displayFileName(fileName) {
    const fileNameInfo = document.getElementById("file-name-info");
    fileNameInfo.textContent = `Selected file: ${fileName}`;
}

function handleFiles(files) {
    const fileNameInfo = document.getElementById("file-name-info");

    // Menggantikan file sebelumnya dengan file terbaru
    const selectedFile = files.length > 0 ? files[0] : null;

    if (selectedFile !== null) {
        const allowedExtensions = ["docx", "pdf", "xlsx"]; // Tentukan ekstensi yang diizinkan
        const fileExtension = selectedFile.name.split(".").pop().toLowerCase();

        if (allowedExtensions.includes(fileExtension)) {
            // Ekstensi file diizinkan, lanjutkan pemrosesan
            displayFileName(selectedFile.name);
        } else {
            // Ekstensi file tidak diizinkan, reset nama file
            resetFileName();
            alert(
                "File type not allowed. Please upload a DOCX, PDF, OR XLSX file."
            );
        }
    } else {
        resetFileName();
    }

    // Lakukan sesuatu dengan file, misalnya kirim ke server menggunakan Ajax atau proses lokal
}

function resetFileName() {
    const fileNameInfo = document.getElementById("file-name-info");
    fileNameInfo.textContent = "DOCX, PDF, XLSX Tidak Melebihi 10MB";
}
