<ul>
<li><a <?php echo $innerMenuActive=="client" ? "class=\"innerMenuActive\"" : ""; ?> href="<?php echo $base; ?>/index.php/ClientController/client">New</a></li>
<li><a <?php echo $innerMenuActive=="clientall" ? "class=\"innerMenuActive\"" : ""; ?> href="<?php echo $base; ?>/index.php/ClientController/clientall">All</a></li>
<li><a <?php echo $innerMenuActive=="clientsearch" ? "class=\"innerMenuActive\"" : ""; ?> href="<?php echo $base; ?>/index.php/ClientController/clientsearch">Client Search</a></li>
<li><a <?php echo $innerMenuActive=="clientactive" ? "class=\"innerMenuActive\"" : ""; ?> href="<?php echo $base; ?>/index.php/ClientController/clientactive">Active</a></li>
<li><a <?php echo $innerMenuActive=="clientinactive" ? "class=\"innerMenuActive\"" : ""; ?> href="<?php echo $base; ?>/index.php/ClientController/clientinactive">Inactive</a></li>
<li><a <?php echo $innerMenuActive=="clientlead" ? "class=\"innerMenuActive\"" : ""; ?> href="<?php echo $base; ?>/index.php/ClientController/clientlead">Lead</a></li>

<li><a <?php echo $innerMenuActive=="clientinfile" ? "class=\"innerMenuActive\"" : ""; ?> href="<?php echo $base; ?>/index.php/ClientController/clientinfile">My File</a></li>
</ul>