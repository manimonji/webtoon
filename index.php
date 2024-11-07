<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1 class="title">کمیک بخوانید یا به نمایش بگذارید</h1>
        <div class="buttons">
            <a class="btn btn-priamry" href="./signup.php">ثبت نام</a>
            <a class="btn btn-secondary" href="./login.php">ورود</a>
        </div>
    </main>
</body>
<style>
    @font-face {
        font-family: vazirmatn;
        src: url("./fonts/vazirmatn.woff2");
    }
    body {
        margin: 0;
        font-family: vazirmatn;
    }
    main {
        padding: 2rem;
    }
    main > .title {
        margin: 0;
    }
    main > .buttons {
        gap: 1rem;
        margin-top: 1.5rem;
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .btn {
        padding: 0.5em 1em;
        border-radius: 0.5em;
        text-decoration: none;
    }
    .btn-priamry {
        color: white;
        background-color: #084eff;
    }
    .btn-secondary {
        color: #084eff;
        background-color: hsl(223, 100%, 92%);
    }
</style>
</html>