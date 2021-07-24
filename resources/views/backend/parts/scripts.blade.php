<!-- General JS Scripts -->
<script src="assets/backend/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="assets/backend/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/backend/js/page/index.js"></script>
<!-- Template JS File -->
<script src="assets/backend/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/backend/js/custom.js"></script>

@switch(Request::segment('1'))

    @case('home' || 'expedu' || 'projects' || 'contact-details' || 'blog')
        <!-- Page Specific JS File -->
        <!-- JS Libraies -->
        <script src="assets/backend/bundles/summernote/summernote-bs4.js"></script>
        <script src="assets/backend/bundles/codemirror/lib/codemirror.js"></script>
        <script src="assets/backend/bundles/codemirror/mode/javascript/javascript.js"></script>
        <script src="assets/backend/bundles/jquery-selectric/jquery.selectric.min.js"></script>
        <script src="assets/backend/bundles/ckeditor/ckeditor.js"></script>

        @break;

    @default

@endswitch


<script>
    $('input[type=range]').on('input', function() {

        var show = $(this).attr('id');
        var show = "#" + show + "_show";
        var val  = $(this).val() + " %";
        $(show).html(val);

    })

</script>
