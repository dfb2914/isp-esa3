<?php require VIEW_ROOT . 'partials/header.php'; ?>

<div class="container box-shadow">
    
    <?= HtmlBuilder::createHTag(1, 'Wunschübersicht'); ?>
    
    <?= HtmlBuilder::createPTag('1. Ziel', 'show-inline', $_POST['dest_1'] ); ?>
    <?= HtmlBuilder::createPTag('2. Ziel', 'show-inline', $_POST['dest_2'] ); ?>
    <?= HtmlBuilder::createPTag('3. Ziel', 'show-inline', $_POST['dest_3'] ); ?>
    
    <?= HtmlBuilder::createPTag('Vor- und Nachname', 'show-inline', $_POST['name'] ); ?>
    <?= HtmlBuilder::createPTag('PLZ', 'show-inline', $_POST['plz'] ); ?>
    <?= HtmlBuilder::createPTag('Ort', 'show-inline', $_POST['ort'] ); ?>
    <?= HtmlBuilder::createPTag('Telefon', 'show-inline', $_POST['telefon'] ); ?>
    
</div>

<?php require VIEW_ROOT . 'partials/footer.php'; ?>