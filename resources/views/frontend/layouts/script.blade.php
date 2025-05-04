<!-- Core JS -->
<script src="{{ asset('frontAssets/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('frontAssets/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/vendor/waypoints.min.js') }}"></script>

<script src="{{ asset('frontAssets/js/plugins/odometer.js') }}"></script>
<script src="{{ asset('frontAssets/js/vendor/appear.js') }}"></script>


<script src="{{ asset('frontAssets/js/vendor/jquery-one-page-nav.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/swiper.js') }}"></script>

<script src="{{ asset('frontAssets/js/plugins/gsap.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/splittext.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/scrolltigger.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/scrolltoplugins.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/smoothscroll.js') }}"></script>
<!-- bootstrap Js-->
<script src="{{ asset('frontAssets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/vendor/waw.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/isotop.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/animation.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/contact.form.js') }}"></script>
<script src="{{ asset('frontAssets/js/vendor/backtop.js') }}"></script>
<script src="{{ asset('frontAssets/js/plugins/text-type.js') }}"></script>
<!-- custom Js -->
<script src="{{ asset('frontAssets/js/main.js') }}"></script>

@yield('script')

<script>
    $(document).ready(function() {
        $(document).on('click', '.copy-icon', function() {
            var textToCopy = $(this).prev().text().trim(); // Get text from previous element

            // Create a temporary input element
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(textToCopy).select();
            document.execCommand('copy');
            tempInput.remove();

            var $this = $(this);
            var tooltipInstance = bootstrap.Tooltip.getInstance(this); // Get existing tooltip instance

            if (tooltipInstance) {
                tooltipInstance.dispose(); // Destroy tooltip to update title
            }

            $this.attr('title', '{{__("Copied")}}'); // Update title
            $this.tooltip({
                trigger: 'manual'
            }).tooltip('show'); // Show updated tooltip

            // Reset tooltip after 1.5 seconds
            setTimeout(() => {
                $this.tooltip('hide').attr('title', '{{__("Copy")}}').tooltip();
            }, 1500);
        });
    });
</script>

<!-- jQuery (required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    toastr.options = {
        "closeButton": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "2000"
    };
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if(session('message'))
        toastr.info("{{ session('message') }}");
    @endif

    @if ($errors->any())
        toastr.error("{{ $errors->first() }}");
    @endif
</script>
