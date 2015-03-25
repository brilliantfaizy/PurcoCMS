<ul>

<li <?php echo $innerTabsActive=="newclaim" ? "class=\"innerTabsActive\"" : ""; ?>><a href="<?php echo $base; ?>/index.php/ClaimController/newclaim"><img src="<?php echo "$base/images/newclaimIcon.png"; ?>" /><br />New<br />Claim</a></li>
<li <?php echo $innerTabsActive=="overview" ? "class=\"innerTabsActive\"" : ""; ?>><a href="<?php echo $base; ?>/index.php/ClaimController/overview"><img src="<?php echo "$base/images/claimstatusIcon.png"; ?>" /><br />Claim<br />Status</a></li>
<li><a href="#"><img src="<?php echo "$base/images/claimupdateIcon.png"; ?>" /><br />Claim<br />Update</a></li>
<li><a href="#"><img src="<?php echo "$base/images/claimduplicatecheck.png"; ?>" /><br />Claim Duplicate Check</a></li>

</ul>