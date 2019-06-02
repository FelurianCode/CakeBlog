<!-- File: /app/View/Posts/edit.ctp -->

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('category', array(
    'options' => array('science' => 'Science', 'music' => 'Music', 'news' => 'News', 'technology' => 'Technology' )
    ));
    echo $this->Form->end('Save Post');
?>