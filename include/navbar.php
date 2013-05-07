<div class="masthead">
        <h3 class="muted">KnabeProperties.com</h3>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav">
            <li <?php if(basename($_SERVER[PHP_SELF])=="index.php"){?>class="active"<?php } ?>><a href="index.php">Home</a></li>
            <li <?php if(basename($_SERVER[PHP_SELF])=="renovated.php"){?>class="active"<?php } ?>><a href="renovated.php">Recently Renovated</a></li>
            <?php if(isset($_SESSION["login"])) { ?><li <?php if(basename($_SERVER[PHP_SELF])=="protected.php"){?>class="active"<?php } ?>><a href="protected.php">Protected</a></li><?php } ?>
            <li <?php if(basename($_SERVER[PHP_SELF])=="contact.php"){?>class="active"<?php } ?>><a href="contact.php">Contact</a></li>
            <li <?php if(basename($_SERVER[PHP_SELF])=="chat.php"){?>class="active"<?php } ?>><a href="chat.php">Chat</a></li>
          </ul>
        </div>
      </div>
    </div><!-- /.navbar -->
</div>