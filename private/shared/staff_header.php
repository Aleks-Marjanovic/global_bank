<?php if(!isset($page_title)) { $page_title = 'Staff Area';} ?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link href="<?php echo url_for('/stylesheets/staff.css'); ?>" rel="stylesheet" media="all">
  </head>

  <body>
    <header>
      <h1>GBI Staff Area</h1>
    </header>

    <navigation>
      <ul>
        <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
      </ul>
    </navigation>