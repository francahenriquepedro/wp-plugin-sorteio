<div class="wrap">
    <div id="icon-options-general" class="icon32"><br>    </div>
    <h2>Sorteio</h2>

    <p><strong>Os números sorteados são:</strong></p>
    <?php
    $sorteados = Sorteio::init();

    echo '<p>', implode(', ', $sorteados), '</p>';
    ?>
</div>