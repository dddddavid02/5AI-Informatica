<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/css/uikit.min.css"/>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <form method="POST" action="<?= Url::toHome() ?>">
            <select class="uk-select">
                <option></option>
                <option></option>
            </select>
            <textarea class="uk-textarea"></textarea>
            <input class="uk-input"></input>
            <input class="uk-radio" type="radio">
            <input class="uk-checkbox" type="checkbox">
            <input class="uk-range" type="range">
        </form>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit.min.js" 
                integrity="sha512-OZ9Sq7ecGckkqgxa8t/415BRNoz2GIInOsu8Qjj99r9IlBCq2XJlm9T9z//D4W1lrl+xCdXzq0EYfMo8DZJ+KA==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.9/js/uikit-icons.min.js" 
                integrity="sha512-hcz3GoZLfjU/z1OyArGvM1dVgrzpWcU3jnYaC6klc2gdy9HxrFkmoWmcUYbraeS+V/GWSgfv6upr9ff4RVyQPw==" crossorigin="anonymous"></script>
    </body>
</html>