$(document).ready(function () {
    const $pinIcon = $('#pinned');
    const $taskbar = $('.navbar');

    
    // Initial setup
    $taskbar.addClass('show');

    $(document).on('click', '#pinned', function () {
        
        let $iframePopup = $('#alliframelist .popupiframe');
        console.log($iframePopup);
        
        let pinIcon = $('#pinned');
        
        if (pinIcon.hasClass('ri-pushpin-line')) {
            if ($iframePopup.hasClass('maximized')) {
                $iframePopup.removeClass('reduced-height')
            }
            $pinIcon.removeClass('ri-pushpin-line').addClass('ri-unpin-line');

                $(document).on('mousemove', handleMouseMove);
            
        } else {
            
            if ($iframePopup.hasClass('maximized')) {
                $iframePopup.addClass('reduced-height')
              
            }
            $pinIcon.addClass('ri-pushpin-line').removeClass('ri-unpin-line')
                $(document).off('mousemove', handleMouseMove);

            }
        
    });

    function handleMouseMove(event) {
        const taskbarHeight = $taskbar.outerHeight();

        // Show the taskbar when the cursor is at the very top of the screen (y = 0)
        if (event.clientY === 0) {
            $taskbar.addClass('show');
        }

        // Hide the taskbar when the cursor moves out of the taskbar's height
        if (event.clientY > taskbarHeight) {
            $taskbar.removeClass('show');
        }
    }


});
