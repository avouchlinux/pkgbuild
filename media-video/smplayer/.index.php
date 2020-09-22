<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8" >
<style>
* {
    margin: 0;
    padding: 0;
    line-height: 1.4;
}

* {box-sizing: border-box;}

body {
     margin: 0;
    font-size: small;
    font-family: "Liberation Sans","Lucida Grande", "Luxi Sans", "Bitstream Vera Sans", "Helvetica", "verdana", "Arial", "sans-serif";
    color: #666;
}
a, a:visited, a:hover {
    color: #0066CC;
    text-decoration: none;
}
.topnav {
  overflow: hidden;
  background-color: #1570A6;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  color:#fff;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
}

.topnav select[name=type] {
font-size: 16px;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-left: 2px;
  margin-right: 16px;
  background: #2196F3;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

div#content {
    margin: 0 20px;
    margin-top: 30px;
    clear: both;
}


img.sort {
    vertical-align: baseline;
    width: 10px;
    height: 9px;
}

table {
	border-collapse:collapse;
    width:80%;
	margin:15px 0;
}

th {
    vertical-align: middle;
    font-weight: bold;
}

th, td {
    white-space: nowrap;
    text-align: left;
}

td {
    vertical-align: top;
}

#pkgdetails #pkginfo td {
    padding: .25em 0 .25em 1.5em;
}

#headerSearch input, #headerSearch select {
    font-size: 16px;
}
div.pageHeader {
    margin-bottom: 10px;
    font-weight: bold;
    font-size: 19px;
}

div.dataHeader {
    font-weight: bold;
    font-size: 17px;
    line-height: 28px;
    padding-bottom: 4px;
}

div.box {
    margin-bottom: 1.5em;
    padding: .65em;
    background: #ecf2f5;
    border: 1px solid #bcd;
}

h2 {
    font-size: 1.5em;
    margin-bottom: .5em;
    border-bottom: 1px solid #888;
}



#pkgdetails #detailslinks {
    float: right;
}

#pkgdetails #detailslinks > div {
    padding: .5em;
    margin-bottom: 1em;
    background: #eee;
    border: 1px solid #bbb;
}

#pkgdetails #detailslinks h4 {
    margin-top: 0;
    margin-bottom: .25em;
}

#pkgdetails #detailslinks ul {
    list-style: none;
    padding: 0;
    margin-bottom: 0;
    font-size: .846em;
}

#pkgdetails #metadata {
    clear: both;
}

#pkgdetails #pkgdeps {
    float: left;
    width: 48%;
    margin-right: 2%;
}

#pkgdetails #pkgreqs {
    float: left;
    width: 50%;
}

#pkgdetails h2 {
    background: #1570A6;
    color: #fff;
    font-size: 1.5em;
    margin-bottom: .5em;
    padding: .2em .35em;
}

#pkgdetails #metadata h3 {
    background: #1570A6;
    color: #fff;
    font-size: 1em;
    margin-bottom: .5em;
    padding: .2em .35em;
}

#pkgdetails #metadata ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#pkgdetails #metadata li {
    padding-left: .5em;
}

#pkgdetails #pkgreqs {
    float: left;
    width: 50%;
}

#pkgdetails #metadata ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#pkgdetails #pkgfiles {
    clear: left;
    padding-top: 1em;
}

#pkgdetails #metadata p {
    padding-left: .5em;
}
/* START OF AVH FOOTER */

.avh_footer_main { height:5em; MIN-HEIGHT: 5em; CLEAR: both; background-color: #1570a6; width:100%; }
.avh_footer { margin-left:auto; margin-right:auto; margin-top:1em; height:100%; width:990px; FONT-SIZE: 12px; text-align:bottom;}
.avh_footer ul { padding-top:.5em;FLOAT: right; CLEAR}
.avh_footer ul { list-style: none;}
.avh_footer li { border-left: #444 1px solid; line-height:normal; padding-bottom: 0px; padding-left: 0.72em; padding-right: 0.72em; float: left; padding-top: 0px }
.avh_footer li a { }
.avh_footer a { color: #fff; }

</style>
</head>
<body>

<div class="topnav">
    <a class="active" href="https://packages.avouch.org">Summary</a>
    <a href="#contact">Packages</a>
    <a href="#about">Tags</a>
    <a href="#contact">Targets</a>
    <a href="#about">Users</a>
    <a href="#contact">Hosts</a>
    <a href="search.php">Search</a>
  <div class="search-container">
    <form action="../search.php">
        <select name="type">
              <option value="package">Packages</option>
              <option value="build">Builds</option>
              <option value="tag">Tags</option>
              <option value="target">Build Targets</option>
              <option value="user">Users</option>
              <option value="host">Hosts</option>
            </select>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit">Submit</button>
    </form>
  </div>
</div>

<div id="content">

</div> <!-- end if div#content -->

<div id="pkgdetails" class="box">
   
    <h2><?php
$file_handle = fopen("PKGBUILD", "r");
while (!feof($file_handle) ) {
  $line_of_text = fgets($file_handle);
  $parts = explode('=', $line_of_text);
  switch($parts[0]){
  case 'pkgname':
      $pkgname = $parts[1];
      echo "$pkgname \t";
      break;
    case 'pkgver':
    $pkgver = $parts[1];
    echo $pkgver;
    break;
    case 'pkgrel':
    $pkgrel = $parts[1];
    echo "-$pkgrel";
    break;
  }
}
fclose($file_handle);
?>
</h2>

    <div id="detailslinks" class="listing">
        <div id="actionlist">
        <h4>Package Actions</h4>
            <ul class="small">
                <li>
                    <a href="https://projects.archlinux.org/svntogit/community.git/tree/trunk?h=packages/smplayer" title="View source files for smplayer">Source Files</a> /
                    <a href="https://projects.archlinux.org/svntogit/community.git/log/trunk?h=packages/smplayer" title="View changes for smplayer">View Changes</a>
                </li>
                <li>
                    <a href="https://bugs.archlinux.org/?project=5&string=smplayer" title="View existing bug tickets for smplayer">Bug Reports</a> /
                    <a href="https://bugs.archlinux.org/newtask?project=5&product_category=33&item_summary=%5Bsmplayer%5D+PLEASE+ENTER+SUMMARY" title="Report new bug for smplayer">Add New Bug</a>
                </li>
                <li><a href="https://wiki.archlinux.org/index.php/Special:Search?search=smplayer" title="Search wiki for smplayer">Search Wiki</a></li>
                <li><a href="https://security.archlinux.org/package/smplayer" title="View security issues for smplayer">Security Issues</a></li>
                
                <li><a href="flag/" title="Flag smplayer as out-of-date">Flag Package Out-of-Date</a>
                <a href="/packages/flaghelp/"
                    title="Get help on package flagging"
                    onclick="return !window.open('/packages/flaghelp/','FlagHelp',
                    'height=350,width=450,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=no');">(?)</a></li>
                
                <li><a href="download/" rel="nofollow" title="Download smplayer from mirror">Download From Mirror</a></li>
            </ul>

            
        </div>

        
    </div>
    

    <div itemscope itemtype="http://schema.org/SoftwareApplication">
    <meta itemprop="name" content="smplayer"/>
    <meta itemprop="version" content="18.2.0-1"/>
    <meta itemprop="softwareVersion" content="18.2.0-1"/>
    <meta itemprop="fileSize" content="3395940"/>
    <meta itemprop="dateCreated" content="2018-01-26"/>
    <meta itemprop="datePublished" content="2018-01-26"/>
    <meta itemprop="operatingSystem" content="Arch Linux"/>
    <div style="display:none" itemprop="provider" itemscope itemtype="http://schema.org/Person">
        <meta itemprop="name" content="Qurban Ullah"/>
    </div>
    <table id="pkginfo">
        <tr>
            <th>Architecture:</th>
            <td><a href="/packages/?arch=x86_64"
                    title="Browse packages for x86_64 architecture">x86_64
</a></td>
        </tr>
        <tr>
            <th>Description:</th>
            <td class="wrap" itemprop="description">Media player with built-in codecs that can play virtually all video and audio formats</td>
        </tr><tr>
            <th>Upstream URL:</th>
            <td><a itemprop="url" href="https://www.smplayer.info/"
                    title="Visit the website for smplayer">https://www.smplayer.info/</a></td>
        </tr><tr>
            <th>License(s):</th>
            <td class="wrap">GPL</td>
        </tr>
        <tr>
            <th>Maintainers:</th>
            
            <td>
                <a href="/packages/?maintainer=anthraxx"
                    title="View packages maintained by Levente Polyak">Qurban Ullah</a><br/>
                
            </td>
            
        </tr><tr>
            <th>Package Size:</th>
            <td>3.2 MB</td>
        </tr><tr>
            <th>Installed Size:</th>
            <td>15.0 MB</td>
        </tr><tr>
            <th>Last Packager:</th>
            <td>
            <a href="/packages/?packager=anthraxx"
                title="View packages packaged by Levente Polyak">Qurban Ullah</a>
            </td>
        </tr><tr>
            <th>Build Date:</th>
            <td>2018-01-26 00:16 UTC</td>
        </tr><tr>
            <th>Signed By:</th>
            <td><a href="https://pgp.mit.edu/pks/lookup?op=vindex&amp;fingerprint=on&amp;exact=on&amp;search=0xFC1B547C8D8172C8" title="PGP key search for 0xFC1B547C8D8172C8">Qurban Ullah</a></td>
        </tr><tr>
            <th>Signature Date:</th>
            <td>2018-01-26 00:16 UTC</td>
        </tr><tr>
            <th>Last Updated:</th>
            <td>2018-01-26 00:55 UTC</td>
        </tr>
        
    </table>

    </div>

    <div id="metadata">
        
        <div id="pkgdeps" class="listing">
            <h3 title="smplayer has the following dependencies">
                Dependencies (12)</h3>
            <ul id="pkgdepslist">
                <li>
<a href="/packages/core/x86_64/gcc-libs/" title="View package details for gcc-libs">gcc-libs</a>


</li>
<li>
<a href="/packages/extra/any/hicolor-icon-theme/" title="View package details for hicolor-icon-theme">hicolor-icon-theme</a>


</li>
<li>
<a href="/packages/extra/x86_64/libx11/" title="View package details for libx11">libx11</a>


</li>
<li>
<a href="/packages/community/x86_64/mpv/" title="View package details for mpv">mpv</a>


</li>
<li>
<a href="/packages/extra/x86_64/qt5-script/" title="View package details for qt5-script">qt5-script</a>


</li>
<li>
<a href="/packages/core/x86_64/zlib/" title="View package details for zlib">zlib</a>


</li>
<li>
<a href="/packages/extra/x86_64/mplayer/" title="View package details for mplayer">mplayer</a>


 <span class="opt-dep"> (optional)</span>
 - <span class="dep-desc">alternative multimedia engine</span>
</li>
<li>
<a href="/packages/community/any/smplayer-skins/" title="View package details for smplayer-skins">smplayer-skins</a>


 <span class="opt-dep"> (optional)</span>
 - <span class="dep-desc">skin themes collection</span>
</li>
<li>
<a href="/packages/community/any/smplayer-themes/" title="View package details for smplayer-themes">smplayer-themes</a>


 <span class="opt-dep"> (optional)</span>
 - <span class="dep-desc">icon themes collection</span>
</li>
<li>
<a href="/packages/community/x86_64/smtube/" title="View package details for smtube">smtube</a>


 <span class="opt-dep"> (optional)</span>
 - <span class="dep-desc">browse and play youtube videos</span>
</li>
<li>
<a href="/packages/community/any/youtube-dl/" title="View package details for youtube-dl">youtube-dl</a>


 <span class="opt-dep"> (optional)</span>
 - <span class="dep-desc">youtube videos and streaming</span>
</li>
<li>
<a href="/packages/extra/x86_64/qt5-tools/" title="View package details for qt5-tools">qt5-tools</a>


 <span class="make-dep"> (make)</span>
</li>

            </ul>
        </div>
        
        
        <div id="pkgreqs" class="listing">
            <h3 title="Packages that require smplayer">
                Required By (3)</h3>
            <ul id="pkgreqslist">
                <li><a href="/packages/community/any/smplayer-skins/" title="View package details for smplayer-skins">smplayer-skins</a>

</li>
<li><a href="/packages/community/any/smplayer-themes/" title="View package details for smplayer-themes">smplayer-themes</a>

</li>
<li><a href="/packages/community/x86_64/smtube/" title="View package details for smtube">smtube</a>

<span class="opt-dep"> (optional)</span>
</li>

            </ul>
        </div>
        
        <div id="pkgfiles" class="listing">
            <h3 title="Complete list of files contained within this package">
                Source Files</h3>
            <div id="pkgfilelist">
                   <style>







     /* icons for file types (icons by famfamfam.) */

     /* images */
     table tr td:first-of-type a[href$=".jpg"], 
     table tr td:first-of-type a[href$=".png"], 
     table tr td:first-of-type a[href$=".gif"], 
     table tr td:first-of-type a[href$=".svg"], 
     table tr td:first-of-type a[href$=".jpeg"]
      		{background-image: url(./.images/image.png);}

     /* pdfs */
     table tr td:first-of-type a[href$=".pdf"] 
     		{background-image: url(./.images/pdf.gif);}
     
     /* zips */
     table tr td:first-of-type a[href$=".zip"] 
     		{background-image: url(./.images/zip.png);}

     /* css */
     table tr td:first-of-type a[href$=".css"] 
     		{background-image: url(./.images/css.png);}

     /* docs */
     table tr td:first-of-type a[href$=".doc"],
     table tr td:first-of-type a[href$=".docx"],
     table tr td:first-of-type a[href$=".ppt"],
     table tr td:first-of-type a[href$=".pptx"],
     table tr td:first-of-type a[href$=".pps"],
     table tr td:first-of-type a[href$=".ppsx"],
     table tr td:first-of-type a[href$=".xls"],
     table tr td:first-of-type a[href$=".xlsx"]
     		{background-image: url(./.images/office.png)}
      
     /* videos */
     table tr td:first-of-type a[href$=".avi"], 
     table tr td:first-of-type a[href$=".wmv"], 
     table tr td:first-of-type a[href$=".mp4"], 
     table tr td:first-of-type a[href$=".mov"], 
     table tr td:first-of-type a[href$=".m4a"]
     		{background-image: url(./.images/video.png);}

     /* audio */
     table tr td:first-of-type a[href$=".mp3"], 
     table tr td:first-of-type a[href$=".ogg"], 
     table tr td:first-of-type a[href$=".aac"], 
     table tr td:first-of-type a[href$=".wma"] 
     		{background-image: url(./.images/audio.png);}

     /* web pages */
     table tr td:first-of-type a[href$=".html"],
     table tr td:first-of-type a[href$=".xml"]
     		{background-image: url(./.images/xml.png);}
      
     table tr td:first-of-type a[href$=".php"] 
     		{background-image: url(./.images/php.png);}

     table tr td:first-of-type a[href$=".js"] 
     		{background-image: url(./.images/script.png);}

     /* directories */
     table tr.dir td:first-of-type a
     		{background-image: url(./.images/folder.png);}

   </style>
                <table>
		<tr>
			<th>Filename</th>
			<th>Type</th>
			<th>Size <span>(bytes)</span></th>
			<th>Date Modified</th>
		</tr>
	<?php
	 // Opens directory
	 $myDirectory=opendir(".");

	 // Gets each entry
	 while($entryName=readdir($myDirectory)) {
	   $dirArray[]=$entryName;
	 }

	 // Finds extensions of files
	 function findexts ($filename)
	 {
	   $filename=strtolower($filename);
	   $exts = pathinfo($filename, PATHINFO_EXTENSION);
	   //echo $exts;
	   return $exts;
	 }

	 // Closes directory
	 closedir($myDirectory);

	 // Counts elements in array
	 $indexCount=count($dirArray);

	 // Sorts files
	 sort($dirArray);

	 // Loops through the array of files
	 for($index=0; $index < $indexCount; $index++) {

  	 // Allows ./?hidden to show hidden files
		if($_SERVER['QUERY_STRING']=="hidden")
		{$hide="";
		 $ahref="./";
		 $atext="Hide";}
		else
		{$hide=".";
		 $ahref="./?hidden";
		 $atext="Show";}
	       if(substr("$dirArray[$index]", 0, 1) != $hide && substr("$dirArray[$index]", 0, 1) != "error_log") {

	 // Gets File Names
	       $name=$dirArray[$index];
	       $namehref=$dirArray[$index];

	 // Gets Extensions 
	       $extn=findexts($dirArray[$index]); 

 	 // Gets file size 
	       $size=number_format(filesize($dirArray[$index]));

	 // Gets Date Modified Data
	       $modtime=date("M j Y g:i A", filemtime($dirArray[$index]));

	 // Prettifies File Types
		switch ($extn){
			case "png": $extn="PNG Image"; break;
			case "jpg": $extn="JPG Image"; break;
			case "svg": $extn="SVG Image"; break;
			case "gif": $extn="GIF Image"; break;
			case "ico": $extn="Windows Icon"; break;

			case "txt": $extn="Text File"; break;
			case "htm": $extn="HTML File"; break;
			case "php": $extn="PHP Script"; break;
			case "js": $extn="Javascript"; break;
			case "css": $extn="Stylesheet"; break;
			case "pdf": $extn="PDF Document"; break;

			case "zip": $extn="ZIP Archive"; break;
			
			case "patch": $extn="Patch File"; break;
			case "diff": $extn="Patch File"; break;

			default: $extn=strtoupper($extn)." File"; break;
		}

	// Separates directories
	       if(is_dir($dirArray[$index]))
	       {
		       $extn="&lt;directory&gt;"; 
		       $size="&lt;directory&gt;"; 
		       $class="dir";
		}
		else 
		{
			$class="file";
		}

	// Cleans up . and .. directories 
		if($name=="."){$name=". (Current Directory)";}
		if($name==".."){$name=".. (Parent Directory)";}

	 // Print 'em
	 print("
	       	<tr class='$class'>
			<td><a href='$namehref'>$name</a></td>
			<td><a href='$namehref'>$extn</a></td>
			<td><a href='$namehref'>$size</a></td>
			<td><a href='$namehref'>$modtime</a></td>
		</tr>");
	   }
	 }
	?>

	</table>

            </div>
        </div>
             <div id="pkgfiles" class="listing">
            <h3 title="Complete list of files contained within this package">
                Package Contents</h3>
            <div id="pkgfilelist">
                <p><a id="filelink" href="files/"
                    title="Click to view the complete file list for smplayer">
                    View the file list for smplayer</a></p>
            </div>
        </div>
    </div>
</div> </div> <!-- end if id="pkgdetails" -->

  <div class="avh_footer_main">
					<div class="avh_footer">
						<ul id="top_list">							
							<li><a href="http://www.avouch.org">avouch.org &#169 2018</a></li>							
						</ul>
						<ul id="bottom_list">
							<li><a href="http://www.avouch.org/avouch/contactus.html">Contact us</a></li>
							<li><a href="http://www.avouch.org/avouch/privacy.html">Privacy statement</a></li>
							<li><a href="http://www.avouch.org/avouch/terms.html">Terms of use</a></li>
							<li><a href="http://www.avouch.org/avouch/trademark.html">Trademarks</a></li>
						</ul>
						
					</div>
				</div>
</body>
</html>