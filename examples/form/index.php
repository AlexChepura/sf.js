<?
$msgOpts = [
    'fieldTemplate' => '<div class="alert form-msg ${type}"><p class="msg">Custom template: ${text}</p></div>'
];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Demo example</title>
    <link rel="stylesheet" href="/dist/sf.css"/>
    <style>
        .js-sf-form {
            width: 480px;
        }
    </style>
    <script>
        function testFunction () {
            console.log(arguments);
            debugger
        }
        var sf = {
            options: {
                instances: {
                    form: {
                        messagesType: "bootstrap",
                        messages: {
                            "materialize": {
                                fieldTemplate: '<div class="alert form-msg ${type}"><p class="msg">Materialize: ${text}</p></div>',
                                template: '<div class="alert form-msg ${type}"><button class="btn-close">×</button><p class="msg">Materialize: ${text}</p></div>'
                            },
                            "bootstrap": {
                                fieldTemplate: '<div class="alert form-msg ${type}"><p class="msg">Bootstrap: ${text}</p></div>',
                                template: '<div class="alert form-msg ${type}"><button class="btn-close">×</button><p class="msg">Bootstrap: ${text}</p></div>'
                            },
                            "spiral": {

                            }
                        }
                    }
                }
            }
        }
    </script>
</head>
<body>
<div style="float: left; margin-right: 100px;">
<h1>Error form</h1>

<form class="js-sf-form" data-messages='<?= json_encode($msgOpts) ?>'  action="actionError.php">
    <label class="item-form">
        <span class="item-label">Input with error</span>
        <input type="text" name="inputError1" value="Input Value" class="item-input"/>
    </label>
    <label class="item-form">
        <span class="item-label">Correct input</span>
        <input type="text" name="inputCorrect" value="Input Value" class="item-input"/>
    </label>
    <label class="item-form">
        <span class="item-label">One more error</span>
        <input type="text" name="inputError2" value="Input Value" class="item-input"/>
    </label>
    <button>Send</button>
</form>
</div>

<div style="float: left; margin-right: 100px;">
<h1>Error form 2</h1>

<form class="js-sf-form"  action="actionError.php" data-messagesType="spiral">
    <label class="item-form">
        <span class="item-label">Input with error</span>
        <input type="text" name="inputError1" value="Input Value" class="item-input"/>
    </label>
    <label class="item-form">
        <span class="item-label">Correct input</span>
        <input type="text" name="inputCorrect" value="Input Value" class="item-input"/>
    </label>
    <label class="item-form">
        <span class="item-label">One more error</span>
        <input type="text" name="inputError2" value="Input Value" class="item-input"/>
    </label>
    <button>Send</button>
</form>
</div>

<div style="float: left;">
<h1>Success form</h1>

<form class="js-sf-form" action="actionSuccess.php" data-messagesType="materialize">
    <label class="item-form">
        <span class="item-label">Input </span>
        <input type="text" name="input1" value="Input Value" class="item-input"/>
    </label>
    <label class="item-form">
        <span class="item-label">One more input</span>
        <input type="text" name="input2" value="Input Value" class="item-input"/>
    </label>
    <label class="item-form">
        <span class="item-label">3rd input</span>
        <input type="text" name="input3" value="Input Value" class="item-input"/>
    </label>
    <button>Send</button>
</form>
</div>

<div style="float: left; margin-right: 100px;">
    <h1>Flash Info/Notice</h1>

    <form class="js-sf-form" action="flashInfo.php" data-messagesType="materialize">
        <label class="item-form">
            <span class="item-label">Input </span>
            <input type="text" name="input1" value="Input Value" class="item-input"/>
        </label>
        <label class="item-form">
            <span class="item-label">One more input</span>
            <input type="text" name="input2" value="Input Value" class="item-input"/>
        </label>
        <label class="item-form">
            <span class="item-label">3rd input</span>
            <input type="text" name="input3" value="Input Value" class="item-input"/>
        </label>
        <button>Send</button>
    </form>
</div>

<div style="float: left; margin-right: 100px;">
    <h1>Flash Debug/Success</h1>

    <form class="js-sf-form" action="flashDebug.php" data-messagesType="materialize">
        <label class="item-form">
            <span class="item-label">Input </span>
            <input type="text" name="input1" value="Input Value" class="item-input"/>
        </label>
        <label class="item-form">
            <span class="item-label">One more input</span>
            <input type="text" name="input2" value="Input Value" class="item-input"/>
        </label>
        <label class="item-form">
            <span class="item-label">3rd input</span>
            <input type="text" name="input3" value="Input Value" class="item-input"/>
        </label>
        <button>Send</button>
    </form>
</div>

<div style="float: left;">
    <h1>Flash Danger/Critical/Alert/Error/Emergency</h1>

    <form class="js-sf-form" action="flashDanger.php" data-messagesType="materialize">
        <label class="item-form">
            <span class="item-label">Input </span>
            <input type="text" name="input1" value="Input Value" class="item-input"/>
        </label>
        <label class="item-form">
            <span class="item-label">One more input</span>
            <input type="text" name="input2" value="Input Value" class="item-input"/>
        </label>
        <label class="item-form">
            <span class="item-label">3rd input</span>
            <input type="text" name="input3" value="Input Value" class="item-input"/>
        </label>
        <button>Send</button>
    </form>
</div>
<script type="application/javascript" src="../../dist/sf.js"></script>

</body>
</html>