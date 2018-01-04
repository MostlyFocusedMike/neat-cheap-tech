<div id="sort">
  <h3 id="mini-logo">Sort items by:</h3>
  <form action="index.php" method="GET">
    <select name="sort">
      <option value="p_l_h"<?php if ($_GET['sort'] == 'p_l_h') echo ' selected="selected"'; ?>>
        Price, Low to High
      </option>
      <option value="p_h_l" <?php if ($_GET['sort'] == 'p_h_l') echo ' selected="selected"'; ?>>
        Price, High to Low
      </option>
      <option value="r_h_l"<?php if ($_GET['sort'] == 'r_h_l') echo ' selected="selected"'; ?>>
        Rating, High to Low
      </option>
      <option value="r_l_h"<?php if ($_GET['sort'] == 'r_l_h') echo ' selected="selected"'; ?>>
        Rating, Low to High
      </option>
    </select>
    <input type="submit" value="Sort">
  </form>
</div>
