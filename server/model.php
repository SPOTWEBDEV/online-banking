<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">



<?php


        if ($status === 'suspended' && !empty($status_message)) {
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    Toastify({
                        text: \"" . addslashes($user['status_message']) . "\",
                        duration: -1, // stays until user closes it
                        close: true,
                        gravity: 'top', // top
                        position: 'right', // right
                        stopOnFocus: true,
                        style: {
                            background: 'linear-gradient(to right, #ff5f6d, #ffc371)',
                            color: '#fff',
                            fontWeight: 'bold'
                        }
                    }).showToast();
                });
            </script>";
        }
    
   
?>




<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>