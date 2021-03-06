<?php require VIEW_ROOT . 'partials/header.php'; ?>

<div class="container box-shadow">
    
    <?= HtmlBuilder::createHTag(1, 'Meine Urlaubsziele'); ?>
    
    <form action="index.php" method="POST">
        <?= HtmlBuilder::createFormInput('1. Ziel', 'inputfield', 'text', 'ziel1'); ?>
        <?= HtmlBuilder::createFormInput('2. Ziel', 'inputfield', 'text', 'ziel2'); ?>
        <?= HtmlBuilder::createFormInput('3. Ziel', 'inputfield', 'text', 'ziel3'); ?>
        <?= HtmlBuilder::createFormInput(null, null, 'reset', null, 'Abbrechen'); ?>
        <?= HtmlBuilder::createFormInput(null, null, 'submit', 'ziele', 'OK'); ?>
        
    </form>
</div>

<?php require VIEW_ROOT . 'partials/footer.php'; ?>