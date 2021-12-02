<div class="sidebar-main share-sidebar" id="share">
    <a href="#" class="close-sidebar">
        <svg fill="currentColor" focusable="false" height="20px" viewBox="0 0 24 24" width="24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Close</title>
            <path
                d="M10.586 12L3.793 5.206a1 1 0 1 1 1.413-1.413L12 10.586l6.794-6.793a1 1 0 1 1 1.413 1.413L13.414 12l6.793 6.794a1 1 0 1 1-1.413 1.413L12 13.414l-6.794 6.793a1 1 0 1 1-1.413-1.413L10.586 12z">
            </path>
        </svg>
    </a>


    <div class="sidebar-scroller">
        <h3>Share this accommodation with friends and family</h3>
        <nav class="nav flex-column nav-line">
           <a class="nav-link media-s" href="https://www.facebook.com/sharer/sharer.php?u= {{  Request::fullUrl() }}" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
            </a>
            <a  class="nav-link media-s" href="https://twitter.com/intent/tweet?url={{ Request::fullUrl() }}" target="_blank">
                <i class="fa fa-twitter" aria-hidden="true"></i>Twitter
            </a>
            <a class="nav-link media-s copy_text" href="{{  Request::fullUrl() }}"><i class="fa fa-link" aria-hidden="true" ></i> Copy Link</a>

            <a class="nav-link media-s" href="mailto:{{ Request::fullUrl() }}?subject=Share email link&amp;body={{  Request::fullUrl() }}"
            title="Share by Email" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i>Email</a>

            <a class="nav-link media-s" href="https://api.whatsapp.com/send?text=www.google.com" data-action="share/whatsapp/share"><i class="fa fa-whatsapp" aria-hidden="true" target="_blank"></i> Whatsapp</a>
            {{-- <a class="nav-link media-s" href="#"><i class="fa fa-commenting" aria-hidden="true"></i> SMS</a> --}}
        </nav>
    </div>
</div>

<script>
    $('.copy_text').click(function (e) {
   e.preventDefault();
   var copyText = $(this).attr('href');

   document.addEventListener('copy', function(e) {
      e.clipboardData.setData('text/plain', copyText);
      e.preventDefault();
   }, true);

   document.execCommand('copy');  
   console.log('copied text : ', copyText);
   // alert('copied text: ' + copyText); 
 });
</script>
