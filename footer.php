<footer class="blog-footer">
    <div class="inner">
        <div class="footer-content">
            <img src="<?php echo get_theme_file_uri('/images/SVG/footerIcon.svg'); ?>" alt="">
            <nav>
                <?php if (is_front_page() || is_archive() || is_search()): ?>
                    <ul id="page-link">
                        <li><a href="#area-1">blog</a></li>
                        <li><a href="#area-2">category</a></li>
                        <li><a href="#area-3">profile</a></li>
                    </ul>
                <?php elseif (is_single()): ?>
                    <ul id="page-link">
                        <li><a href="<?php echo home_url('/'); ?>#area-1">blog</a></li>
                        <li><a href="#area-2">category</a></li>
                        <li><a href="#area-3">profile</a></li>
                    </ul>
                <?php else: ?>
                    <ul id="page-link">
                        <li><a href="<?php echo home_url('/'); ?>#area-1">blog</a></li>
                        <li><a href="<?php echo home_url('/'); ?>#area-2">category</a></li>
                        <li><a href="<?php echo home_url('/'); ?>#area-3">profile</a></li>
                    </ul>

                <?php endif; ?>
            </nav>
        </div>
        <small>&copy;2024 hayato morimo</small>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>