<ul>

            <li <?php echo $innerTabsActive=="clientjournal" ? "class=\"innerTabsActive\"" : ""; ?>><a href="<?php echo $base."/index.php/ClientController/clientjournal " ?>"><img src="<?php echo "$base/images/clientTypeIcon.png"; ?>" /><br />Client Journal</a></li>
            <li <?php echo $innerTabsActive=="clienttype" ? "class=\"innerTabsActive\"" : ""; ?>><a href="<?php echo $base."/index.php/ClientController/clienttype " ?>"><img src="<?php echo "$base/images/clientTypeIcon.png"; ?>" /><br />Client Type</a></li>
            <li ><a href="#"><img src="<?php echo "$base/images/apiClientIcon.png"; ?>" /><br />API Client</a></li>

</ul>