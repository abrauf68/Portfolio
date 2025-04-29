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

<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/js/extended-ui-sweetalert2.js') }}"></script>
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
<script>
    @if (Session::has('success'))
        Swal.fire({
            title: '{{__("Success!")}}',
            text: "{{ __(Session::get('success')) }}",
            icon: 'success',
            timer: 2000,
            showConfirmButton: false
        });
    @endif

    @if (Session::has('message'))
        Swal.fire({
            title: '{{__("Info!")}}',
            text: "{{ __(Session::get('message')) }}",
            icon: 'info',
            timer: 2000,
            showConfirmButton: false
        });
    @endif

    @if (Session::has('error'))
        Swal.fire({
            title: '{{__("Error!")}}',
            text: "{{ __(Session::get('error')) }}",
            icon: 'error',
            timer: 2000,
            showConfirmButton: false
        });
    @endif

    // Delete Confirmation
    $(document).on('click', '.delete_confirmation', function(event) {
        event.preventDefault();
        var form = $(this).closest("form");
        Swal.fire({
            title: '{{__("Are you sure?")}}',
            text: '{{__("You would not be able to revert this!")}}',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: '{{__("Cancel")}}',
            confirmButtonText: '{{__("Yes, delete it!")}}',
            customClass: {
                confirmButton: 'btn btn-primary me-3 waves-effect waves-light',
                cancelButton: 'btn btn-label-secondary waves-effect waves-light'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.isConfirmed) {
                form.submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire({
                    title: "{{ __('Your data is safe!') }}",
                    icon: "info",
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        });
    });
</script>
