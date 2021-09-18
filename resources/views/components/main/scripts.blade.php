<script src="{{ admin("assets/vendor/jquery/dist/jquery.min.js") }}"></script>
<script src="{{ admin("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ admin("assets/vendor/js-cookie/js.cookie.js") }}"></script>
<script src="{{ admin("assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js") }}"></script>
<script src="{{ admin("assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js") }}"></script>
<!-- Optional JS -->
<script src="{{ admin("assets/vendor/chart.js/dist/Chart.min.js") }}"></script>
<script src="{{ admin("assets/vendor/chart.js/dist/Chart.extension.js") }}"></script>
<script src="{{ admin("assets/vendor/sweetalert2/dist/sweetalert2.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net/js/jquery.dataTables.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
<script src="{{ admin("assets/vendor/datatables.net-select/js/dataTables.select.min.js") }}"></script>
<script src="{{ admin("assets/vendor/nouislider/distribute/nouislider.min.js") }}"></script>
<!-- Argon JS -->
<script src="{{ admin("assets/js/argon.js?v=1.1.0") }}"></script>

<script type="application/javascript">
    function danger(message) {
        swal({
            title: 'Warning!',
            text: message,
            type: 'warning',
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-warning'
        })
    }

    function simplePrompt(title, callback) {
        swal({
            title: title,
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-danger',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonClass: 'btn btn-secondary'
        }).then(result => {
            if (result.value) callback();
        })
    }

    function success(message) {
        swal({
            title: 'Success!',
            text: message,
            type: 'success',
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-success'
        })
    }
</script>
