<nav>
  <ul>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="create.php">Create</a></li>
    <li><a href="browseable-list.php">Flights</a></li>
    <li><a href="index.php">Home</a></li>
    <div class="comment">
      <li><p>
        <?php echo "<p>You are logged in as : {$_SESSION['user']}</p>"; ?>
      </p>
      </li>
    </div>
  </ul>
</nav>

<br><br><br><br><br>
