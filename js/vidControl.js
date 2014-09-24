//FADE-OUT VIDEO ON END, FADE-IN BG IMG AFTER DELAY
$("video").on('timeupdate', function(event) {
	var current = Math.round(event.target.currentTime * 1000);
	var total = Math.round(event.target.duration * 1000);
	if((total - current) < 1000) {
		$(this).fadeTo("slow", 0);
		$("div#bg-img").delay(500).fadeTo("slow", 1);
	}
});