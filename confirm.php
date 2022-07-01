<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="" />
    <title>送信確認フォーム</title>
    <!-- PHP -->
    <?php
        session_start();
        $_SESSION['form_name'] = $_POST['form_name'];
        $_SESSION['form_mail'] = $_POST['form_mail'];
        $_SESSION['form_naiyou'] = $_POST['form_naiyou'];
    ?>
</head>
<body>
    <div id="style">確認画面</div>
    <div class="container">
        <div class="row">
            <div class="conrtainer left">            
                <div class="col-xs-10 col-xs-offset-1" style="margin-top:30px; margin-bottom:30px;">
                    お問い合わせありがとうございます。<br>
                    この内容で送信いたします。<br>
                    <table class="table" style="table-layout:fixed;">
                        <thead><th style="width:200px;"></th><th></th></thead>
                        <tbody>
                            <tr>
                                <td>[お名前]:</td>
                                <td>
                                    <?php echo $_SESSION['form_name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[メールアドレス]:</td>
                                <td>
                                    <?php echo $_SESSION['form_mail']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>[お問い合わせ内容]:</td>
                                <td>
                                    <?php echo nl2br($_SESSION['form_naiyou']); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="sendMail.php" method="Post">
                        <button type="submit" class="btn btn-success btn-lg btn-block">送信</button>
                    </form>
                    <br>
                    <form action="edit.php" method="Post">
                        <button type="submit" class="btn btn-warning btn-lg btn-block">編集</button>
                    </form>
                </div>  
            </div>
    </div>
</body>
</html>