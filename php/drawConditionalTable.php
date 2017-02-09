<?php
$xml=simplexml_load_file("../decks/output.xml") or die("Error: Cannot create object");
$deck=$xml->children();

//Conditions
$rankAtLeast100 = false;

$spaceToView = True;
$cardsAdded = 0;
$cardsToView = 5;
?>

<table>
    <thead>
    <tr>
        <th>Rank</th>
        <th>Question</th>
        <th>Answer</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach($deck as $card): ?>

        <?php
        // Display Conditions
        if($card->Rank >= 0100) {
            $rankAtLeast100 = True;
        } else {
            $rankAtLeast100 = False;
        }

        if($cardsAdded < $cardsToView) {
            $spaceToView = True;
        } else {
            $spaceToView = False;
        }
        ?>

        <?php if($rankAtLeast100 && $spaceToView): ?>
            <tr>
                <td><?php echo $card->Rank; ?></td>
                <td><?php echo $card->Question; ?></td>
                <td><?php echo $card->Answer; ?></td>

                <!--<td><?php echo $cardsAdded; ?></td>-->
                <?php $cardsAdded += 1;?>
            </tr>
        <?php endif; ?>

    <?php endforeach; ?>
    </tbody>
</table>

