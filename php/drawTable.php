<?php
$xml=simplexml_load_file("../decks/output.xml") or die("Error: Cannot create object");
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
    <?php foreach($xml->children() as $card): ?>
            <tr>
                <td><?php echo $card->Rank; ?></td>
                <td><?php echo $card->Question; ?></td>
                <td><?php echo $card->Answer; ?></td>
            </tr>
    <?php endforeach; ?>
    </tbody>
</table>



</table>


