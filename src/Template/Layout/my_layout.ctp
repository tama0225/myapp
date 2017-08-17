<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css('styles.css') ?>
</head>
<body>
    <?= $this->element('my_header') ?>
    <?= $this->Flash->render() ?>
    
    <section class="container">
            <?= $this->fetch('content') ?>
    </section>
    <?= $this->element('my_footer') ?>
</body>
</html>
