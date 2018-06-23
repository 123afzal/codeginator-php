<h2>Welcome to edit</h2>

<?php echo validation_errors(); ?>

<!--why echo here-->
<?php echo form_open('news/edit/'.$news_item['slug']); ?>



<label for="title">Title</label>
<input type="text" name="title" value="<?php echo $news_item['title'] ?>"><br />

<input type="submit" name="submit" value="Edit" />

</form>

