<?php
  session_start();
?>
<!DOCTYPE php>
<?php
  require_once 'Dao.php';
  $dao = new Dao();
  $weapons = $dao->getWeapons("");

  foreach ($weapons as $weapon) {
    if ($_SESSION['currentWeapon'] == htmlspecialchars($weapon['name'])) {
      echo
      "<div class='panel' style='margin-bottom: 20px;'>

          <div class='board divide2'>
            <div class='board-body' style='padding: 0;'>
              <img class='image' alt='' src='" . htmlspecialchars($weapon['img']) . "' style='width: 200px;'>
            </div>
            <div class='nameblock2'>
              <h3>" . htmlspecialchars($weapon['name']) . "</h3>
              <br><h4>Base ATK: " . htmlspecialchars($weapon['baseatk']) . "</h4>
            </div>
          </div>
          <div class='board divide2'>
            <div class='board-header'>
              <h3>Passive</h3>
            </div>
            <div class='board-body'>

                <p>" . htmlspecialchars($weapon['passive']) . "</p>
            </div>
          </div>

      </div>
      <div class='panel' style='margin-bottom: 20px;'>
        <div class='board divide3'>
          <div class='board-header'>
            <h3>Rarity</h3>
          </div>
          <div class='board-body'>
            <h4><strong>Star Rank:</strong> " . htmlspecialchars($weapon['rarity']) . " ✦</h4>
          </div>
        </div>

        <div class='board divide3'>
          <div class='board-header'>
            <h3>Ascension Materials</h3>
          </div>
          <div class='board-body'>
          <ul>
            <li>" . htmlspecialchars($weapon['weaponMaterial']) . "</li>
            <li>" . htmlspecialchars($weapon['ascMaterial1']) . "</li>
            <li>" . htmlspecialchars($weapon['ascMaterial2']) . "</li>
          </ul>
          </div>
        </div>
        <div class='board divide3'>
          <div class='board-header'>
            <h3>Description</h3>
          </div>
          <div class='board-body'>
            <p>" . htmlspecialchars($weapon['description']) . "</p>
          </div>
        </div>
      </div>";
      break;
    }
  }
?>
