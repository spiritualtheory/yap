<?php
    include 'functions.php';
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>   
<Response>
    <Enqueue><?php echo $_REQUEST['queue'] ?></Enqueue>
</Response>
