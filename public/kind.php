<?php header("Content-Type:text/html; charset=UTF-8");?>
<script charset="utf-8" src="../public/kindeditor/kindeditor.js"></script>
<script>
    var editor;
    KindEditor.ready(function(K) {
    	   editor = K.create('#editor_id');
        });
</script>
<textarea id="editor_id" name="intro"
	style="width: 700px; height: 360px;">
</textarea>

