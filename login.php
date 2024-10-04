<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style data-tag="reset-style-sheet">
        html {
            line-height: 1.15;
        }

        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
        }

        p,
        li,
        ul,
        pre,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        blockquote,
        figcaption {
            margin: 0;
            padding: 0;
        }

        button {
            background-color: transparent;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearanc: button;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focus,
        [type="button"]:-moz-focus,
        [type="reset"]:-moz-focus,
        [type="submit"]:-moz-focus {
            outline: 1px dotted ButtonText;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        input {
            padding: 2px 4px;
        }

        img {
            display: block;
        }

        html {
            scroll-behavior: smooth
        }
    </style>
    <style data-tag="default-style-sheet">
        html {
            font-family: Inter;
            font-size: 16px;
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.15;
            color: var(--dl-color-theme-neutral-dark);
            background: var(--dl-color-theme-neutral-light);

            fill: var(--dl-color-theme-neutral-dark);
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/animate.css@4.1.1/animate.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" data-tag="font" />
    <link rel="stylesheet" href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Log In | Blogging site</title>
</head>

<body>
    <sign-in1-wrapper class="sign-in1-wrapper">
        <!--SignIn1 component-->
        <div class="sign-in1-container1 thq-section-padding">
            <div class="sign-in1-max-width thq-section-max-width">
                <div class="sign-in1-form-root">
                    <div class="sign-in1-form1">
                        <div class="sign-in1-title-root">
                            <h2>
                                <fragment class="home-fragment216">
                                    <span class="home-text218 thq-heading-2">
                                        Log In!
                                    </span>
                                </fragment>
                            </h2>
                            <div class="sign-in1-have-an-account-login"></div>
                        </div>
                        <div id="error-message">
                            <?php if (isset($_SESSION["message"])) { ?>
                                <p class="error-message"><?php echo $_SESSION["message"]; ?></p>
                                <?php unset($_SESSION["message"]); ?> <!-- clear the message -->
                            <?php } ?>
                        </div>
                        <form action="login_code.php" class="sign-in1-form2" method="POST">
                            <div class="sign-in1-email">
                                <label for="thq-sign-in-1-email" class="thq-body-large">
                                    Email
                                </label>
                                <input type="text" id="thq-sign-in-1-email" placeholder="Email"
                                    class="sign-in1-textinput1 thq-input thq-body-large" name="email"/>
                            </div>
                            <div class="sign-in1-password">
                                <div class="sign-in1-container2">
                                    <label for="thq-sign-in-1-password" class="thq-body-large">
                                        Password
                                    </label>
                                    <div class="sign-in1-hide-password">
                                        <svg viewBox="0 0 1024 1024" class="sign-in1-icon1">
                                            <path
                                                d="M317.143 762.857l44.571-80.571c-66.286-48-105.714-125.143-105.714-206.857 0-45.143 12-89.714 34.857-128.571-89.143 45.714-163.429 117.714-217.714 201.714 59.429 92 143.429 169.143 244 214.286zM539.429 329.143c0-14.857-12.571-27.429-27.429-27.429-95.429 0-173.714 78.286-173.714 173.714 0 14.857 12.571 27.429 27.429 27.429s27.429-12.571 27.429-27.429c0-65.714 53.714-118.857 118.857-118.857 14.857 0 27.429-12.571 27.429-27.429zM746.857 220c0 1.143 0 4-0.571 5.143-120.571 215.429-240 432-360.571 647.429l-28 50.857c-3.429 5.714-9.714 9.143-16 9.143-10.286 0-64.571-33.143-76.571-40-5.714-3.429-9.143-9.143-9.143-16 0-9.143 19.429-40 25.143-49.714-110.857-50.286-204-136-269.714-238.857-7.429-11.429-11.429-25.143-11.429-39.429 0-13.714 4-28 11.429-39.429 113.143-173.714 289.714-289.714 500.571-289.714 34.286 0 69.143 3.429 102.857 9.714l30.857-55.429c3.429-5.714 9.143-9.143 16-9.143 10.286 0 64 33.143 76 40 5.714 3.429 9.143 9.143 9.143 15.429zM768 475.429c0 106.286-65.714 201.143-164.571 238.857l160-286.857c2.857 16 4.571 32 4.571 48zM1024 548.571c0 14.857-4 26.857-11.429 39.429-17.714 29.143-40 57.143-62.286 82.857-112 128.571-266.286 206.857-438.286 206.857l42.286-75.429c166.286-14.286 307.429-115.429 396.571-253.714-42.286-65.714-96.571-123.429-161.143-168l36-64c70.857 47.429 142.286 118.857 186.857 192.571 7.429 12.571 11.429 24.571 11.429 39.429z">
                                            </path>
                                        </svg>
                                        <span class="thq-body-small">Hide</span>
                                    </div>
                                </div>
                                <input type="password" id="thq-sign-in-1-password"
                                    placeholder="Password" class="sign-in1-textinput2 thq-input thq-body-large" name="password"/>
                            </div>
                            <div class="sign-in1-container3">
                            <div class="sign-in1-container4">
                                <button type="submit" class="sign-in1-button1 thq-button-filled" name="login_btn">
                                    <span>
                                        <fragment class="home-fragment218">
                                            <span class="home-text220 thq-body-small">
                                                Login here
                                            </span>
                                        </fragment>
                                    </span>
                                </button>
                            </div>
                            <div class="sign-in1-container5">
                                <a href="" target="_blank" rel="noreferrer noopener"
                                    class="sign-in1-link1 thq-body-small">
                                    Issues with Sign in
                                </a>
                                <a href="" target="_blank" rel="noreferrer noopener"
                                    class="sign-in1-link2 thq-body-small">
                                    Forgot password
                                </a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </sign-in1-wrapper>
    <script>
        window.onload = function() {
                var successMessage = '<?php echo isset($_GET["message"]) ? $_GET["message"] : ""; ?>';
                if (successMessage) {
                    document.getElementById('success-message').innerText = successMessage;
                }
        };
    </script>
</body>

</html>