<script>

jQuery( document ).ready(function() {
	var vid_width = jQuery(window).width();
	var vid_height = vid_width * 9/16;
	jQuery("VIDEO CONTAINER CLASS").prepend("<iframe width='" + vid_width+ "' height='" + vid_height + "' src='https://www.youtube.com/embed/1FJD7jZqZEk?rel=0' frameborder='0' allowfullscreen>");
});
jQuery( window ).resize(function() {
	jQuery("VIDEO CONTAINER CLASS iframe").remove();
	var vid_width = jQuery(window).width();
	var vid_height = vid_width * 9/16;
	jQuery("VIDEO CONTAINER CLASS").prepend("<iframe width='" + vid_width+ "' height='" + vid_height + "' src='https://www.youtube.com/embed/1FJD7jZqZEk?rel=0' frameborder='0' allowfullscreen>");
});