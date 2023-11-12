<div class="relative w-56 text-slate-500 ">
    <input type="text" class="w-56 pr-10 form-control cari box" placeholder="Search..." oninput="searchTable()">
    <i class="absolute inset-y-0 right-0 w-4 h-4 my-auto mr-3" data-feather="search"></i>
</div>
<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.querySelector('.cari');
        filter = input.value.toUpperCase();
        table = document.getElementById('{{ $id_table }}');
        tr = table.getElementsByTagName('tr');

        for (i = 0; i < tr.length; i++) {
            for (var j = 0; j < tr[i].getElementsByTagName('td').length; j++) {
                td = tr[i].getElementsByTagName('td')[j];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                        break;
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        }
    }
</script>
