<?php
    // 1 week
    session_cache_expire(60*24*7);
    session_start();
    
    $default_tags = 'agile ajax apache api apml applescript architecture auth autocomplete beautify bug bugs C canvas cheatsheet closure Cocoa code codedump comet compiler compression compressor Computer crossdomain csrf css3 D dashcode debug debugger debugging development dom ext firebug firefox flash flex framework functions greasemonkey hack hacks howto html html5 ie iframe iframes innerhtml input Java javascript jquery js js2 keycodes keypress LAMP language languages leak leaks livesearch memory memoryleak minify moo mootools namespace nu oauth obfuscate obfuscator objective-c onload oop opml optimisation optimised optimization pack packer performance perl php plugin plugins programming prototype prototyping rail rails regexp replacehtml reserved rest ruby scripting scroll scrolling sdk snippet';
    
    if (!@$_SESSION['existing_tags']) {
        $_SESSION['existing_tags'] = $default_tags;
    }
    
    $existing_tags = $_SESSION['existing_tags'];
    $tags = split(' ', $default_tags);
    
    // hit via ajax
	if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && @$_GET['tag']) {
	    $match = array();
	    foreach ($tags as $tag) {
	        if (stripos($tag, $_GET['tag']) === 0) {
	            $match[] = $tag;
	        }
	    }
	    
	    echo json_encode($match);
	    
	    exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Tagging Demo</title>
    <style type="text/css" media="screen">
    <!--
      BODY { margin: 10px; padding: 0; font: 1em "Trebuchet MS", verdana, arial, sans-serif; font-size: 100%; }
      TEXTAREA { width: 80%;}
      FIELDSET { border: 1px solid #ccc; padding: 1em; margin: 0; }
      LEGEND { color: #ccc; font-size: 120%; }
      INPUT, TEXTAREA { font-family: Arial, verdana; font-size: 125%; padding: 7px; border: 1px solid #999; }
      LABEL { display: block; margin-top: 10px; } 
      IMG { margin: 5px; }
      INPUT.wide { width: 300px; }
      
      SPAN.tagMatches {
          margin-left: 10px;
      }
      
      SPAN.tagMatches SPAN {
          padding: 2px;
          margin-right: 4px;
          background-color: #0000AB;
          color: #fff;
          cursor: pointer;
      }
      
      PRE {
          background: #ddd;
          font-family: Courier;
          padding: 5px;
          overflow: auto;
      }
    -->
    </style>

    <script src="/js/jquery.js" type="text/javascript"></script>
    <script src="/js/tag.js" type="text/javascript"></script>

    <script type="text/javascript">
    <!--
    $(function () {
        $('#tags').tagSuggest({
            tags: <?=json_encode($tags)?>
        });
        $('#tags-ajax').tagSuggest({
            url: 'tagging.php',
            delay: 250
        });
    });
    //-->
    </script>
  </head>
  <body>
    <h1>Tagging Demo</h1>
    <fieldset>
        <legend>Enter your tags (predefined)</legend>
        <div>
            <label for="tags">Tags:</label>
            <input class="wide" type="text" name="tags" value="" id="tags" />
        </div>
        <p>Based on the following implementation:</p>
        <pre><code>$('#tags').tagSuggest({
    tags: <?=json_encode($tags)?>
    
});</code></pre>
    </fieldset>
    <fieldset>
        <legend>Enter your tags (Ajax based)</legend>
        <p>Use firebug to watch for Ajax requests and response</p>
        <div>
            <label for="tags-ajax">Tags:</label>
            <input class="wide" type="text" name="tags-ajax" value="" id="tags-ajax" />
        </div>
        <p>Based on the following implementation:</p>
        <pre><code>$('#tags-ajax').tagSuggest({
    url: '/tagging.php'
});</code></pre>
        
    </fieldset>
    <h2>All tagging is based on the following tags in this example:</h2>
    <p><?=$default_tags?></p>    
  </body>
</html>





