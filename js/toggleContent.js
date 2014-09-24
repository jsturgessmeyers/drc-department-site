$("#toggle-content").click(function() {
	contentDisplay = $(".main-content").css("opacity");

	if (contentDisplay == 1) {
		$(".main-content").fadeTo("fast", 0);
		$("#toggle-content").text("Show text");
	} else {
		$(".main-content").fadeTo("fast", 1);
		$("#toggle-content").text("Hide text");
	};
});

$("#toggle-video").click(function() {
	vidDisplay = $("#bg-vid").css("opacity");
	if (vidDisplay == 0) {
		$("#toggle-content").text("Show text");
		$(".main-content").fadeTo("fast", 0);
		$("video").delay(100).fadeTo("slow", 1);
		$("video")[0].play();
	};
});