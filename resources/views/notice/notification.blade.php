@php
    $url = 'https://node.sizaf.com';
@endphp
<div id="Notice"></div>
<input type="hidden" id="user_id" value="{{ Auth::id() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.socket.io/4.7.5/socket.io.min.js"></script>
<script src="{{ url('/') }}/public/js/moment.js"></script>
<script>
    $(document).ready(function() {
        window.addEventListener('click', (event) => {
            var modals = document.querySelectorAll('.previewmodal');
            modals.forEach(modal => {
                if (event.target == modal) {
                    modal.classList.add('hidden');
                }
            });
        });
    });
    var url = "{{ $url }}";
    const socket = io(url);
    var user_id = $('#user_id').val();
    socket.on('connect', () => {
        console.log('connected');
    });
    socket.on('receivedfor_' + user_id, (data) => {
        console.log(data);
        var NoticeDiv = $('#Notice');
        NoticeDiv.html('');
        var html = `<div id="preview-modal" role="dialog"
                        class="fixed inset-0 flex items-center z-10 justify-center bg-black bg-opacity-50 previewmodal">
                        <div class="w-full max-w-md h-96 rounded-2xl bg-white overflow-hidden px-5 modal-content">
                            <div class="flex pt-8 pb-1 border-b-2 justify-center items-center">
                                <h2 class="text-lg text-c-black font-medium">${data.title}</h2>
                            </div>
                            <div class="py-2 max-h-72 overflow-y-auto">
                                <p>${data.content}</p>
                                <p>Date : ${moment(data.schedule_time).format('YYYY-MM-DD')}</p>
                                <p>Time : ${moment(data.schedule_time).format('H:mm:ss')}</p>
                            </div>
                        </div>
                    </div>`;
        NoticeDiv.html(html);
    });

    $(document).on('click', '.notification-item', function() {
        var title = $(this).data('title');
        var content = $(this).data('content');
        var time = $(this).data('time');
        var NoticeDiv = $('#Notice');
        NoticeDiv.html('');
        $('#NotiContainer').addClass('hidden');
        var html = `<div id="preview-modal" role="dialog"
                        class="fixed inset-0 flex items-center z-10 justify-center bg-black bg-opacity-50 previewmodal">
                        <div class="w-full max-w-md h-96 rounded-2xl bg-white overflow-hidden px-5 modal-content">
                            <div class="flex pt-8 pb-1 border-b-2 justify-center items-center">
                                <h2 class="text-lg text-c-black font-medium">${title}</h2>
                            </div>
                            <div class="py-2 max-h-72 overflow-y-auto">
                                <p>${content}</p>
                                <p>Date : ${moment(time).format('YYYY-MM-DD')}</p>
                                <p>Time : ${moment(time).format('H:mm:ss')}</p>
                            </div>
                        </div>
                    </div>`;
        NoticeDiv.html(html);
    });
</script>
