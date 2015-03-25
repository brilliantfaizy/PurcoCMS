<ul>

<li><a <?php echo $innerMenuActive=="searchallclaim" ? "class=\"innerMenuActive\"" : ""; ?>  href="<?php echo $base; ?>/index.php/ClaimController/searchallclaim">All</a></li>
<li><a <?php echo $innerMenuActive=="promissory" ? "class=\"innerMenuActive\"" : ""; ?>  href="<?php echo $base; ?>/index.php/ClaimController/promissory">Promissory</a></li>
<li><a href="<?php echo $base; ?>/index.php/ClaimController/newclaim">Last Worked</a></li>
<li><a href="<?php echo $base; ?>/index.php/ClaimController/newclaim">Today</a></li>
<li><a href="<?php echo $base; ?>/index.php/ClaimController/newclaim">Hot</a></li>
<li><a <?php echo $innerMenuActive=="advsearch" ? "class=\"innerMenuActive\"" : ""; ?>  href="<?php echo $base; ?>/index.php/ClaimController/advsearch">Advance Search</a></li>
<li><a <?php echo $innerMenuActive=="myclaimfolder" ? "class=\"innerMenuActive\"" : ""; ?>  href="<?php echo $base; ?>/index.php/ClaimController/myclaimfolder">My Folder</a></li>
</ul>