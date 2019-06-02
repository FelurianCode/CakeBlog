<?php


class Post extends AppModel{

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        ),
        'category' => array(
            'valid' => array(
                'rule' => array('inList', array('science', 'music', 'news', 'technology')),
                'message' => 'Please enter a valid category',
                'allowEmpty' => false
            )
        )
    );

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }

}