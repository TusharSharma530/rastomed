<?php

$currentPage = basename($_SERVER['PHP_SELF'], '.php');
if ($currentPage === 'page' && isset($_GET['slug'])) {
    $currentPage = trim($_GET['slug'], '/');
}

$navItems = [];
if (!isset($con)) {
    $con = mysqli_connect('localhost', 'root', '', 'rastomed');
}
if ($con) {
    $sqlNav = mysqli_query($con, "SELECT c_name, c_url, c_page FROM category WHERE c_type = '1' AND status = 1 ORDER BY `order` ASC");
    if ($sqlNav) {
        while ($row = mysqli_fetch_assoc($sqlNav)) {
            $slug = trim((string)($row['c_url'] ?? ''));
            if ($slug === '') {
                continue;
            }
            $navItems[] = [
                'label' => $row['c_name'],
                'url'   => $slug,
                'key'   => $slug,
            ];
        }
    }
}
?>

<!-- Desktop Navigation -->
<nav class="nav" aria-label="Main navigation">
  <?php foreach ($navItems as $item): ?>
    <?php if (!empty($item['hasDropdown'])): ?>
      <div class="nav__dropdown-wrapper">
        <a href="<?= $item['url'] ?>"
           class="nav__link nav__link--has-dropdown <?= $currentPage === $item['key'] ? 'nav__link--active' : '' ?>"
           aria-haspopup="true"
           aria-expanded="false">
          <?= $item['label'] ?>
          <svg class="nav__dropdown-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"/>
          </svg>
        </a>
        <div class="nav__dropdown" role="menu">
          <?php foreach ($item['dropdown'] as $dropdownItem): ?>
            <a href="<?= $dropdownItem['url'] ?>" class="nav__dropdown-link" role="menuitem">
              <span class="nav__dropdown-link-icon"><?= $dropdownItem['icon'] ?></span>
              <?= $dropdownItem['label'] ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    <?php else: ?>
      <a href="<?= $item['url'] ?>" class="nav__link <?= $currentPage === $item['key'] ? 'nav__link--active' : '' ?>">
        <?= $item['label'] ?>
      </a>
    <?php endif; ?>
  <?php endforeach; ?>
</nav>
