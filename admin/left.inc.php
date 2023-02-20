<?php if($_SESSION['sess_admin_login_id']!='') {?>
<div id="leftnav">
  <ul>
    <div style=" text-align:center; background-color:#DDEEFF; width:166px; border:1px solid #7DBEFF; padding-bottom:7px; padding-top:7px; color:#000; font-size:14px; font-weight:bold; font-family:'Times New Roman', Times, serif"><a href="order_list.php" style="color:#003366; font-size:13px;">Order List</a></div>
    <div style=" text-align:center; background-color:#0053A6; width:166px; margin-top:7px; border:1px solid #379BFF; padding-bottom:7px; padding-top:7px; font-size:14px; font-weight:bold; font-family:'Times New Roman', Times, serif"><a href="change_pwd.php" style="color:#D7EBFF; font-size:13px;">Change Admin Password</a></div>
<div style=" text-align:center; background-color:#B70000; width:166px; margin-top:7px; border:1px solid #FF2222; padding-bottom:7px; padding-top:7px; font-size:14px; font-weight:bold; font-family:'Times New Roman', Times, serif"><a href="logout.php" style="color:#fff; font-size:13px;">Logout</a></div>    
</ul>
</div>
<? } ?>
