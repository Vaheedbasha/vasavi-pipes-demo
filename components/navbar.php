<?php
/**
 * Navigation Bar Component
 * vasavi-pipes / components/navbar.php
 */
?>
<nav class="site-nav" id="siteNav" aria-label="Primary Navigation">
    <ul class="nav-list">
        <?php foreach ($nav_items as $item): ?>
            <li class="nav-item">
                <a href="<?= htmlspecialchars($item['url']) ?>" class="nav-link">
                    <?= htmlspecialchars($item['name']) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
