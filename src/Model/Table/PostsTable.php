<?php
 
namespace App\Model\Table;
 
use Cake\ORM\Table;
use Cake\Validation\Validator; //バリデーション用 validationDefault使う時に必要
 
class PostsTable extends Table {
  public function initialize(array $config) {
    $this->addBehavior('Timestamp');
    // Commentsテーブルとの依存関係設定
    $this->hasMany('Comments', ['dependent'=>true]);
  }
  
  // バリデーションの設定
  public function validationDefault(Validator $validator)
    {
      $validator
        ->notEmpty('title')
        ->requirePresence('title')
        ->add('title', ['length'=>['rule'=>['maxlength', 30], 'message'=>'タイトルは30文字以内です。']])
        ->notEmpty('body')
        ->requirePresence('body')
        ->add('body', ['length'=>['rule'=>['minlength', 10], 'message'=>'本文は10文字以上入力してください。']]);

      return $validator;
    }  
}