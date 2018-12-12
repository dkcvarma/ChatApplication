<html>
	<head>
		<title>Try</title>
	</head>
	<body>
		<?php
		if(isset($_REQUEST['ok'])){
			$xml = new DOMDocument("1.0","UTF-8");
			$xml->load("a.xml");
			
			$rootTag = $xml->getElementsByTagName("document")->item(0);
			
			$dataTag = $xml->createElement("data");
			
			$aTag = $xml->createElement("username",$_REQUEST['a']);
			$bTag = $xml->createElement("email",$_REQUEST['b']);
			
			$dataTag->appendChild($aTag);
			$dataTag->appendChild($bTag);
			
			$rootTag->appendChild($dataTag);
			
			$xml->save("a.xml");
		}
		?>
		
		<form action="xml.php" method="post">
			<input type="text" name="a" />
			<input type="text" name="b" />
			<input type="submit" name="ok" />
		</form>
	</body>
</html>