// show hide input text jumlah anak 
const jumlahAnak = document.getElementById("jmlhAnak");
const form = document.getElementById("frm");

form.addEventListener("input", () => {
  if (form.status.value == "Menikah") {
    jumlahAnak.classList.add("d-block");
    jumlahAnak.classList.remove("d-none");
  } else if (form.status.value == "Belum Menikah") {
    jumlahAnak.classList.add("d-none");
    jumlahAnak.classList.remove("d-block");
  }
});

// validation