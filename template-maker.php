<style type="text/css">
<!--
    textarea {
    	width:100%;
    	padding:10px;
    	font-family: monospace;
		font-size: 12px;
		color: #666;
    }
    
    input[type="submit"] {
		background-color: #59adf6;
		padding: 8px 16px;
		display: inline-block;
		color: white;
		text-decoration: none;
		border-radius: 2px;
		text-align: center;
		font-size:14px;
	}
	h1 {
		margin-bottom:0;
	}
	h4 {
		color:#999;
		font-weight:normal;
		margin-bottom:2em;
	}
	a.buy {
		margin-bottom:3em;
	}
	h3 {
		margin-top:2em;
	}
	-->
</style>

<?php
	
	/*
		Elements that have a URL value
		http://stackoverflow.com/questions/2725156/complete-list-of-html-tag-attributes-which-have-a-url-value
		
		http://stackoverflow.com/questions/3879108/php-domdocument-alter-conditional-comments
		http://simplehtmldom.sourceforge.net/manual.htm
		
		//issues
		inline styles?
		urls in styles - head styles
		
		//display the block code in a new text area
	*/
	
	function prefixPaths($what,$html){
		foreach($html->find($what) as $element) {
			if ($what == "link"){
				//echo("link-".$what);
				$target = "href";
			} else if ($what == "img" || $what == "script"){
				//echo("script-".$what);
				$target = "src";
			}
			
			$thisTarget = $element->$target;
			
			//echo($thisTarget."<br>");
			
			if ($thisTarget){
				//ignore links that start with these prefixes
				if (substr($thisTarget, 0, 7) != 'http://' && substr($thisTarget, 0, 8) != 'https://' && substr($thisTarget, 0, 7) != 'mailto:' && substr($thisTarget, 0, 4) != 'tel:' && substr($thisTarget, 0, 5) != 'file:' && substr($thisTarget, 0, 4) != 'ftp:' && substr($thisTarget, 0, 11) != 'javascript:' ) {
					$thisTarget = '<?php echo $path; ?>/template/' . $thisTarget;
				}
				$element->$target = $thisTarget;
			}
		}
	}
	
	$code = <<<EOT
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Hi! I'm Tarquin Farquhar and I like building web sites.</title>
<meta name="viewport" content="width = device-width, minimum-scale = 0.25, maximum-scale = 1.60">
<meta name="GENERATOR" content="Freeway Pro 7.0.1">
<link rel=stylesheet href="css/master1a.css">
<link rel=stylesheet href="css/index.css">
<link rel=stylesheet href="css/sheet1.css">
<!--[if lt IE 7]>
<link rel=stylesheet href="css/ie6.css">
<style type="text/css">
#PageDiv { height:100% }
#text-panel { height:694px }
#photo.f-ms { height:73px }
#text.f-ms { height:58px }
.pageframe { display: none; }
</style>
<![endif]-->
<!--[if lt IE 9]>
<script src="Resources/html5shiv.js"></script>
<![endif]-->
<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>
<style type="text/css"><!--
.pageframe {
    position: fixed;
    background: #ffffff;
    z-index: 999;
    border: none;
}
.pfl, .pfr {
	top: 0; bottom: 0;
	width: 20px;
	height: 100%;
}
.pfl { left: 0; }
.pfr { right: 0; }
.pft, .pfb {
	left: 0; right: 0;
	height: 20px;
	min-width: 100%;
}
.pft { top: 0; }
.pfb { bottom: 0; }
--></style>
</head>
<body>
<div class="pageframe pfl"></div>
<div class="pageframe pfr"></div>
<div class="pageframe pft"></div>
<div class="pageframe pfb"></div>
<div id="PageDiv">
	<div id="page" class="f-ms">
		<div id="text-panel" class="f-x2 pulse-pagecontent">
			<div id="photo" class="f-ms f-x2 f-x3"></div>
			<h1 class="style2 f-fp"><span class="firstName">Tarquin </span>Farquhar</h1>
			<h2 class="style2">Web Designer &amp; Developer</h2>
			<p>&nbsp;</p>
			<h3 class="style2">About me</h3>
			<p class="body"><span class="Intro">Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, egestas consequat.</span></p>
			<p class="body">Aenean facilisis nulla vitae urna tincidunt congue sed ut dui. Morbi malesuada nulla nec purus convallis <a href="#">consequat</a>. Vivamus id mollis quam. In condimentum orci id nisl volutpat bibendum. Quisque commodo <a href="#">hendrerit</a> lorem quis egestas.</p>
			<h3 class="style2">Work History</h3>
			<p class="body">Maecenas quis tortor arcu. Vivamus rutrum nunc non neque consectetur quis placerat neque lobortis. Nam <a href="#">vestibulum</a>, arcu sodales feugiat consectetur, nisl orci bibendum elit, eu euismod magna sapien ut nibh.</p>
			<p class="body">Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices <a href="#">mauris</a>, eu consequat purus metus eu velit. Proin <a href="http://www.freewaystyle.com">metus odio</a>, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio.</p>
			<p class="body f-lp"><a href="#"><img id="ukwda" class="f-ms f-x2 f-x3" src="Resources/ukwda.png" alt="ukwda"></a><a href="#"><img id="twitterlogo" class="f-ms f-x2 f-x3" src="Resources/twitter_logo.png" alt="twitterlogo"></a><a href="#"><img id="linkedinlogo" class="f-ms f-x2 f-x3" src="Resources/linkedin_logo.png" alt=""></a><a href="#"><img id="googlelogo" class="f-ms f-x2 f-x3" src="Resources/google_logo.png" alt=""></a><a href="#"><img id="dribbblelogo" class="f-ms f-x2 f-x3" src="Resources/dribbble_logo.png" alt=""></a>&nbsp;</p>
		</div>
		<div id="flash" class="corner-flash f-ms pulse-editable">
			<div id="text" class="f-ms f-x2">
				<p class="f-fp f-lp">Booking<br>work for<br>Summer 2015</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" class="pulse-editable">
	/*
		Random background colour changer with transitions
	*/
	//add the page colours here
	var colours = ["#902a2f","#1e192d","#222d35","#27425b","#698a91","#466b3f","#592b1b","#c3141f","#305e99"];
	//the time between colour changes
	var interval = 5000;
	
	var body = document.getElementsByTagName("body")[0];
	if (body){
		var a = body.style;
		a.webkitTransition = "background-color 2s ease";
		a.khtmlTransition = "background-color 2s ease";
		a.mozTransition = "background-color 2s ease";
		a.oTransition = "background-color 2s ease";
		a.msTransition = "background-color 2s ease";
		a.transition = "background-color 2s ease";
	}
	function fwa_cc(){
		if (!body){ return; }
		var rndColour = colours[Math.floor(Math.random() * colours.length)];
		a.backgroundColor = rndColour;
		window.setTimeout(fwa_cc,interval);
	}
	fwa_cc();
</script>
</body>
</html>
EOT;
	$additionalBlocks = "";
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	
		if ($_POST["code"] != ""){
		
			# create and load the HTML
			include('simple_html_dom.php');
			$html = new simple_html_dom();
			//$html->load(nl2br($_POST["code"]));
			
			
			$code = str_replace("\r", "|||", $_POST["code"]);
			$html->load(($code));
			
			
			//prefix all of the local links, image refs and script refs with the Pulse path PHP
			$targetArray = array("link","script","img");
			foreach ($targetArray as $thisTarget){
				prefixPaths($thisTarget,$html);
			}
			
			//locate items in conditional comments
			$allComments = $html->find('comment');
			foreach ($allComments as $thisComment){
					
					/*
						Replace the href and src paths in conditional comments using Regular Expressions as comment data isn't seen as part of the DOM - bugger!
						Extend the regExp to ignore http(s) paths plus others (see above)
					*/
					
					$HrefPattern = '/(href=)([\'"(])([..\/]+)?/i';
					$HrefReplacement = '$1$2<?php echo $path; ?>/template/';
					$newComment = preg_replace($HrefPattern, $HrefReplacement, $thisComment);
					
					$SrcPattern = '/(src=)([\'"(])([..\/]+)?/i';
					$SrcReplacement = '$1$2<?php echo $path; ?>/template/';
					$newComment = preg_replace($SrcPattern, $SrcReplacement, $thisComment);
					
					$thisComment->outertext = $newComment;
					
			}
			
			
			// add the PHP for the page title
			$title = $html->find("title");
			if ($title){
				$title[0]->innertext = '<?php echo $page_title; ?>';
			}
			
			
			// meta description
			$allMeta = $html->find("meta");
			foreach ($allMeta as $thisMeta){
				$metaName = $thisMeta->name;
				if ($metaName){
					if (strtolower($metaName) == "description"){
						$thisMeta->content = '<?php echo $page_desc; ?>';
						$metaAdded = true;
					}
				}
			}
			if (!$metaAdded){
				//add a new meta tag in
				$head = $html->find("head");
				if ($head){
					$head[0]->innertext .= '<meta name="description" content="<?php echo $page_desc; ?>">'.'<br>';
				}
			}
			
			
			//locate the .pulse-editable blocks and swap them for php includes (the block name comes from the item ID if it has one otherwise it is simply called 'block_number_X')
			$element = $html->find(".pulse-editable");
			for ($c=0; $c < count($element); $c++){
				$blockname = "block_number_".$c;
				//get the id of the item (if it has one)
				$id = $element[$c]->id;
				if ($id){
					$blockname = $id;
				}
				$thisBlockCode = $element[$c]->outertext;
				$element[$c]->outertext = '<?php include("content/blocks/'.$blockname.'.txt"); ?>'; //"{{block:".$blockname."}}";
				
				$additionalBlocks .= '<h3>Block: '.$blockname.'</h3><textarea rows="5" cols="100" name="'.$blockname.'">'.$thisBlockCode.'</textarea>';
			}
			
			
			//locate the .pulse-editable blocks and swap them for php includes (the block name comes from the item ID if it has one otherwise it is simply called 'block_number_X')
			$element = $html->find(".pulse-pagecontent");
			for ($c=0; $c < count($element); $c++){
				$element[$c]->outertext = '<?php echo $parsedown->text($content); ?>';
			}
			
			
			# output it!
			$code = $html->save();
			
			//clean the code of new line breaks
			$breaks = array("<br />","<br>","<br/>");
    		$code = str_ireplace($breaks, "\r\n", $code);
    		
    		$code = str_replace("|||", "\r", $code);
			
		}
		
	}	


if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST["code"] != ""){
	echo('<a href="javascript:location.reload();" class="buy">Convert another file</a><h2>Template code (layout.php):</h2><p>Copy and paste the code below into a new file and save it as <b>layout.php</b>. FTP this file into your Pulse template directory on the server.</p><p><b>Please note</b>: Pulse Template Maker is a beta product and it may still have issues dealing with converting certain code.<br />If you spot a bug please <a href="#">let us know</a>. Thanks.</p>');
}
?>

<form method="post">
<textarea rows="40" cols="100" name="code">
<?php echo($code) ?>
</textarea>

<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
?>
	<input type="submit" value="Convert">
<?php
}
?>
</form>

<?php
	$additionalBlocks = str_replace("|||", "\r", $additionalBlocks);
	echo($additionalBlocks);
?>