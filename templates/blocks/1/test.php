<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery UI Dialog - Modal form</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            label, input { display:block; }
            input.text { margin-bottom:12px; width:95%; padding: .4em; }
            fieldset { padding:0; border:0; margin-top:25px; }
            h1 { font-size: 1.2em; margin: .6em 0; }
            div#users-contain { width: 350px; margin: 20px 0; }
            div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
            div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
            .ui-dialog .ui-state-error { padding: .3em; }
            .validateTips { border: 1px solid transparent; padding: 0.3em; }
        </style>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {

                function addUser() {
                    var valid = true;
                    allFields.removeClass("ui-state-error");

                    valid = valid && checkLength(name, "username", 3, 16);
                    valid = valid && checkLength(email, "email", 6, 80);
                    valid = valid && checkLength(password, "password", 5, 16);

                    valid = valid && checkRegexp(name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter.");
                    valid = valid && checkRegexp(email, emailRegex, "eg. ui@jquery.com");
                    valid = valid && checkRegexp(password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9");

                    if (valid) {
                        $("#users tbody").append("<tr>" +
                                "<td>" + name.val() + "</td>" +
                                "<td>" + email.val() + "</td>" +
                                "<td>" + password.val() + "</td>" +
                                "</tr>");
                        dialog.dialog("close");
                    }
                    return valid;
                }

                dialog = $("#dialog-form").dialog({
                    autoOpen: false,
                    height: 400,
                    width: 350,
                    modal: true,
                    buttons: {
                        "Create an account": addUser,
                        Cancel: function () {
                            dialog.dialog("close");
                        }
                    },
                    close: function () {
                        form[ 0 ].reset();
                        allFields.removeClass("ui-state-error");
                    }
                });

                $("#create-user").on("click", function () {
                    
                    dialog.dialog("open");
                });
            });
        </script>
    </head>
    <body>

        <div class="demo">
            <p class="validateTips">All form fields are required.</p>
            <form>
                <fieldset>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="Jane Smith" class="text ui-widget-content ui-corner-all">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="jane@smith.com" class="text ui-widget-content ui-corner-all">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="xxxxxxx" class="text ui-widget-content ui-corner-all">

                    <!-- Allow form submission with keyboard without duplicating the dialog button -->
                    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                </fieldset>
            </form>
        </div>

        <div id="dialog-form" title="Create new user">

        </div>

        <div id="create-user">
            <img src="images/phone-1.jpg" alt="" style="width: 10%; height: 10%;"/>
        </div>

    </body>
</html>