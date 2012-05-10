<?php
require "access_token.php";

$param = array('access_token' => $access_token);
$subs = $facebook->api('/'.FB_APP_ID.'/subscriptions', $param); 
?>


<? foreach($subs['data'] as $sub){ ?>
<table>
<tr><td colspan="2"><h2><?= $sub['object']?></h2></td></tr>
<tr><td><strong>Fields</strong></td><td><?= implode(',',$sub['fields'])?></td></tr>
<tr><td><strong>URL</strong></td><td><?= $sub['callback_url']?></td></tr>
<tr><td><strong>Active</strong></td><td><?= $sub['active']?></td></tr>
</table>	
<? } ?>	
