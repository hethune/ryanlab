<?php
require('config.php');
$IMAGEROOT = substr($DOCUMENTROOT,0,strlen($DOCUMENTROOT)-1);
function outputMembers($group){
	global $IMAGEROOT;
	foreach($group as $person){
		// Set parameters
		$fullName = $person[0] . ' ' . $person[1] . ' ' . $person[2];
		$graduation = $person[5] . '/' . $person[6];
		$email = $person[3];
		if($email == null){
			$email = '#" style="visibility: hidden;';
		}
		$photo = $person[4];
		if($photo == null){
			$photo = "/images/members/defaultMember.gif";
		}
		?>
<div class="student">
			<div class="thumb"><img class="portrait" src=" <?php echo $IMAGEROOT.$photo;  ?>" alt="<?php echo $fullName; ?>" /></div>
			<div class="name"><?php echo $fullName; ?></div>
			<a class="email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		</div>
		<?php
	}
}

function outputMembersPast($group){
  ?>
  <table id="alumni" border="0" cellpadding="0" cellspacing="0">
  <tr><th class="name">Alumnus</th><th class="graduation">Graduation</th><th class="activity">Current Activity</th></tr>
  <?php
  $zebra = ' class="zebra"';
  foreach($group as $person){
    // Set parameters
 		$fullName = $person[0] . ' ' . $person[1] . ' ' . $person[2];
		$graduation = $person[3] . '/' . $person[4];
    $currentActivity = $person[5];
    if($zebra == ''){
      $zebra = ' class="zebra"';
    } else {
      $zebra = '';
    }
    ?>
    <tr<?php echo $zebra; ?>><td class="bold"><?php echo $fullName; ?></td><td class="textC"><?php echo $graduation; ?></td><td><?php echo $currentActivity; ?></td></tr>
    <?php
  }
  ?>
  </table>
  <?php
}

function outputFaculty($group){
	global $IMAGEROOT;
	foreach($group as $person){
		// Set parameters
		$fullName = $person[0] . ' ' . $person[1] . ' ' . $person[2];
		$email = $person[3];
		$photo = $person[4];
		$address = $person[5];
		$contact = $person[6];
		$degree = $person[7];
		if($degree == 'Head'){
			$position = '<i>Professor, Department of Mechanical Engineering</i><br />
				<i>Co-Director, Berkeley Sensor and Actuator Center</i>';
		}
		else{
			$position = null;
		}
		?>
<div class="faculty">
        	<img class="portrait" src="<?php echo $IMAGEROOT.$photo; ?>" alt="<?php echo $fullName; ?>" />
        	<p class="bio">
        		<b><?php echo $fullName; ?></b><br />
				<?php echo $position; ?>
        	</p>
        	
        	<p class="contact">
				<?php echo nl2br($address); ?>
        	</p>
        	
        	<p class="contact">
				<?php echo nl2br($contact); ?>
				<br />
				<b>E-mail:</b> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        	</p>
        </div>
		<?php
	}
}

function outputNews($news){
	echo '<ul id="articles">' . "\n";
	$count = 0;
	foreach($news as $item){
		/* Accent for future use. Maybe add link with image of project?
		// Output accent in middle
		$count++;
		if($count == (count($news)/2)+1){
			echo '<li><img src="images/accentCircuit.gif" alt="" /></li>';
		}
		*/
		
		$title = $item[0];
		$link = $item[1];
		$day = $item[3];
		$year = $item[4];
		switch($item[2]){
			case '1':	$month = 'Jan'; break;
			case '2':	$month = 'Feb'; break;
			case '3':	$month = 'Mar'; break;
			case '4':	$month = 'Apr'; break;
			case '5':	$month = 'May'; break;
			case '6':	$month = 'Jun'; break;
			case '7':	$month = 'Jul'; break;
			case '8':	$month = 'Aug'; break;
			case '9':	$month = 'Sep'; break;
			case '10':	$month = 'Oct'; break;
			case '11':	$month = 'Nov'; break;
			case '12':	$month = 'Dec'; break;
		}
		$date = $month . ' ' . $day . ', ' . $year;		
		
		if($link != ''){
			?>
			<li><span class="date"><?php echo $date; ?></span> - <a class="article" href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
			<?php
		}
		else {
			?>
			<li><span class="date"><?php echo $date; ?></span> - <?php echo $title; ?></li>
			<?php

		}
	}
	echo '</ul>';
}

function outputCourses($courses){
	echo '<ul id="courses">' . "\n";
	foreach($courses as $course){
		$title = $course[0];
		$link = $course[1];
		$semester = $course[2];
		$year = $course[3];
		if($link != ''){
			?>
			<li><a href="<?php echo $link; ?>"><?php echo $title; ?> - <?php echo $semester; ?> <?php echo $year; ?></a></li>
			<?php
		}
		else {
			?>
			<li class="bold"><?php echo $title; ?> - <?php echo $semester; ?> <?php echo $year; ?></li>
			<?php
		}
	}
	echo '</ul>' . "\n";
}

function outputHonors($honors){
	echo '<ul id="honors">' . "\n";
	foreach($honors as $honor){
		$title = $honor[0];
		$link = $honor[1];
		$year = $honor[2];
		?>
		<li><span class="date"><?php echo $year; ?></span> - 
		<?php
		if($link != ''){
			?>
			<a href="<?php echo $link; ?>"><?php echo $title; ?></a></li>
			<?php
		}
		else {
			echo $title . '</li>' . "\n";
		}
	}
	echo '</ul>' . "\n";
}

function outputBiography($bio){
	$paragraphs = explode("\r", $bio);
	foreach($paragraphs as $paragraph){
		if(trim($paragraph) != null){
			echo '<p>' . $paragraph . '</p>' . "\r";
		}
	}
}

function getLead($id){
	global $sql;	// Reference global sql bridge
	
	$lead = $sql->getRows('SELECT FirstName, LastName FROM members WHERE id=' . $id . ' LIMIT 1');
	return implode(' ', $lead[0]);
}

function outputProjects($projects){
	global $IMAGEROOT;
	foreach($projects as $project){
		$title = $project[0];
		$lead = $project[1];
		$picture = $project[2];
		$description = $project[3];
		$id = $project[4];
		?>
		<div class="project">
			<div class="thumbnail"><img src="<?php echo $IMAGEROOT.$picture; ?>" alt="<?php echo $title; ?>" /></div>
			<div class="info">
				<h3><a name="<?php echo $id; ?>"><?php echo $title; ?></a></h3>
				<p class="description"><?php echo $description; ?></p>
				<p class="lead">Lead Researcher: <span class="bold"><?php echo getLead($lead); ?></span></p>
			</div>
		</div>
		
		<div class="top"><a href="#">Back to Top</a></div>
		<?php
	}
}

function outputPublications($publications){
	// var_dump($publications);
	echo "<ol>";
	foreach($publications as $pub){
		$biblio = $pub[0];
		$link = $pub[1];
		$image=$pub[3];
		?>
		<div class="pubcontent">
			<li>
				<?php
					echo $biblio; 
					echo "&nbsp;"; 
					if ($link) {
						echo "<a href=";
						echo $link;
						echo ">link</a>";
					}
					if ($image) {
						echo "<div style=\"text-align:center\"><img src=\"";
						echo $image;
						echo "\" alt=\"Pictures\" height=\"450\" width=\"660\" ";
						echo "</div>";
					}
				?>
			</li>
		</div>
		<?php
	}
	echo "</ol>";
}

function outputGroupPictures($pictures){
	echo "<ul>";
	foreach($pictures as $pic){
		$description = $pic[0];
		$image=$pic[1];
		?>
		<div>
			<li>
				<?php
					if ($image) {
						echo "<div style=\"text-align:center\"><img src=\"";
						echo $image;
						echo "\" alt=\"Pictures\"";
						echo "</div>";
					}
					echo "&nbsp;"; 
					echo $description; 
				?>
			</li>
		</div>
		<?php
	}
	echo "</ul>";
}

function outputResearches($research){
	global $IMAGEROOT;
	global $DOCUMENTROOT;

	$research = $research[0];
	
	$title = $research[0];
	$text = $research[1];
	$images = $research[2];
	$videos = $research[3];
	$pubs = $research[4];
	// var_dump(empty($images));

	$image = null;
	$video = null;
	$pub = null;
	if (!empty($images)) {$image = explode(";",$images);}
	if (!empty($videos)) {$video = explode(";",$videos);}
	if (!empty($pubs)) {$pub = explode(";",$pubs);}

	?>

	<div class="sec-header">
          <a name="<?php echo $title; ?> "></a>
          <a href="#"><h3><?php echo $title; ?> </h3></a>
    </div>

	<div style="overflow:hidden">
	    <p><?php echo trim($text); ?>
	    </p>
	</div>

	<div style="overflow:hidden">
		<?php
			if ($image) {
				foreach($image as $img){
					$full_image = $IMAGEROOT.$img;
				    echo "<div style=\"text-align:center; padding-top:10px;\">";
				    echo "<img src=\"$full_image\" alt=\"pic1\">";
				    echo "</div>";
				}
			}
		?>
	</div>

	<div style="overflow:hidden">
		<?php
			if ($video) {
				foreach ($video as $vi) {
		            echo "<div style=\"text-align:center; padding-top:10px;\">";
		            echo "<iframe width=\"450\" height=\"261\" src=\"$vi\" frameborder=\"2\" style=\"margin:0 auto;\" allowfullscreen></iframe>";
		            echo "</div>";
		        }
	        }
        ?>
    </div>

	<div class="publication">
		<?php
			if ($pub) {
				$old = "ORAL";
				$new = "<a href=\"".$DOCUMENTROOT."research/oral/\">"."ORAL</a>";
				$tmpOldStrLength = strlen($old);

			    echo "<p style=\"margin-top:3px\"><i><u>Selected Publications</u></i></p>";
			    echo "<ol class=\"pub\">";
			    	foreach ($pub as $publication) {
			    		$offset = strpos($publication, $old, $offset);
						if ($offset) {
  							$publication = substr_replace($publication, $new, $offset, $tmpOldStrLength);
						}
				    	echo "<li>";
				    	echo $publication;
				    	echo "</li>";
					}
				echo "</ol>";
			}
		?>
	</div>
	<?php
}



function outputPresentations($presentations){
	// var_dump($publications);
	
	foreach($presentations as $presentation){
		$biblio = $presentation[0];
		$link = $presentation[1];
		$abbr = $presentation[3];
		$year = $presentation[5];
		$title = $presentation[6];
		?>
		<div class="presentation">
			<h3><a name="<?php echo $id; ?>"><?php echo trim($abbr);?>&nbsp;<?php echo $year; ?> - <i>"<?php echo trim($title); ?>"</i></a></h3>
			<div class="paragraph">
				<p>
					<?php echo trim($biblio); ?>
					
					<br/><br/>
					<div align="center"> <iframe width="420" height="280"
						src="<?php echo $link; ?>" frameborder="0" allowfullscreen>
					</iframe></div>
				</p>
			</div>
		</div>
		<?php
	}
}

function outputPresentationsII($presentations){
	foreach($presentations as $presentation){
		$title = $presentation[0];
		$link = $presentation[1];
		$year = $presentation[2];
		$abbr = $presentation[3];
		$conf = $presentation[4];
		$hidden = $presentation[5];
		$notes = $presentation[6];
		$authors = $presentation[7];
		$type = $presentation[8];
		$place = $presentation[9];
		$dates = $presentation[10];
		?>
		<div class="presentation">
			<h3><a name="<?php echo $id; ?>"><?php echo trim($abbr);?>&nbsp;<?php echo $year; ?> - <i>"<?php echo trim($title); ?>"</i></a></h3>
			<div class="paragraph">
				<p>
					<?php 
						if ($authors) {
							echo trim($authors); echo ",&nbsp;";
						}
						if ($title) {
							echo "<i>";
							echo trim($title);
							echo "</i>,&nbsp;";
						}
						if ($type) {
							echo trim($type);
							echo "&nbsp;of&nbsp;";
						}
						if ($conf) {
							echo trim($conf); 
							echo ",&nbsp;";
						}
					?>
					<?php 
						if ($place) {
							echo trim($place); echo ",&nbsp;";
						}
						if ($dates) {
							echo trim($dates); echo ",&nbsp;";
						}
						if ($year) {
							echo trim($year); echo ".&nbsp;";
						}
						if ($notes) {
							echo "(";
							echo trim($notes);
							echo ")";
						}
					?>
					<br/><br/>
					<div align="center"> <iframe width="420" height="280"
						src="<?php echo $link; ?>" frameborder="0" allowfullscreen>
					</iframe></div>
				</p>
			</div>
		</div>
		
		<div class="top"><a href="#">Back to Top</a></div>
		<?php
	}
}

function outputAccordionProjects($projects, $field){
	foreach($projects as $project){
		$id = $project[0];
		$title = $project[1];
		$abstract = $project[2];
		$picture = $project[3];
		switch($field){
        case '1': $category = 'mems'; break;
        case '2': $category = 'nems'; break;
        case '3': $category = 'nanomaterials'; break;
        case '4': $category = 'biomems'; break;
        case '5': $category = 'energy'; break;
		}
		/* <h4><a href="research.php?field=<?php echo $field; ?>#<?php echo $id; ?>"><?php echo $title; ?></a></h4> */
		?>
<div class="project">
			<div class="thumb"><img src="<?php echo $picture; ?>" alt=""></div>
			<div class="details">
				<h4><a href="../research/<?php echo $category; ?>/#<?php echo $id; ?>"><?php echo $title; ?></a></h4>
				<p><?php echo $abstract; ?></p>
			</div>
		</div>
		<?php
	}
}
?>