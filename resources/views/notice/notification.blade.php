@php
    $host = $_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
        $url = 'http://localhost:3000';
    } else {
        $url = 'https://node.sizaf.com';
    }
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
    socket.on('receivedfor_' + user_id, (message) => {
        var NoticeDiv = $('#Notice');
        NoticeDiv.html('');
        var html = `<div id="preview-modal" role="dialog"
                        class="fixed inset-0 flex items-center z-10 justify-center bg-black bg-opacity-50 previewmodal">
                        <div class="w-full max-w-md h-96 rounded-2xl bg-white overflow-hidden px-5 modal-content">
                            <div class="flex pt-8 pb-1 border-b-2 justify-center items-center">
                                <h2 class="text-lg text-c-black font-medium">${message.title}</h2>
                            </div>
                            <div class="py-2">
                                <p>${message.content}</p>
                                <p>Date : ${moment(message.created_at).format('YYYY-MM-DD')}</p>
                                <p>Time : ${moment(message.created_at).format('H:mm:ss')}</p>
                            </div>
                        </div>
                    </div>`;
        NoticeDiv.html(html);
    });
</script>
