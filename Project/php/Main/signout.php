<?php
    session_start();
    session_destroy();
    echo    "<script>
            window.location.href='../../homepage.html';
            alert('You have successfully logged out !!!');
            </script>";
?>