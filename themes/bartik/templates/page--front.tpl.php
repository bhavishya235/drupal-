<?php 
	$query="
			SELECT x_display,y_display,z_display
			FROM `displayfront_bhav`
			WHERE STATUS =1
			AND start_date <= CAST(CURRENT_TIMESTAMP AS DATE )
			AND end_date >= CAST(CURRENT_TIMESTAMP AS DATE )
		";
	$result=db_query($query);
	$imgx[][0]="themes/bartik/images/AC_Intro_Logo_A.png";
	$imgy[][0]="themes/bartik/images/AC_Intro_Logo_R.png";
	$imgz[][0]="themes/bartik/images/AC_Intro_Logo_T.png";
	echo "<pre>";
	while($record = $result->fetchAssoc()) {
					$imgx[]=explode(",",$record['x_display']);
					$imgy[]=explode(",",$record['y_display']);
					$imgz[]=explode(",",$record['z_display']);
					//print_r($record);
    			}
	echo "</pre>";
	function to1d ($input_array) {
		$output_array = array();

		for ($i = 0; $i < count($input_array);$i++) {
			for ($j = 0; $j < count($input_array[$i]);$j++) {
				if($input_array[$i][$j]) $output_array[] = file_create_url($input_array[$i][$j]);
			}
		}		
		return $output_array;
	}
	
	$x=to1d($imgx);
	$y=to1d($imgy);
	$z=to1d($imgz);
	echo "<pre>";
	print_r($x);
	print_r($y);
	print_r($z);
	echo "</pre>";
	//echo getcwd();
?>
<script language="javascript">
        var x=new Array;
	var y=new Array;
	var z=new Array;
	<?php
		for($i=0;$i<count($x); $i++)
                {
			echo "x[$i]='".$x[$i]."';\n";
		}
		for($i=0;$i<count($y); $i++)
                {
			echo "y[$i]='".$y[$i]."';\n";
		}
		for($i=0;$i<count($z); $i++)
                {
			echo "z[$i]='".$z[$i]."';\n";
		}
	?>
        for(i=0;i<x.length;i++)
            console.log(x[i]);
	for(i=0;i<y.length;i++)
            console.log(y[i]);
	for(i=0;i<z.length;i++)
            console.log(z[i]);
</script>

<style>
.greydout {
  -webkit-opacity: 0.25;
  -moz-opacity: 0.25;
  opacity: 0.25;
  -webkit-transition: all 3s ease;
  -moz-transition: all 3s ease;
  -ms-transition: all 3s ease;
  -o-transition: all 3s ease;
  transition: all 3s ease;
}

.greydout:hover {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
}

.visible {
  visibility: visible;
  opacity: 1;
  transition: opacity 2s linear;
}
.hidden {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s 2s, opacity 2s linear;
}
</style>

<div id="remove_scroll" style="background-color: red;" onresize="OnResizeDocument()" onload="OnResizeDocument()">
        <div style="background-color: white;" id="cont">
                <div class="page-header">
                    <div class="bs-docs-grid">
                        
                        <div class="row-fluid">
                            <div class="span2" id="bhav1" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE1.png);background-size: contain;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                            <div class="span8" id="headchange" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE5.png);background-size: contain;background-repeat: repeat">
                                <div class="row-fluid">
                                    <ul class="thumbnails">
                                        <li class="span4 cut_tablet" id="tablet1">
                                            <img alt="260x180" class="thumbnails" src="themes/bartik/images/ArtCheckin-logo_with-TM.png">
                                        </li>
                                        <li class="span4" style="text-align: center" id="headbutton">
                                                BUTTON
                                        </li>
                                        <li class="span4 cut_tablet" id="tablet2">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2" id="bhav2" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE1R.png);background-size: contain;background-repeat:repeat">
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
                                    <ul class="thumbnails img3image" style="background: -moz-linear-gradient(top,  #00FFFF,  #000);">
                                        <li class="span4 cut_tablet" id="tablet3">
                                          <!--  <img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_Intro_Logo_blank_frame.png">-->
					  <div>
						<img alt="260x180" class="thumbnails visible" src="themes/bartik/images/AC_Intro_Logo_A.png" name="slide1">
                                          </div>
					</li>
					<li class="span4" id="midimage">
                                                <!--<img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_Intro_Logo_blank_frame.png" >-->
					    <div>
						<img alt="260x180" class="thumbnails visible" src="themes/bartik/images/AC_Intro_Logo_R.png" name="slide2" >
					    </div>
					</li>
                                        <li class="span4 cut_tablet" id="tablet4" >
                                            <!--<img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_Intro_Logo_blank_frame.png">-->
					    <div>
						<img alt="260x180" class="thumbnails visible" src="themes/bartik/images/AC_Intro_Logo_T.png" name="slide3" >
					    </div>
					</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="span2  cut_bhav" id="bhav4" style="text-align:right">
                                WALL
                            </div>
                        </div>
                        
                        <div class="row-fluid">
                            <div class="span2  cut_bhav" id="bhav5" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE3.png);background-size: contain;background-position: right;background-repeat: repeat">
                                <ul class="thumbnails">
                                        <li class="span12">
                                        </li>
                                </ul>
                            </div>
                            <div class="span8" id="footchange">
                                <div class="row-fluid">
                                    <ul class="thumbnails" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE4.png);background-size: contain;background-position: left;background-repeat: repeat">
                                        <li class="span4 cut_tablet" id="tablet5">
                                            
                                        </li>
                                        <li class="span4" id="midsofa">
                                                <img alt="260x180" class="thumbnails" src="themes/bartik/images/AC_intopage_sofa.png">
                                        </li>
                                        <li class="span4 cut_tablet" id="tablet6">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="span2  cut_bhav" id="bhav6" style="background-image: url(themes/bartik/images/AC_Intropage_PIECE3R.png);background-size: contain;background-position:left;background-repeat: repeat">
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
<script>
var step1=0;
var whichimage1=0;
var step2=0;
var whichimage2=0;
var step3=0;
var whichimage3=0;
function slideit(){
	if (!document.images)
	return;
	//alert(x[step]);
	//document.getElementsByName(slide1).className="thumbnail hidden";

	if(x.length > 1)
	{	
		document.images.slide1.src=x[step1];
		whichimage1=step1;
		if (step1<x.length-1) step1++;
		else step1=1;
	}

	if(y.length > 1)
	{	
		document.images.slide2.src=y[step2];
		whichimage2=step2;
		if (step2<y.length-1) step2++;
		else step2=1;
	}

	if(z.length > 1)
	{	
		document.images.slide3.src=z[step3];
		whichimage3=step3;
		if (step3<z.length-1) step3++;
		else step3=1;
		setTimeout("slideit()",5000);
	}
}
slideit();
</script>
<?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

