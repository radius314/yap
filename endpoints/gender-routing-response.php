<?php
require_once 'functions.php';
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

$gender = getIvrResponse("gender-routing.php", null, [1, 2]);
?>
<Response>
    <Redirect>helpline-search.php?Gender=<?php echo $gender?>&amp;SearchType=<?php echo $_REQUEST['SearchType'] ?></Redirect>
</Response>
