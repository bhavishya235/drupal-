<?php 
	$query="
			SELECT x_display,y_display,z_display
			FROM `displayfront_bhav`
			WHERE STATUS =1
			AND start_date <= CAST(CURRENT_TIMESTAMP AS DATE )
			AND end_date >= CAST(CURRENT_TIMESTAMP AS DATE )
		";
	$result=db_query($query);
	echo "<pre>";
	while($record = $result->fetchAssoc()) {
					print_r($record);
    			}
	echo "</pre>";

?>
<div id="page-wrapper"><div id="page">
    <div id="remove_scroll" style="background-color: red;" onresize="OnResizeDocument()" onload="OnResizeDocument()">
        <div style="background-color: white;" id="cont">
                <div class="page-header">
                    <div class="bs-docs-grid">
                        
                        <div class="row-fluid">
                            <div class="span2" id="bhav1" style="background-image: url(AC_Intropage_PIECE1.png);background-size: contain;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                            <div class="span8" id="headchange" style="background-image: url(AC_Intropage_PIECE5.png);background-size: contain;background-repeat: repeat">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span4 cut_tablet" id="tablet1">
                                            <img alt="260x180" class="thumbnails" src="../images/ArtCheckin-logo_with-TM.png">
                                        </li>
                                        <li class="span4" style="text-align: center" id="headbutton">
                                                BUTTON
                                        </li>
                                        <li class="span4 cut_tablet" id="tablet2">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2" id="bhav2" style="background-image: url(AC_Intropage_PIECE1R.png);background-size: contain;background-repeat:repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span2" id="bhav3">
                                WALL
                            </div>
                            <div class="span8" id="photoframes">
                                <div class="row-fluid">
                                    <ul class="thumbnails" style="background: -moz-linear-gradient(top,  #00FFFF,  #000);">
                                        <li class="span4 cut_tablet" id="tablet3">
                                            <img alt="260x180" class="thumbnails" src="AC_Intro_Logo_blank_frame.png">
                                        </li>
                                        <li class="span4" id="midimage">
                                                <img alt="260x180" class="thumbnails" src="AC_Intro_Logo_blank_frame.png">
                                        </li>
                                        <li class="span4 cut_tablet" id="tablet4">
                                            <img alt="260x180" class="thumbnails" src="AC_Intro_Logo_blank_frame.png">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2  cut_bhav" id="bhav4" style="text-align:right">
                                WALL
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span2  cut_bhav" id="bhav5" style="background-image: url(AC_Intropage_PIECE3.png);background-size: contain;background-position: right;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                            <div class="span8" id="footchange">
                                <div class="row-fluid">
                                    <ul class="thumbnails" style="background-image: url(AC_Intropage_PIECE4.png);background-size: contain;background-position: left;background-repeat: repeat">
                                        <li class="span4 cut_tablet" id="tablet5">
                                            
                                        </li>
                                        <li class="span4" id="midsofa">
                                                <img alt="260x180" class="thumbnails" src="AC_intopage_sofa.png">
                                        </li>
                                        <li class="span4 cut_tablet" id="tablet6">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2  cut_bhav" id="bhav6" style="background-image: url(AC_Intropage_PIECE3R.png);background-size: contain;background-position:left;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div></div>
<?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>
