<?php
// Redirect all requests to the public directory (without exposing index.php in the URL)
header('Location: public/');
exit;
