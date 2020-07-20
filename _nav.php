<?php
    $url = explode('/', str_replace('.php', '', $_SERVER['PHP_SELF']));
    $url = $url[2];
?>
<nav id="sidebarMenu" class="col-md-3 col-lg-1 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?=($url=='index')?'active':''?>" href="index.php">
                    <span data-feather="home">
                    </span>
                    首頁
                    <?php if($url=='index'):?>
                    <span class="sr-only">
                        (current)
                    </span>
                    <?php endif;?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($url=='hot')?'active':''?>" href="hot.php">
                    <span data-feather="search">
                    </span>
                    熱點搜尋
                    <?php if($url=='hot'):?>
                    <span class="sr-only">
                        (current)
                    </span>
                    <?php endif;?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($url=='history_hot')?'active':''?>" href="history_hot.php">
                    <span data-feather="bar-chart">
                    </span>
                    歷史熱點搜尋
                    <?php if($url=='history_hot'):?>
                    <span class="sr-only">
                        (current)
                    </span>
                    <?php endif;?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($url=='all_hot')?'active':''?>" href="all_hot.php">
                    <span data-feather="activity">
                    </span>
                    全熱點更新
                    <?php if($url=='all_hot'):?>
                    <span class="sr-only">
                        (current)
                    </span>
                    <?php endif;?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($url=='twse')?'active':''?>" href="twse.php">
                    <span data-feather="activity">
                    </span>
                    股價測試
                    <?php if($url=='twse'):?>
                    <span class="sr-only">
                        (current)
                    </span>
                    <?php endif;?>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart">
                    </span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users">
                    </span>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2">
                    </span>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers">
                    </span>
                    Integrations
                </a>
            </li> -->
        </ul>
        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center
        px-3 mt-4 mb-1 text-muted">
        <span>
        Saved reports
        </span>
        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle">
        </span>
        </a>
        </h6>
        <ul class="nav flex-column mb-2">
        <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text">
        </span>
        Current month
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text">
        </span>
        Last quarter
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text">
        </span>
        Social engagement
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">
        <span data-feather="file-text">
        </span>
        Year-end sale
        </a>
        </li>
        </ul> -->
    </div>
</nav>