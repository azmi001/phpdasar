// ambil dulu emelemen yang kita butuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambhakan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // mengecek kesiapan ajax-nya
    xhr.onreadystatechange = function() {
        if ( xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();
})