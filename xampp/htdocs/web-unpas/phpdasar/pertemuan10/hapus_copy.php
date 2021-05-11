<?php

require 'functions_copy.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo
    "<script>
        alert('Data Berhasil dihapus');
        document.location.href='index_copy.php';    
    </script>
    ";
} else {
    echo
    "<script>
        alert('Data gagal dihapus');
        document.location.href='index_copy.php';
    </script>
    ";
}
