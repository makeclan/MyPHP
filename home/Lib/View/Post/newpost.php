<div id="newpost">
	<script src="<?php echo PUBLIC_PATH;?>/ckeditor/ckeditor.js"></script>	<!-- 载入可视化编辑器 -->
	<form action="<?php createUrl('Post','add') ?>" method="post">
		<input type="text" class="span8" name="title" placeholder="输入标题……"><br>
		<textarea class="span8" name="content" rows="18" cols="180" ></textarea><br>
		<input type="text" id="tag" class="span4" name="tag" placeholder="填写标签">
		<label id="select">选择已有标签</label>
		<select name="tag" id="select_tag">
			<?php foreach($tag as $t){ ?>
				<option value="<?php echo $t['tag'] ?>"><?php echo $t['tag'] ?></option>
			<?php } ?>
		</select>
		<script>
			CKEDITOR.replace('content');
		</script>
		<input type="submit" class="btn btn-primary pull-right" name="sub" value="发布"><br>
	</form>	
</div>	