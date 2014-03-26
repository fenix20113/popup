<html>
<head>
    <meta charset="utf-8">
    <title>popup</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/selectbox.css">
    <link rel="stylesheet" href="css/checkbox.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    <script src="js/popup.js"></script>
    <script src="js/jquery.selectbox.min.js"></script>
    <script src="js/jquery.checkbox.min.js"></script>
    <script type="text/javascript">



        (function($) {
            $(function() {

                $('select').selectbox();

            })
        })(jQuery)

</script>
    <script type="text/javascript">
        (function($) {
            $(function() {

                $('input.styled').checkbox();

            })
        })(jQuery)
    </script>



</head>
<body style="background: #007ed8">

<a class="popup-link-1" href="">Click me</a>

<div class="popup-box" id="popup-box-1">
    <div class="close">X</div>
    <div class="top">
        <h2>Обратная связь</h2>
    </div>
    <div class="bottom">
        <form name="feedbackForm" id="feedbackForm" action="#" method="post" class="niceform">
            <label>Тема обращения:</label>

            <div class="clear"></div>
            <select name="Subj" class="select1">
                <option value="1">Выберите из списка 1</option>
                <option value="2">Выберите из списка 2</option>
                <option value="3">Выберите из списка 3</option>
            </select>

            <div class="clear"></div>
            <label>Текст обращения:</label>

            <div class="clear"></div>

            <textarea name="feedback"></textarea>

            <div class="clear"></div>
            <label>Как с вами связаться:</label>

            <div class="clear"></div>
            <input type="text" name="contact">
            <div class="clear"></div>
            <input type="checkbox" name="check" class="styled" id="checkbox">
            <label>Я хочу получать новости на почту</label>
            <div class="clear"></div>

            <input type="submit" value="Отправить" id="subm"> <input type="button" value="Очистить" id="clear">
        </form>
    </div>
</div

</body>

</html>