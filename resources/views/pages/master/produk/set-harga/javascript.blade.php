<script>
    function labapersen(id_hpp, id_item) {
        const hpp_final_element = $('#hpp_final' + id_hpp);
        const hasil_laba_element = $('#hasil-laba' + id_item);
        const disc_1_element = $('#disc_1' + id_item);
        const disc_2_element = $('#disc_2' + id_item);
        const harga_jual_element = $('#harga-jual' + id_item);
        const laba_element = $('#laba' + id_item);

        laba_element.on('input', function() {
            let persen = 1 + parseFloat($(this).val()) / 100;
            let hpp_final = parseFloat(hpp_final_element.val().replace(".", ""));
            let result = hpp_final * persen;
            result = parseFloat(result.toFixed(3));
            hasil_laba_element.val(result);

            if (isNaN(result)) {
                hasil_laba_element.val(hpp_final);
            }

            updateHargaJual();
        });

        disc_1_element.on('input', function() {
            updateHargaJual();
        });

        disc_2_element.on('input', function() {
            updateHargaJual();
        });

        hasil_laba_element.on('input', function() {
            let inputVal = parseFloat($(this).val());
            let hpp_final = parseFloat(hpp_final_element.val().replace(".", ""));
            let hasil_persen = ((inputVal - hpp_final) / hpp_final) * 100;
            laba_element.val(hasil_persen);

            updateHargaJual();
        });

        function updateHargaJual() {
            let hpp_final = parseFloat(hpp_final_element.val().replace(".", ""));
            let result = parseFloat(hasil_laba_element.val());
            let disc_1 = parseFloat(disc_1_element.val());
            let disc_2 = parseFloat(disc_2_element.val());

            let hasil_disc_1 = result - (result * disc_1 / 100);
            let hasil_dis_2 = hasil_disc_1 - (hasil_disc_1 * disc_2 / 100);
            harga_jual_element.val(!isNaN(hasil_dis_2) ? Math.round(hasil_dis_2) : hpp_final);
        }
    }

    //setting input
    $(document).ready(function() {
        $('.number').on('input', function() {
            var sanitized = $(this).val().replace(/[^0-9,.]/g,
                '');
            $(this).val(sanitized);
        });
    });
</script>
