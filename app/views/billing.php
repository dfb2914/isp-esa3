<?php require VIEW_ROOT . 'partials/header.php'; ?>

<div class="container box-shadow">
    
    <?= HtmlBuilder::createHTag(1, 'Kontaktinformation'); ?>
    
    <form action="index.php" method="POST">
        
        <?= HtmlBuilder::createFormInput('1. Ziel', 'inputfield', 'text', 'dest_1', $_POST['dest_1'] ); ?>
        <?= HtmlBuilder::createFormInput('2. Ziel', 'inputfield', 'text', 'dest_2', $_POST['dest_2'] ); ?>
        <?= HtmlBuilder::createFormInput('3. Ziel', 'inputfield', 'text', 'dest_3', $_POST['dest_3'] ); ?>
        <?= HtmlBuilder::createFormInput('Vor- und Nachname', 'inputfield', 'text', 'name'); ?>
        <?= HtmlBuilder::createFormInput('PLZ', 'inputfield', 'text', 'plz'); ?>
        <?= HtmlBuilder::createFormInput('Ort', 'inputfield', 'text', 'ort'); ?>
        <?= HtmlBuilder::createFormInput('Telefon', 'inputfield', 'text', 'telefon'); ?>
        <?= HtmlBuilder::createFormInput(null, null, 'reset', null, 'Abbrechen'); ?>
        <?= HtmlBuilder::createFormInput(null, null, 'submit', null, 'OK'); ?>
        
    </form>
</div>

<?php require VIEW_ROOT . 'partials/footer.php'; ?>