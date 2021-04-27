<?php
  session_start();
?>
<!DOCTYPE php>
<?php
  require_once 'Dao.php';
  $dao = new Dao();
  $materials = $dao->getMaterials("");

  foreach ($materials as $material) {
    if ($_SESSION['currentMaterial'] == htmlspecialchars($material['name'])) {
      echo
      "<div class='panel' style='margin-bottom: 20px;'>
        <div class='board-outer'>
          <div class='board divide2'>
            <div class='board-body' style='padding: 0;'>
              <img class='image' alt='' src='" . htmlspecialchars($material['img']) . "' style='width: 200px;'>
            </div>
            <div class='nameblock2'>
              <h3>" . htmlspecialchars($material['name']) . "</h3>
            </div>
          </div>

        </div>
      </div>
      <div class='panel' style='margin-bottom: 20px;'>
        <div class='board divide3'>
          <div class='board-header'>
            <h3>Rarity</h3>
          </div>
          <div class='board-body'>
            <h4><strong>Star Rank:</strong> " . htmlspecialchars($material['rarity']) . " ✦</h4>
          </div>
        </div>

        <div class='board divide3'>
          <div class='board-header'>
            <h3>Type</h3>
          </div>
          <div class='board-body'>
            <ul>
              <li>" . htmlspecialchars($material['type']) . "</li>
            </ul>
          </div>
        </div>

        <div class='board divide3'>
          <div class='board-header'>
            <h3>In-game Description</h3>
          </div>
          <div class='board-body'>
            <p>" . htmlspecialchars($material['description']) . "</p>
          </div>
        </div>
      </div>";
      break;
    }
  }
?>
