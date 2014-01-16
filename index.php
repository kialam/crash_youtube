<!DOCTYPE html>
<html lang="en">
<head>
	<title>Crash - Youtube</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if lt IE 9]>
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
 
</head>
<body>
	<div class="container">
		<div class="column">
			<!-- <img src="http://placehold.it/330x250"> -->
			<iframe width="330" height="186" src="//www.youtube.com/embed/HZuhYJynSk8?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="column videos">
            <div class="ctsModules">
                <!-- <div class="ctsHeader"></div> -->
                <div class="ctsModulesContainer">
                    
                    <?php
                    
                        $videos = array(
                            array(
                                'name' => 'Office Thief',
                                'content_id' => '14400',
                                'link' => 'https://www.youtube.com/watch?v=oMdwJ7fyp00&amp;feature=youtube_gdata_player',
                                'thumbnail' => 'images/office.png'
                            ),
                            array(
                                'name' => 'Breakroom',
                                'content_id' => '14399',
                                'link' => 'https://www.youtube.com/watch?v=MoANeCLWOjI&amp;feature=youtube_gdata_player',
                                'thumbnail' => 'images/ostrich.png'
                            ),
                            array(
                                'name' => 'Finger',
                                'content_id' => '14398',
                                'link' => 'https://www.youtube.com/watch?v=ugo7Y2lRsxc&amp;feature=youtube_gdata_player',
                                'thumbnail' => 'images/finger.png'
                            ),
                            array(
                                'name' => 'Time',
                                'content_id' => '14397',
                                'link' => 'https://www.youtube.com/watch?v=Y-P0Hs0ADJY&amp;feature=youtube_gdata_player',
                                'thumbnail' => 'images/time.png'
                            ),
                            // array(
                            //     'name' => 'Cowboy',
                            //     'content_id' => '14396',
                            //     'link' => 'https://www.youtube.com/watch?v=FHY5pwgCY3w&amp;feature=youtube_gdata_player',
                            //     'thumbnail' => 'images/cowboy.png'
                            // )
                        );
                        
                        shuffle($videos);
                        foreach($videos as $video) {
                            echo apply_template($video);
                        }
                        
                        function apply_template($video) {
                            $cid = $video['content_id'];
                            $link = $video['link'];
                            $t = $video['thumbnail'];
                            $template = <<<TEMPLATE
                                <div class="ctsModule">
                                    <a class="ctsVote" href="#" data-contentid="$cid" data-link="$link">
                                        <img class="ctsThumbnail" src="$t" alt="thumbnail">
                                        <div class="ctsThumbnailOverlay"></div>
                                    </a>                            
                                </div>
TEMPLATE;
                            return $template;
                        }
                        
                        
                    ?>
                    
                    <div class="clear"></div></div>

            </div>
        </div>
    </div>
   	<div class="column">
        <!-- <img src="http://placehold.it/330x250"> -->
        <iframe width="330" height="186" src="//www.youtube.com/embed/R94Q6NhuS3A?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="fb-root"></div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   
	<script src="js/scripts.js"></script>

</body>
</html>