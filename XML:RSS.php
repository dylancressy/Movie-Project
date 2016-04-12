<html>
<head>
    <title>XML demo 3: RSS News Viewer</title>
	<link rel="stylesheet" type="text/css" href="css/baseA.css" />	      
</head>
<body>
  <?php
  $feeds = array(
				  "Movie Reviews" => 'http://www.cinemablend.com/rss_review.php',
				  "Movie News" => 'http://www.cinemablend.com/rss.php',
				  "TV Recommendation" => 'http://www.cinemablend.com/rss_television.xml'
				     
				);
 
  print_r($_GET);
  ?>
 
  
  
  <h1>RSS Feeds</h1>
  <?php
  
  create_form($feeds, "feed");
  $options = array(
      'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
                  "User-Agent: CSCI2254/v10.0 (http://cscilab.bc.edu/; contact.liafx@bc.edu)"
) );
  
  if ( isset( $_GET['getfeed'] ) ) {
  	handle_form( $_GET['feed'] );	
  }
  
  ?>
 
  
  </body>
</html>
<?php
function handle_form( $myfeed ) {

	  $rss = simplexml_load_file( $myfeed );
 	  
      $title =  $rss->channel->title;
      echo "<h1>$title</h1>";

      # I would like to do this:
      #     foreach ($rss->channel->item as $item) {
      # or this:
      #     foreach ($rss->item as $item) {
      # but which one depends on the rss version in use.

      $items = $rss->channel->item; # try, works some versions
      if (!$items)
        $items = $rss->item; # works other versions

      foreach ( $items as $item ) {
      	echo "<div class='news'>
      			<h2>$item->title<h2>\n";
        echo '<a href="' . $item->link . '">' . $item->title . '</a><br>';
        echo $item->description . "<br><br>\n";
        echo "</div>";
      }
}

function create_form( $farray, $menuname ){
?>
<form method="get">
	<?php create_menu( $farray, $menuname ); ?>
	<input type="submit" name="getfeed" value="Get Feed!!">
</form>
<?php
}
function create_menu($farray, $menuname){
	$current_feed = isset( $_GET['feed'] ) ?  $_GET['feed'] : "";
	echo "<select name='$menuname'>";
	foreach ( $farray as $key => $value ) {
		if ( $current_feed == $value )  {
			echo "<option value='$value' selected>$key</option>";
		} else {
			echo "<option value='$value'>$key</option>";
		}
	}
	echo '</select>';
}
