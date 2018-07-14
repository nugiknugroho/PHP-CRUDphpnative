<?php 

session_start();

unset($_SESSION['login']);

session_destroy();

 echo "
            <script>
                alert('Terima Kasih ^_^');
                window.location='index.php';
            </script>
        ";


 ?>