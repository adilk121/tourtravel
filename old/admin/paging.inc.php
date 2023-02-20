<?
if($reccnt>$pagesize){
$num_pages=$reccnt/$pagesize;
$PHP_SELF=$_SERVER['PHP_SELF'];
$qry_str=$_SERVER['argv'][0];
$m=$_GET;
unset($m['start']);
$qry_str=qry_str($m);
//echo "$qry_str : $p<br>";
//$j=abs($num_pages/10)-1;
$j=$start/$pagesize-5;
//echo("<br>$j");
if($j<0) {
	$j=0;
}
$k=$j+10;
if($k>$num_pages)	{
	$k=$num_pages;
}
$j=intval($j);
?>


<table width="50%" border="0" cellspacing="2" cellpadding="0" align="center">
  <tr>
    <td  width="11%" align="center"><a href="<?=$PHP_SELF?><?=$qry_str?>&start=0">First</a></td>
    <td  width="14%" height="20" align="center" nowrap><a href="<?=$PHP_SELF?><?=$qry_str?>&start=<?=$start-$pagesize?>" >
      <?
		if($start!=0)
		{

?>
&laquo;&nbsp;Previous&nbsp;<?=$pagesize?>
      </a><?
		}
?>
    </td>
    <td class="subcat" width="52%" align="center" height="20"><?
			
			for($i=$j;$i<$k;$i++)
			{
				if($i==$j)echo "Page:";
			   if(($pagesize*($i))!=$start)
				  {
	  ?>
      <a href="<?=$PHP_SELF?><?=$qry_str?>&start=<?=$pagesize*($i)?>" style="text-decoration:none;" class="subcat">
      <?=$i+1?>
      </a>
      <?
				  }
	  else{
	  ?>
      <b>
      <?=$i+1?>
      </b>
      <?
	  }
 }?>
    </td>
    <td  width="13%" height="20" align="center" nowrap><?
	if($start+$pagesize < $reccnt){
		?>&nbsp;<a href="<?=$PHP_SELF?><?=$qry_str?>&start=<?=$start+$pagesize?>">Next&nbsp;
      <?//echo("$reccnt,$start,$pagesize");
		if($start+($pagesize*2)>$reccnt){echo($reccnt-($start+$pagesize));}else{echo($pagesize);}?>
&nbsp;&raquo;</a><?
		}
  ?>
    </td>
    <td  width="10%" align="center"><?$mod=$reccnt%$pagesize; if($mod==0){$mod=$pagesize;}?>
    <a href="<?=$PHP_SELF?><?=$qry_str?>&start=<?=$reccnt-$mod?>">Last</a></td>
  </tr>
</table>
<?
}

?>
