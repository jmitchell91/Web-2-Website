<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <link rel="stylesheet" href="header.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </HEAD>
    <BODY>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <!-- navbar items, navbar burger... -->
                    <a class="navbar-item" href="homePage.php">
                        Home
                    </a>
                    <a class="navbar-item" href="formsPage.php">
                        Forms
                    </a>
                    <a class="navbar-item" href="commissionerFeePage.php">
                        Commissioner's Fees
                    </a>
                    <a class="navbar-item" href="fiduciaryCompPage.php">
                        Fiduciary Compensation
                    </a>
                    <a class="navbar-item" href="resourcePage.php">
                        Resources
                    </a>
            </div>
        </nav>
        <div class="navbar" style="margin-left: 15%">
            <a>
                <img src="seal.png" alt="" width="225" height="150">
            </a>
            <h1>
                <br/>&nbsp;&nbsp;&nbsp;&nbsp;Commissioner of Accounts for the city of Radford
            </h1>
        </div>
        <nav class="navbar2" role="navigation" aria-label="main navigation">
            <div class="navbar-brand" style=" width: auto; margin-left: 5%; margin-right: 5%">
                <!-- navbar items, navbar burger... -->
                <a class="navbar-item" href="estatesPage.php">
                    Estates
                </a>
                <a class="navbar-item" href="trustsPage.php">
                    Trusts
                </a>
                <a class="navbar-item" href="conservatorsPage.php">
                    Conservatorships
                </a>
                <a class="navbar-item" href="guardianPage.php">
                    Guardianships
                </a>
                <a class="navbar-item" href="foreclosurePage.php">
                    Foreclosures
                </a>
            </div>
        </nav>
		<?php include "sidebar.php"; ?>
    </BODY>
</HTML>