<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

include( 'includes/header.php' );

?>

<ul id="dashboard">
  <li>
    <a href="projects.php">
      Manage Projects
      <img src="icons/projects.svg" alt="Logout icon" height=35/>
    </a>
  </li>
  <li>
    <a href="skills.php">
      Manage Skills
      <img src="icons/skills.svg" alt="Logout icon" height=35/>
    </a>
  </li>
  <li>
    <a href="contact_requests.php">
      Contact Requests
      <img src="icons/contact.svg" alt="Logout icon" height=35/>
    </a>
  </li>
  <li>
    <a href="users.php">
      Manage Users
      <img src="icons/users.svg" alt="Logout icon" height=35/>
    </a>
  </li>
  <li>
    <a href="logout.php">
      Logout
      <img src="icons/logout.svg" alt="Logout icon" height=35/>
    </a>
  </li>
</ul>

<?php

include( 'includes/footer.php' );

?>
