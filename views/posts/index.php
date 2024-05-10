<?php
echo '<ul>';
foreach ($posts as $post) {
    echo '<li>
    <a href="#">' . $post['MaSach'] . '</a>
  </li>';
}
echo '</ul>';
?>
