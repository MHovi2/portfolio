<!-- General CSS Files -->
<link rel="stylesheet" href="assets/backend/css/app.min.css">
<!-- Template CSS -->
<link rel="stylesheet" href="assets/backend/css/style.css">
<link rel="stylesheet" href="assets/backend/css/components.css">
<!-- Custom style CSS -->
<link rel="stylesheet" href="assets/backend/css/custom.css">
<link rel='shortcut icon' type='image/x-icon' href='assets/backend/img/favicon.ico' />



@switch(Request::segment('1'))
    @case('home')

        <link rel="stylesheet" href="assets/backend/bundles/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/theme/duotone-dark.css">
        <link rel="stylesheet" href="assets/backend/bundles/jquery-selectric/selectric.css">
        @break
    @case('expedu')

        <link rel="stylesheet" href="assets/backend/bundles/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/theme/duotone-dark.css">
        <link rel="stylesheet" href="assets/backend/bundles/jquery-selectric/selectric.css">
        @break

    @case('projects')

        <link rel="stylesheet" href="assets/backend/bundles/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/theme/duotone-dark.css">
        <link rel="stylesheet" href="assets/backend/bundles/jquery-selectric/selectric.css">
        @break
    @case('contact-details')

        <link rel="stylesheet" href="assets/backend/bundles/summernote/summernote-bs4.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="assets/backend/bundles/codemirror/theme/duotone-dark.css">
        <link rel="stylesheet" href="assets/backend/bundles/jquery-selectric/selectric.css">
        @break
    @case('dashboad')

        @break
    @default

    main page

@endswitch
