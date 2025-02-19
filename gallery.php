<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Vibrant India Fair </title>
    <?php
    include "include/header.php";
    ?>
</head>

<body>

    <button
        class="gallery-show-btn"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasTabs"
        aria-controls="offcanvasTabs">
        <span>Show Gallery</span>
        <span><img src="./Assets/Image/tap.png" class="gallery-show-icon" alt="gg"></span>
    </button>

    <!-- Offcanvas Sidebar -->
    <div
        class="offcanvas offcanvas-start"
        tabindex="-1"
        id="offcanvasTabs"
        aria-labelledby="offcanvasTabsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasTabsLabel">ShowMore Gallery </h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <button
                class="gallery-canva-btn tab-link"
                onclick="openSection(event, 'section1')"
                data-bs-dismiss="offcanvas">
                July New Delhi-2023
            </button>
            <button
                class="gallery-canva-btn tab-link"
                onclick="openSection(event, 'section2')"
                data-bs-dismiss="offcanvas">
                January Mumbai-2023
            </button>
            <button
                class="gallery-canva-btn tab-link"
                onclick="openSection(event, 'section3')"
                data-bs-dismiss="offcanvas">
                July New Delhi-2022
            </button>
            <button
                class="gallery-canva-btn tab-link"
                onclick="openSection(event, 'section4')"
                data-bs-dismiss="offcanvas">
                June New Delhi-2019
            </button>
            <button
                class="gallery-canva-btn tab-link"
                onclick="openSection(event, 'section5')"
                data-bs-dismiss="offcanvas">
                June New Delhi-2018
            </button>
        </div>
    </div>

    <!-- Tab Content -->
    <div class="container">
        <div class="gallery-tab-content">
            <div id="section1" class="section_tab active">
                <div class="container">
                    <h2 class="primary-heading">July New Delhi-2023</h2>

                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi23"></div>
                </div>
            </div>
            <div id="section2" class="section_tab">
                <div class="container">
                    <h2 class="primary-heading">January Mumbai-2023</h2>

                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-mumbai23"></div>
                </div>
            </div>
            <div id="section3" class="section_tab">
                <div class="container">
                    <h2 class="primary-heading">July New Delhi-2022</h2>
                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi22"></div>
                </div>
            </div>
            <div id="section4" class="section_tab">
                <div class="container">
                    <h2 class="primary-heading">June New Delhi-2019</h2>
                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".certificate">
                                CERTIFICATE
                            </button>

                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi19"></div>
                </div>
            </div>
            <div id="section5" class="section_tab">
                <div class="container">
                    <h2 class="primary-heading">June New Delhi-2018</h2>

                    <div class="gallery-menu mt-2 mb-4">
                        <nav class="controls">
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter="all">
                                ALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".registration">
                                REGISTRATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".networking">
                                NETWORKING
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".public">
                                PUBLC VISIT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".inauguration">
                                INAUGURATION
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".product">
                                PRODUCTS
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".stall">
                                STALL
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".award">
                                AWARD NIGHT
                            </button>
                            <button
                                type="button"
                                class="gallery-tab-control outline"
                                data-filter=".certificate">
                                CERTIFICATE
                            </button>
                        </nav>
                    </div>
                    <div class="row gallery-item" id="galleryList-delhi18"></div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include "include/footer.php";
    ?>
</body>

</html>