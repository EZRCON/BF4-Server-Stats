<?php
// BF4 Stats Page by Ty_ger07
// https://forum.myrcon.com/showthread.php?6854

// show loading...
echo '
<div id="loading">
<br/><br/>
<center><img class="load" src="./common/images/loading.gif" alt="loading" /></center>
<br/><br/>
</div>
';
// then ajax load content
echo '
<div id="loaded" style="display: none;">
<script type="text/javascript">
$(\'#loaded\').load("./common/leaders/leaders.php?gid=' . $GameID;
if(!empty($ServerID))
{
	echo '&sid=' . $ServerID;
}
if(!empty($page))
{
	echo '&p=' . $page;
}
if(!empty($player))
{
	echo '&player=' . $player;
}
if(!empty($currentpage))
{
	echo '&cp=' . $currentpage;
}
if(!empty($rank))
{
	echo '&r=' . $rank;
}
if(!empty($order))
{
	echo '&o=' . $order;
}
echo '");
</script>
</div>
';
?>