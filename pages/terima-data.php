<?php
require 'koneksi.php';


if (tambah($_POST) == 1) {
?>
    <script>
        let url = "list-user.php";
        window.location.href = url;
    </script>
<?php
}
