<?php
$this->assign('title', '登録');
?>

<h1>
<?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>'headlink']); ?>
登録
</h1>

<?= $this->Form->create($post); ?>
<?= $this->Form->input('title', ['label'=>'タイトル']); ?>
<?= $this->Form->input('body', ['rows'=>'3', 'label'=> '本文']); ?>
<?= $this->Form->button('登録'); ?>
<?= $this->Form->end(); ?>