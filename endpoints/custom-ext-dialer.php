<?php
require_once '_includes/functions.php';
header("content-type: text/xml");
$exploded_result = explode("|", setting('custom_extensions')[str_replace("#", "", $_GET['Digits'])]);
$phone_number = isset($exploded_result[0]) ? $exploded_result[0] : "";
$extension = isset($exploded_result[1]) ? $exploded_result[1] : "w";
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";?>
<Response>
    <Dial callerId="<?php echo $_GET['Called'] ?>">
        <Number sendDigits="<?php echo $extension?>"><?php echo $phone_number ?></Number>
    </Dial>
</Response>
