<?php
    include("config.php");
    if(isset($_GET['date']) && !empty($_GET['date']))
    {
        $date = explode('/', $_GET['date']);
        $date = $date[2].'-'.$date[0].'-'.$date[1];
    }
    if(!file_exists($filepath))
    {
        $data = '';
    }
    else
    {
        $data = json_decode(file_get_contents($filepath),true);
    }
?>
<?php include( "_header.php")?>
<style type="text/css">
    .news {
        font-size: 16px;
        font-weight: bold;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <?php include( "_nav.php")?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-11 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">
                    歷史熱點搜尋
                </h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input id="datepicker" name="date" placeholder="<?=$date?>">
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
                    <!-- <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            Share
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">
                            Export
                        </button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar">
                        </span>
                        This week
                    </button> -->
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
                            <tr>
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
                        <!-- <tr>
                            <td>
                                1,002
                            </td>
                            <td>
                                amet
                            </td>
                            <td>
                                consectetur
                            </td>
                            <td>
                                adipiscing
                            </td>
                            <td>
                                elit
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,003
                            </td>
                            <td>
                                Integer
                            </td>
                            <td>
                                nec
                            </td>
                            <td>
                                odio
                            </td>
                            <td>
                                Praesent
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,003
                            </td>
                            <td>
                                libero
                            </td>
                            <td>
                                Sed
                            </td>
                            <td>
                                cursus
                            </td>
                            <td>
                                ante
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,004
                            </td>
                            <td>
                                dapibus
                            </td>
                            <td>
                                diam
                            </td>
                            <td>
                                Sed
                            </td>
                            <td>
                                nisi
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,005
                            </td>
                            <td>
                                Nulla
                            </td>
                            <td>
                                quis
                            </td>
                            <td>
                                sem
                            </td>
                            <td>
                                at
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,006
                            </td>
                            <td>
                                nibh
                            </td>
                            <td>
                                elementum
                            </td>
                            <td>
                                imperdiet
                            </td>
                            <td>
                                Duis
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,007
                            </td>
                            <td>
                                sagittis
                            </td>
                            <td>
                                ipsum
                            </td>
                            <td>
                                Praesent
                            </td>
                            <td>
                                mauris
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,008
                            </td>
                            <td>
                                Fusce
                            </td>
                            <td>
                                nec
                            </td>
                            <td>
                                tellus
                            </td>
                            <td>
                                sed
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,009
                            </td>
                            <td>
                                augue
                            </td>
                            <td>
                                semper
                            </td>
                            <td>
                                porta
                            </td>
                            <td>
                                Mauris
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,010
                            </td>
                            <td>
                                massa
                            </td>
                            <td>
                                Vestibulum
                            </td>
                            <td>
                                lacinia
                            </td>
                            <td>
                                arcu
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,011
                            </td>
                            <td>
                                eget
                            </td>
                            <td>
                                nulla
                            </td>
                            <td>
                                Class
                            </td>
                            <td>
                                aptent
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,012
                            </td>
                            <td>
                                taciti
                            </td>
                            <td>
                                sociosqu
                            </td>
                            <td>
                                ad
                            </td>
                            <td>
                                litora
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,013
                            </td>
                            <td>
                                torquent
                            </td>
                            <td>
                                per
                            </td>
                            <td>
                                conubia
                            </td>
                            <td>
                                nostra
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,014
                            </td>
                            <td>
                                per
                            </td>
                            <td>
                                inceptos
                            </td>
                            <td>
                                himenaeos
                            </td>
                            <td>
                                Curabitur
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1,015
                            </td>
                            <td>
                                sodales
                            </td>
                            <td>
                                ligula
                            </td>
                            <td>
                                in
                            </td>
                            <td>
                                libero
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<?php include( "_footer.php")?>