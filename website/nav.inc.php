  <?php

// Name: Emily Morales Medina
// Date: 3/22/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu


    if (isset($_SESSION['login'])) {
    ?>
      <div class="navigation" style="float: left; height: 100%; min-width: 175px; width: auto;">
          <table width="100%" cellpadding="3">
              <?php
                echo "<td><h3>Welcome, {$_SESSION['name']}</h3></td>";
                ?>
              <tr>
                  <td><a href="index.php"><strong>Home</strong></a></td>
              </tr>
              <tr>
                  <td><strong>Skincare Types</strong></td>
              </tr>
              <tr>
                  <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listskincaretypes">
                          <strong>List Skincare Types</strong></a></td>
              </tr>
              <tr>
                  <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newskincaretype">
                          <strong>Add New Skincare Type</strong></a></td>
              </tr>
              <tr>
                  <td><strong>Skincare</strong></td>
              </tr>
              <tr>
                  <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listskincare">
                          <strong>List Skincare</strong></a></td>
              </tr>
              <tr>
                  <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newskincare">
                          <strong>Add New Skincare</strong></a></td>
              </tr>
              <tr>
                  <td>
                      <hr />
                  </td>
              </tr>
              <tr>
                  <td><a href="index.php?content=logout">
                          <strong>Logout</strong></a></td>
              </tr>
              <tr>
                  <td>&nbsp;</td>
              </tr>
              <tr>
                  <td>
                      <form action="index.php" method="post">
                          <label>Search for Skincare:</label><br>
                          <input type="text" name="skincareID" size="14" />
                          <input type="submit" value="find" />
                          <input type="hidden" name="content" value="updateskincare" />
                      </form>
                  </td>
              </tr>
              <tr>
                  <td>
                      <form action="index.php" method="post">
                          <label>Search for Skincare Type:</label><br>
                          <input type="text" name="skincareTypeID" size="14" />
                          <input type="submit" value="find" />
                          <input type="hidden" name="content" value="displayskincaretype" />
                      </form>
                  </td>
              </tr>
          </table>
      </div>
  <?php
    }
    ?>