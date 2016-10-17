<?
    include "classes/files.php";
?>
<!DOCTYPE html>
<head>
  <link href="node_modules/video.js/dist/video-js.min.css" rel="stylesheet"/>
  <script src="node_modules/video.js/dist/video.min.js"></script>
</head>

<body>
<?
    $links = getAllFiles();
    foreach ( $links as $link ) {
?>
  <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" data-setup="{}">
    <source src="<?=$link?>" type='video/mp4'>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>
  <div class="clear: both;"></div>
<?
    }
?>
</body>
