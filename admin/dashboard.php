<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

?>

<ul id="dashboard">
  <li>
    <a href="projects.php" style="justify-content:center;">
      <span style="align-self:center;">Manage Projects</span>
      <img style="align-self:center;" src="icons/projects.svg" alt="Projects icon" height=35/>
    </a>
  </li>
  <li>
    <a href="skills.php" style="justify-content:center;">
      <span style="align-self:center;">Manage Skills</span>
      <img style="align-self:center;" src="icons/skills.svg" alt="Skills icon" height=35/>
    </a>
  </li>
  <li>
    <a href="contact_requests.php" style="justify-content:center;">
      <span style="align-self:center;">Contact Requests</span>
      <img style="align-self:center;" src="icons/contact.svg" alt="Contact icon" height=35/>
    </a>
  </li>
  <li>
    <a href="users.php" style="justify-content:center;">
      <span style="align-self:center;">Manage Users</span>
      <img style="align-self:center;" src="icons/users.svg" alt="Users icon" height=35/>
    </a>
  </li>
  <li>
    <a href="logout.php" style="justify-content:center;">
      <span style="align-self:center;">Logout</span>
      <img style="align-self:center;" src="icons/logout.svg" alt="Logout icon" height=35/>
    </a>
  </li>
</ul>

<?php

include( 'includes/footer.php' );

?>
