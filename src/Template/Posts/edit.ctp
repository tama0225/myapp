<?php
$this->assign('title', '編集');
?>

<h1>
<?= $this->Html->link('戻る', ['action'=>'index'], ['class'=>'headlink']); ?>
編集
</h1>

<?= $this->Form->create($post); ?>
<?= $this->Form->input('title', ['label'=>'タイトル']); ?>
<?= $this->Form->input('body', ['rows'=>'3', 'label'=> '本文']); ?>
<?= $this->Form->button('編集'); ?>
<?= $this->Form->end(); ?>