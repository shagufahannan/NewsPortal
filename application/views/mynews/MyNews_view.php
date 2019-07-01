<div class="w3-container">
<style>
	.editor-preview h1,
	.editor-preview h2,
	.editor-preview h3,
	.editor-preview h4,
	.editor-preview h5{
		margin-bottom:10px;
	}
	
	.editor-preview h1{
		border-bottom:1px solid #ddd;
	}
	
	.editor-preview h1{
		border-bottom:1px solid #eee;
	}
	</style>
<?php echo form_open('MyNews/setNewMyNews'); ?>

<label>Title </label><br>
  <input type="text" name="title" id="title" placeholder="enter title"/><br />
  
<section class="main-content">
<h1><a id="h1_demo1" class="anchor" href="#h1_demo1" aria-hidden="true"><span class="octicon octicon-link"></span></a>News Content</h1>


<textarea name="demo1" id="demo1"></textarea>
</section>

<!--label>Category </label><br>
  <input type="text" name="category" id="category" placeholder="enter tag, category"/><br />
  <br /-->
  <input type="submit" class="w3-btn w3-blue"  value="Submit" name="submit"/>
  <br />
  <?php echo form_close(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
	new SimpleMDE({
		element: document.getElementById("demo1"),
		spellChecker: false,
	});
	</script>
</div>