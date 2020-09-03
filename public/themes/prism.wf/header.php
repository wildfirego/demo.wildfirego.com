<!doctype html>
<html lang="<?php echo $types['webapp']['lang']; ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?php echo $meta_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">
	<meta property="og:title" content="<?php echo $meta_title; ?>">
	<meta property="og:description" content="<?php echo $meta_description; ?>">
	<meta property="og:image" content="<?php echo $meta_image_url; ?>">

	<link href="/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/plugins/fontawesome/css/all.min.css" rel="stylesheet">
	<link href="https://unpkg.com/flickity@2/dist/flickity.min.css" rel="stylesheet">
	<script src="/plugins/datatables/datatables.min.js"></script>
	<link href="<?php echo THEME_URL; ?>/css/custom.css?v=<?php echo time(); ?>" rel="stylesheet">
	<script type="text/javascript">var THEME_URL = "<?php echo THEME_URL; ?>";</script>
</head>

<body>