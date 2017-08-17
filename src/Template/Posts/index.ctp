<?php
$this->assign('title', 'ブログ一覧');
?>

<h1>
<?= $this->Html->link('登録', ['action'=>'add'], ['class'=>'headlink']); ?>
ブログ一覧
</h1>

<ul>
  <?php foreach ($posts as $post) : ?>
    <!--<li>タイトル：<?= h($post->title); ?><span> 作成日：<?= h($post->created); ?></span></li>-->
    <!--<li>タイトル：<?= h($post->title); ?><span> 作成日：<?= date_format($post->created, 'Y年m月d日 H時i分s秒'); ?></span></li>-->
    <li>
      <?= $this->Html->link($post->title, ['action'=>'view', $post->id]); ?> <!-- 一覧部分 -->
      <!--<?php echo $this->Html->link($post->title, ['action'=>'view', $post->id]); ?>-->
          <span>作成日：<?= date_format($post->created, 'Y年m月d日 H時i分s秒'); ?></span>

      <?= $this->Html->link('編集', ['action'=>'edit', $post->id]); ?> <!-- 編集部分 -->
      
      <?= // 削除部分
          $this->Form->postLink(
            '[x]',
            ['action'=>'delete', $post->id],
            ['confirm'=>'削除してもよろしいですか?', 'class'=>'listlink']
          );
        ?>
    </li>

  <?php endforeach; ?>
  
</ul>
