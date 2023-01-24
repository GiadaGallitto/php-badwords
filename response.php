<p>
    <?php
        $normalParagraph = $_GET['paragraph'];
        echo $normalParagraph;
        echo strlen($normalParagraph);
    ?>
</p>

<p>
    <?php
        $wordCensured = $_GET['censured'];
    ?>
</p>

<p>
    <?php
        $newParagraph = str_ireplace($wordCensured, '***', $normalParagraph);
        echo $newParagraph;
        echo strlen($newParagraph);
    ?>
</p>