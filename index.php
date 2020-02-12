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
    <div class="app">test</div>

<!-- Include footer -->
<?php include('footer.php'); ?>