<?php

include( 'admin/includes/database.php' );
include( 'admin/includes/config.php' );
include( 'admin/includes/functions.php' );

// pass user id in query param
// example index.php?user=1
$user_id = $_REQUEST['user'];
?>

<!doctype html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  
  <title>Website Admin</title>
  
  <link href="styles.css" type="text/css" rel="stylesheet">
  
  <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
  
</head>
<body>

  <h1>Welcome to My Website!</h1>
  <p>This is the website frontend!</p>

  <?php

  $query = 'SELECT *
    FROM projects
    WHERE user_id='.$user_id.'
    ORDER BY date DESC';
  $result = mysqli_query( $connect, $query );

  // get skills

  $skillsQuery = 'SELECT * FROM `skills` WHERE user_id='.$user_id.' ORDER BY confidence DESC;' ;
  $skillsResult = mysqli_query( $connect, $skillsQuery );

  ?>

  <p>There are <?php echo mysqli_num_rows($result); ?> projects in the database!</p>

  <hr>

  <?php while($record = mysqli_fetch_assoc($result)): ?>

    <div>

      <h2><?php echo $record['title']; ?></h2>
      <?php echo $record['content']; ?>

      <?php if($record['photo']): ?>

        <p>The image can be inserted using a base64 image:</p>

        <img src="<?php echo $record['photo']; ?>">

        <p>Or by streaming the image through the image.php file:</p>

        <img src="admin/image.php?type=project&id=<?php echo $record['id']; ?>&width=100&height=100">

      <?php else: ?>

        <p>This record does not have an image!</p>

      <?php endif; ?>

    </div>

    <hr>

  <?php endwhile; ?>

  <hr>

  <h2>Skills</h2>

  <table>
    <?php while($skillRecord = mysqli_fetch_assoc($skillsResult)): ?>
      <tr>
        <td><img src="admin/image.php?type=skill&id=<?php echo $skillRecord['id']; ?>&width=50&height=50"></td>
        <td><?php echo $skillRecord['name']; ?> </td>
        <td><?php echo $skillRecord['confidence'] . '%'; ?> </td>
      </tr>  
    <?php endwhile; ?>
  </table>

  <?php
  include('./contact.php');
  ?>
</body>
</html>
