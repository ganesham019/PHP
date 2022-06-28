<html>

<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel='stylesheet' href='./css/bootstrap.min.css'>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/media.css">
    <script src="./js/jqwery.js" charset="utf-8"></script>
    <style type="text/css">
    /* .header {
        width: 100%;
        height: 10%;
        background-color: lightgrey;
    } */

    .footer {
        width: 100%;
        height: 10%;
        background-color: green;
        position: absolute;
        bottom: 0%;
    }
    </style>
</head>

<body>

    <nav class='navbar navbar-expand-lg  sticky-top shadow-sm'>
        <div class='container'>
            <a class='navbar-brand' href='#'>Logo</a>
            <button class='btn btn-dark navbar-toggler border-none outline-none px-2' type='button'
                data-bs-toggle='offcanvas' data-bs-target='#offcanvasExample' aria-controls='offcanvasExample'>
                <img style='width: 30px' src='./text-center.svg' alt='menu icon'>
            </button>
            <div class='offcanvas offcanvas-start-lg ' tabindex='-1' id='offcanvasExample'
                aria-labelledby='offcanvasExampleLabel'>
                <div class='offcanvas-header d-flex d-lg-none'>
                    <h5 class='offcanvas-title ' id='offcanvasExampleLabel'>Navbar</h5>
                    <a href='javascript:void(0) ' class='text-reset p-0 ' data-bs-dismiss='offcanvas'
                        aria-label='close'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#000'
                            class='bi bi-x-circle' viewBox='0 0 16 16'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z' />
                            <path
                                d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z' />
                        </svg>

                    </a>
                </div>
                <div class='offcanvas-body  p-2'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <img src="./icons/icon1.png" alt="" height="24" width="24" />
                            <a class='nav-link active' aria-current='page' href='./index.php'>Home</a>
                        </li>
                        <li class='nav-item '>
                            <img src="./icons/icon2.png" alt="" height="24" width="24">
                            <a class='nav-link' href='./about.html'>About</a>
                        </li>
                        <li class='nav-item'>
                            <img src="./icons/icon3.png" alt="" height="26" width="32">
                            <a class='nav-link ' href='./category.html'>category</a>
                        </li>
                        <li class='nav-item'>
                            <img src="./icons/icon4.png" alt="" height="24" width="34">
                            <a class='nav-link ' href='./contact.html'>Contact</a>
                        </li>
                        <li class='nav-item'>
                            <img src="./icons/icon5.png" alt="" height="24" width="24">
                            <a class='nav-link' href='./blog.php'>Blog</a>
                        </li>
                        <li class='nav-item'>
                            <img src="./icons/icon6.png" alt="" height="24" width="24">
                            <a class='nav-link ' href='./contact.html'>Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>