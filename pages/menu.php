<ul class="nav nav-pills">
<?php $page=$_GET['page']?$_GET['page']:1?>
    <li <?=($page==1)? 'class="active"':''?>>
        <a href="index.php?page=1">Registration</a>
    </li>
  <li <?=$page==2? 'class="active"':''?>>
    <a href="index.php?page=2">Log in</a>
  </li>
  <li <?=$page==3? 'class="active"':''?>>
    <a href="index.php?page=3">Admin</a>
  </li>
</ul>