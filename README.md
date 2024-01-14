# Tinymce integration with kcfinder

<h3>Introduction</h3>
In this project the library used is : <br>
<ul>
  <li>Tinymce version 4.5.2</li>
  <li>Kcfinder version 3.10</li>
</ul>

<hr>

<h3>Tinymce</h3>
The world's #1 open source rich text editor.

Using an old version of TinyMCE? We recommend you to upgrade to TinyMCE 6 to continue receiving security updates, or consider TinyMCE 5 LTS if you need more time to upgrade.

Used and trusted by millions of developers, TinyMCE is the world’s most customizable, scalable, and flexible rich text editor. We’ve helped launch the likes of Atlassian, Medium, Evernote (and lots more that we can’t tell you), by empowering them to create exceptional content and experiences for their users.

With more than 350M+ downloads every year, we’re also one of the most trusted enterprise-grade open source HTML editors on the internet. There’s currently more than 100M+ products worldwide, powered by Tiny. As a high powered WYSIWYG editor, TinyMCE is built to scale, designed to innovate, and thrives on delivering results to difficult edge-cases.

<hr>

<h3>KCFinder web file manager</h3>

KCFinder is free open-source replacement of CKFinder web file manager. It can be integrated into FCKeditor, CKEditor, and TinyMCE WYSIWYG web editors (or your custom web applications) to upload and manage images, flash movies, and other files that can be embedded into an editor's generated HTML content.

<hr>

<h3>Compatibility</h3>
<ul>
  <li>KCFinder is officialy tested on Apache 2 web server only, but probably it will work on other web servers.</li>
  <li>PHP 5.3 or better is required. Safe mode should be off.</li>
  <li>At least one of these PHP extensions is required: GD, ImageMagick or GraphicsMagick.</li>
  <li>To work with client-side HTTP cache, the PHP must be installed as Apache module.</li>
  <li>KCFinder supports MIME type recognition for the uploaded files. If you plan to use this feature, you should to load Fileinfo PHP extension.</li>
  <li>PHP ZIP extension should be loaded in order to have an option to download multiple files and directories as single ZIP file.</li>
  <li>Automatic rotating and flipping images requires PHP EXIF extension.</li>
</ul>

<hr>

<h3>Note:</h3>
if you are using php version 7 change and edit <b>kcfinder>lib>class_image.php</b> on the line 119
become <br>
list($key, $width) = each($image); <br>
list($key, $height) = each($image); <br>

if you are using php version 8 change and edit <b>kcfinder>lib>class_image.php</b> on the line 119
become <br>
$width = $image[0]; <br>
$height = $image[0]; <br>

<b>In this project the default running PHP is version 8 </b>
    
   
    
    
    


