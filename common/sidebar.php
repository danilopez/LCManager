<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li <?php if($active == "universities") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/structure/universities.php">Universities</a></li>
    <li <?php if($active == "regional") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/structure/regional-committees.php">Regional Committees</a></li>
    <li <?php if($active == "local") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/structure/local-committees.php">Local Committees</a></li>
    <li <?php if($active == "centres") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/structure/centres.php">Centres</a></li>
    <li <?php if($active == "members") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/structure/members.php">Members</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li <?php if($active == "companies") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/internships/companies.php">Companies</a></li>
    <li <?php if($active == "internships") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/internships/internships.php">Internships</a></li>
    <li <?php if($active == "incoming") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/internships/incoming.php">Incoming</a></li>
    <li <?php if($active == "outgoing") { ?>class="active"<?php } ?>><a href="<?php echo getBaseUrl() ?>/internships/outgoing.php">Outgoing</a></li>
  </ul>
</div>