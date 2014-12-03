
    $(document).ready(function() {
    	$(".left").on('click', function() {
    		if($('.videos').scrollLeft() > 0) {
	    		$('.videos').animate({
	    			scrollLeft: $('.videos').scrollLeft() - 600
	    			
	    		}, 300);
    		}
    		else if($('.videos').scrollLeft() == 0) {
    			$('.videos').animate({
	    			scrollLeft: $('.videos').width()
	    		}, 300);
    		}
    	});

    	$(".right").on('click', function() {
    		{
    			$('.videos').animate({
	    			scrollLeft: $('.videos').scrollLeft() + 600
	    		}, 300);
	    		console.log($('.videos').scrollLeft());
    		}
    	});
    });

    if($(window).width() < 769) {
        $('video').removeAttr('disabled');
        $('video').attr('controls', 'controls');
        $('.overlay').css('display', 'none');
    }
    else {
        $('video').attr('disabled', 'disabled');
        $('video').removeAttr('controls');
        $('.overlay').css('display', 'block');

        $(".video-cont video").click(function() {
            var src = $(this).children("source").attr("src");
            var content = $(this).children("#content").attr("value");
            var title = $(this).children("#title").attr("value");
            var video = '<div><video class="embed-responsive-item" width="600px" height="400px" controls autoplay><source src="'+src+'" type="video/mp4"><source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.</video></div>';
            $("#myModal").modal();
            $("#myModal").on("shown.bs.modal", function(){
                $("#myModal .modal-body").html(video);
                $("#myModal .modal-footer").html(content);
                $("#myModal .modal-header h4").html(title);
            });
            $("#myModal").on("hidden.bs.modal", function(){
                $("#myModal .modal-body").html('');
            });
        });
    }

	
