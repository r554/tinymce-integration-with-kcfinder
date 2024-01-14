<?php session_start();
//permession upload
$_SESSION['KCFINDER']=array();
$_SESSION['KCFINDER']['disabled'] = false;
$_SESSION['KCFINDER']['uploadURL'] = "../images/"; //sesuaikan dengan direkory kalian
$_SESSION['KCFINDER']['uploadDir'] = "";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tinymce With Kcfinder</title>
	<script src="tinymce/tinymce.min.js"></script>
</head>
<body>
	<center><h3>Integration Tinymce with Kcfinder</h3></center>
	<textarea></textarea>

	<script>
		tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
			"preview wordcount, advlist, autolink, lists, link, image, charmap, print, preview, hr, anchor pagebreak searchreplace wordcount, visualblocks, visualchars, fullscreen, insertdatetime, media, nonbreaking, save, table, contextmenu, directionality, emoticons, paste, textcolor, colorpicker, textpattern, code"
			],
			toolbar: "undo redo | fontselect fontsizeselect | styleselect | bold italic  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | blockquote | forecolor backcolor emoticons | table | link image media | preview wordcount fullscreen | code",
			convert_urls: false,
			theme_advanced_font_sizes : "8px,10px,12px,14px,16px,18px,20px,24px,32px,36px",
			theme_advanced_fonts : "Arial=arial,helvetica,sans-serif;"+
			"Arial Black=arial black,avant garde;"+
			"Book Antiqua=book antiqua,palatino;"+
			"Comic Sans MS=comic sans ms,sans-serif;"+
			"Courier New=courier new,courier;"+
			"Century Gothic=century_gothic;"+
			"Georgia=georgia,palatino;"+
			"Gill Sans MT=gill_sans_mt;"+
			"Gill Sans MT Bold=gill_sans_mt_bold;"+
			"Gill Sans MT BoldItalic=gill_sans_mt_bold_italic;"+
			"Gill Sans MT Italic=gill_sans_mt_italic;"+
			"Helvetica=helvetica;"+
			"Impact=impact,chicago;"+
			"Iskola Pota=iskoola_pota;"+
			"Iskola Pota Bold=iskoola_pota_bold;"+
			"Symbol=symbol;"+
			"Tahoma=tahoma,arial,helvetica,sans-serif;"+
			"Terminal=terminal,monaco;"+
			"Times New Roman=times new roman,times;"+
			"Trebuchet MS=trebuchet ms,geneva;"+
			"Verdana=verdana,geneva",
			file_browser_callback: function(field, url, type, win) {
				tinyMCE.activeEditor.windowManager.open({
            file: 'kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,// sesuikan direktory KCfinder
            title: 'KCFinder',
            width: 900,
            height: 950,
            inline: true,
            close_previous: false
        }, {
        	window: win,
        	input: field
        });
				return false;
			}
			
		});
	</script>
</body>
</html>