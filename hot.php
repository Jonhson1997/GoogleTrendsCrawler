<?php
    include("config.php");
    if(!file_exists($filepath))
    {
        # 觸發python爬蟲
        exec("C:\Users\User_\AppData\Local\Programs\Python\Python38-32\python.exe C:\wamp64\www\jsbot\python\google_trends.py $lang");
    }
    else
    {
        if((time()-filemtime($filepath))/60 > 1)
        {
            # 觸發python爬蟲
            exec("C:\Users\User_\AppData\Local\Programs\Python\Python38-32\python.exe C:\wamp64\www\jsbot\python\google_trends.py $lang");
        }
    }
    $data = json_decode(file_get_contents($filepath),true);
?>
<?php include( "_header.php")?>
<div class="container-fluid">
    <div class="row">
        <?php include( "_nav.php")?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">
                    熱點搜尋
                </h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <select class="custom-select" name="lang">
                                <?php foreach($lang_Arr as $k => $v):?>
                                <option value="<?=$k?>" <?=($k == $lang)?'selected':''?>><?=$v?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">搜尋</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <h5>
                <span style="font-size: 14px">標籤：</span>
                <?php foreach($data as $k => $v):?>
                <a href="#<?=$v['title']?>"><span class="badge badge-<?=$badge[($k+1)%sizeof($badge)]?>"><?=$v['title']?></span></a>
                <?php endforeach;?>
            </h5>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                關鍵字
                            </th>
                            <th>
                                日期
                            </th>
                            <th>
                                搜尋量
                            </th>
                            <th></th>
                            <th>
                                相關新聞
                            </th>
                            <th>
                                相關新聞
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($data)):?>
                            <?php foreach($data as $key => $value):?>
                            <tr id="<?=$value['title']?>">
                                <td>
                                    <?=$value['id']?>
                                </td>
                                <td>
                                    <?=$value['title']?>
                                </td>
                                <td>
                                    <?=$value['date']?>
                                </td>
                                <td>
                                    <?=$value['rank']?>
                                </td>
                                <td>
                                    <img src="<?=$value['pic']?>">
                                </td>
                                <?php foreach($value['news'] as $k => $v):?>
                                <td>
                                    <div>
                                        <span class="news"><?=$v['title']?></span>
                                        <br />
                                        <span><?= str_replace("&nbsp;", "", $v['snippet'])?></span>
                                        <a href="<?=$v['url']?>" target="_blank">更多</a>
                                        <br />
                                        來源:<?=$v['source']?>
                                    </div>
                                </td>
                                <?php endforeach;?>
                            </tr>
                            <?php endforeach;?>
                        <?php else:?>
                            <tr>
                                <td colspan=7>
                                    暫無資料...
                                </td>
                            </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include( "_footer.php")?>