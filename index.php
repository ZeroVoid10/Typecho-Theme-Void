<!-- Include header -->
<?php $this->need('header.php'); ?>

    <!-- Wallpaper -->
    <div class="wallpaper"
        <?php if (!empty($this->options->bg_url)): ?>
            style="background-image: url(<?php $this->options->themeUrl($this->options->bg_url); ?>)"
        <?php else: ?>
            style="background-image: url(<?php $this->options->themeUrl('img/bg_pic.jpg'); ?>)"
        <?php endif; ?>>
    </div>

    <!-- Main Body -->
    <div class="app">
        <!-- header -->
        <div class="app-header">
            <div class="bg-black navbar-header">
                <a href="/" class="navbar-brand">
                    <img src="<?php $this->options->themeUrl('img/my-long-logo.png') ?>" alt="logo">
                </a>
            </div>
            <div class="navbar bg-black">
                <form class="navbar-form">
                    <div class="bg-pure-white rounded input-group">
                        <input type="search" class="transparent padder form-control navbar-search rounded" placeholder="搜索你想要的内容..." id="search_input">
                        <span id="search_submit" class="transparent input-group-btn">
                            <button class="transparent btn btn-sm">
                                <span>
                                <span><svg t="1581598687040" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1756" width="16" height="16"><path d="M400.696889 801.393778A400.668444 400.668444 0 1 1 400.696889 0a400.668444 400.668444 0 0 1 0 801.393778z m0-89.031111a311.637333 311.637333 0 1 0 0-623.331556 311.637333 311.637333 0 0 0 0 623.331556z" fill="#2c2c2c" p-id="1757"></path><path d="M667.904 601.998222l314.766222 314.823111-62.919111 62.976-314.823111-314.823111z" fill="#2c2c2c" p-id="1758"></path></svg></span>
                                </span>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-right">
                    <li class="drowdown">
                        <a href="">
                        <svg t="1581673280610" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="11780" width="16" height="16"><path d="M0 484.473118l1024 0 0 55.053763L0 539.526882 0 484.473118z" p-id="11781"></path><path d="M484.473118 0l55.053763 0 0 1024-55.053763 0L484.473118 0z" p-id="11782"></path></svg>
                        </a>
                    </li>
                    <li class="drowdown">
                        <a href="">
                        <svg t="1581672480337" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="7707" width="16" height="16"><path d="M881.066667 140.8c14.933333 2.133333 42.666667 32 44.8 44.8v524.8c-2.133333 12.8-29.866667 42.666667-44.8 44.8H637.866667l-17.066667 17.066667-108.8 108.8-96-106.666667-17.066667-19.2H138.666667c-14.933333-2.133333-42.666667-32-44.8-44.8V185.6c2.133333-12.8 29.866667-42.666667 44.8-44.8h742.4m2.133333-55.466667H140.8C100.266667 85.333333 42.666667 142.933333 42.666667 185.6v524.8C42.666667 750.933333 100.266667 810.666667 140.8 810.666667h234.666667l136.533333 149.333333 149.333333-149.333333h219.733334c40.533333 0 98.133333-57.6 98.133333-100.266667V185.6c2.133333-42.666667-55.466667-100.266667-96-100.266667z" p-id="7708"></path><path d="M251.733333 386.133333c-34.133333 0-61.866667 27.733333-61.866666 61.866667 0 34.133333 27.733333 61.866667 61.866666 61.866667s61.866667-27.733333 61.866667-61.866667c0-34.133333-27.733333-61.866667-61.866667-61.866667zM524.8 386.133333c-34.133333 0-61.866667 27.733333-61.866667 61.866667 0 34.133333 27.733333 61.866667 61.866667 61.866667 34.133333 0 61.866667-27.733333 61.866667-61.866667 0-34.133333-27.733333-61.866667-61.866667-61.866667zM795.733333 386.133333c-34.133333 0-61.866667 27.733333-61.866666 61.866667 0 34.133333 27.733333 61.866667 61.866666 61.866667 34.133333 0 61.866667-27.733333 61.866667-61.866667 0-34.133333-27.733333-61.866667-61.866667-61.866667z" p-id="7709"></path></svg>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="">
                        <svg t="1581669254554" class="icon" viewBox="0 0 1024 1024" stroke="currentColor" stroke-width="2" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6854" width="16" height="16"><path d="M975.626636 981.454752c0 23.312464-18.649972 41.962436-41.962436 41.962436s-41.962436-18.649972-41.962436-41.962436l-0.582811-4.079681c0-1.748435 0.582812-3.49687 0.582811-4.662493-26.226522-183.585657-183.585657-318.797951-375.913489-321.129197h-9.324985c-189.996585 2.331246-346.190097 134.04667-374.747866 314.71827 1.165623 3.49687 1.748435 6.993739 1.748435 11.07342l0.582811 4.079681c0 23.312464-19.232783 42.545248-42.545247 42.545248s-42.545248-19.232783-42.545248-42.545248v-0.582811h-0.582811c0-1.165623 0.582812-2.331246 0.582811-3.49687 0-3.49687 0.582812-6.993739 1.165624-9.907797 21.56403-169.598179 135.212294-306.558907 290.240182-365.42288C250.608993 544.346044 191.74502 442.354013 191.74502 326.374502c0-180.671599 139.874787-326.374502 319.963574-326.374502s319.963574 145.702903 319.963574 325.79169c0 116.562322-58.863973 217.971542-148.61696 275.669892 153.279454 58.281161 266.344906 194.076266 289.65737 361.92601 1.748435 4.662493 2.914058 9.324986 2.914058 13.987479v4.079681zM758.237906 325.79169c0-136.377917-110.151394-246.529311-246.529312-246.529311S265.179283 189.413773 265.179283 325.79169s110.151394 246.529311 246.529311 246.529312c135.795105 0 246.529311-110.151394 246.529312-246.529312z" p-id="6855"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- asider -->
        <div class="app-asider bg-white font-gray">
            <div class="user-panel">
                <div class="user-panel-bg">
                    <img src="<?php $this->options->themeUrl('img/bilibili-user-panel.jpg') ?>" alt="">
                </div>
                <div class="user-name"><?php $this->author(); ?></div>
                <div class="user-avatar">
                    <img src="<?php $this->options->avatarURL() ?>" alt="">
                </div>
                <div class="user-data">
                    <a href="" class="user-data-unit">
                        <p class="user-data-num">2</p>
                        <p class="user-data-text">文章</p>
                    </a>
                    <a href="" class="user-data-unit">
                        <p class="user-data-num">3</p>
                        <p class="user-data-text">日记</p>
                    </a>
                    <a href="" class="user-data-unit">
                        <p class="user-data-num">3</p>
                        <p class="user-data-text">访客</p>
                    </a>
                </div>
            </div>
            <ul class="nav">
                <div class="line"></div>
                <ls class="padder m-t m-b-sm text-muted text-xs h-w">
                    <span>导航</span>
                </ls>
                <div class="line"></div>
                <ls class="padder m-t m-b-sm text-muted text-xs h-w">
                    <span>组成</span>
                </ls>
                <div class="line"></div>
                <ls class="padder m-t m-b-sm text-muted text-xs h-w">
                    <span>联系</span>
                </ls>
            </ul>
        </div>

        <!-- content -->
        <div class="app-content">content</div>

        <!-- footer -->
        <div class="app-footer">footer</div>
    </div>

<!-- Include footer -->
<?php include('footer.php'); ?>