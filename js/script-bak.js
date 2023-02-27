// Mendapatkan elemen select untuk tempat wisata
const wisata = document.getElementById("wisata");

// Mendapatkan elemen input untuk harga tiket
const harga = document.getElementById("harga");

// Memberikan event listener pada elemen select
wisata.addEventListener("change", function () {
    // Mendapatkan nilai option yang dipilih
    const selectedWisata = wisata.value;

    // Menentukan harga tiket berdasarkan nilai option yang dipilih
    let ticketPrice = 0;
    if (selectedWisata === "Pantai Klara") {
        ticketPrice = 100000;
    } else if (selectedWisata === "Pantai Mutun") {
        ticketPrice = 150000;
    } else if (selectedWisata === "Pahawang") {
        ticketPrice = 300000;
    }

    // Mengubah nilai input harga tiket dengan harga yang sesuai
    harga.value = ticketPrice.toString();
});

// Mendapatkan elemen input untuk harga tiket, pengunjung dewasa, dan pengunjung anak-anak
const dewasa = document.getElementById("dewasa");
const anak = document.getElementById("anak");


// Mendapatkan elemen input untuk total bayar
const totalBayar = document.getElementById("total-bayar");

// Memberikan event listener pada elemen input pengunjung dewasa dan pengunjung anak-anak
dewasa.addEventListener("input", hitungTotalBayar);
anak.addEventListener("input", hitungTotalBayar);

// Fungsi untuk menghitung total bayar
function hitungTotalBayar() {
    // Mendapatkan nilai input harga tiket
    const ticketPrice = parseInt(harga.value.replace(/\D/g, ""));
    const durasi = document.getElementById("durasi");
    // Mendapatkan nilai input pengunjung dewasa dan anak-anak
    const dewasaValue = parseInt(dewasa.value);
    const anakValue = parseInt(anak.value);
    const durasiValue = parseInt(durasi.value);

    // Menghitung total bayar berdasarkan harga tiket dan jumlah pengunjung dewasa dan anak-anak
    const total = ticketPrice * dewasaValue + 0.5 * ticketPrice * anakValue;

    // Mengubah nilai input total bayar dengan total yang sesuai
    totalBayar.value = (durasiValue*total).toString();
}
const agreeCheckbox = document.getElementById("agree");
const pesanTiketButton = document.getElementById("pesan-tiket-button");

agreeCheckbox.addEventListener("change", function () {

    if (this.checked) {
        pesanTiketButton.disabled = false;
        console.log("Checked");
    } else {
        pesanTiketButton.disabled = true;
        console.log("Unchecked");
    }
});
