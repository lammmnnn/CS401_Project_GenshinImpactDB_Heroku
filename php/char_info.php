<?php
  session_start();
?>
<!DOCTYPE php>
<?php
  require_once 'Dao.php';
  $dao = new Dao();
  $characters = $dao->getCharacters();

  foreach ($characters as $character) {
    if ($_SESSION['currentChar'] == htmlspecialchars($character['name'])) {
      echo
      "<div class='panel' style='margin-bottom: 20px;'>
        <div class='board-outer'>
          <div class='board'>
            <div class='board-body' style='padding: 0;'>
              <img class='image' alt='' src='" . htmlspecialchars($character['img']) . "' width='2004' height='1320'>
            </div>
          </div>
          <div class='nameblock'>
            <h3>" . htmlspecialchars($character['name']) . "</h3>
          </div>
        </div>
      </div>
      <div class='panel' style='margin-bottom: 20px;'>
        <div class='board divide3'>
          <div class='board-header'>
            <h3>Character</h3>
          </div>
          <div class='board-body'>
            <ul>
              <li><strong>Star Rank:</strong> " . htmlspecialchars($character['rarity']) . " ✦</li>
              <li><strong>Weapon:</strong> " . htmlspecialchars($character['weapon']) . " </li>
            </ul>
          </div>
        </div>
        <div class='board divide3'>
          <div class='board-header'>
            <h3>Element</h3>
          </div>
          <div class='board-body'>
              <img class='image' alt='' src='" . htmlspecialchars($character['element']) . "' style='width: 90px;'>
          </div>
        </div>
      </div>";
      break;
    }
  }
?>
