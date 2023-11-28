<script>
    //call function
    let hppFinal = parseFloat(document.getElementById("hpp_final").value.replace(".", ""));
    var laba1Input = parseFloat(document.querySelector(".laba1").value);
    var hasilLabaInput = document.querySelector(".hasil-laba");
    let disc1Input = parseFloat(document.getElementById("disc_1_1").value);
    let disc2Input = parseFloat(document.getElementById("disc_2_1").value);
    var hargaJualInput = document.querySelector(".harga-jual");
    var hargaFinal1Input = document.querySelector(".harga-final1");
    let hpp = parseFloat(document.getElementById('hpp').value.replace(".", ""));
    var incPpnCheckbox = document.querySelector(".inc_ppn");

    document.getElementById("laba1").addEventListener("input", function() {
        laba1Input = parseFloat(this.value);
        labaPersen();
    });
    incPpnCheckbox.addEventListener('change', function() {
        // Panggil fungsi labaPersen ketika checkbox berubah
        labaPersen();
    });
    // Panggil labaPersen saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
        labaPersen();
    });

    function labaPersen() {
        if (isNaN(laba1Input)) {
            hasilLabaInput.value = '';
            hargaFinal1Input.value = ''
            hargaFinal1Input.value = ''
            return;
        }
        // Hitung total laba
        let totalLaba = Math.round((laba1Input / 100 + 1) * hpp);
        let labaReplace = totalLaba.toString().replace(/\./g, '');

        hasilLabaInput.value = labaReplace;

        // diskon harga jual & harga final
        let laba1Percent = isNaN(laba1Input) ? 0 : laba1Input / 100;
        let disc1Percent = isNaN(disc1Input) ? 0 : disc1Input / 100;
        let disc2Percent = isNaN(disc2Input) ? 0 : disc2Input / 100;
        let diskon1 = labaReplace * disc1Percent;
        let diskon2 = labaReplace * disc2Percent;
        let totalDiskon = diskon1 + diskon2;
        // harga jual
        let totalHarga = totalLaba - totalDiskon;
        hargaJualInput.value = totalHarga;

        // Periksa apakah incPpnCheckbox dicentang
        if (incPpnCheckbox.checked) {
            const desimalPpn = incPpnCheckbox.value / 100;
            totalHarga -= Math.round(desimalPpn * totalHarga);
        }
        // harga final
        hargaFinal1Input.value = totalHarga;
    }
</script>
