<?php
    include("config.php");
    $lang = '';
    foreach ($lang_Arr as $k => $v)
    {
        $lang = $lang . $k . ',';
    }
    $lang = substr($lang, 0, -1);
    exec("C:\Users\User_\AppData\Local\Programs\Python\Python38-32\python.exe C:\wamp64\www\jsbot\python\google_trends.py $lang");
?>
<?php include( "_header.php")?>
<div class="container-fluid">
    <div class="row">
        <?php include( "_nav.php")?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">
                    全熱點更新完成!
                </h1>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include( "_footer.php")?>