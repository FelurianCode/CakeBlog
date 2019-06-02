<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php
    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('category', array(
    'options' => array('science' => 'Science', 'music' => 'Music', 'news' => 'News', 'technology' => 'Technology' )
    ));
    echo $this->Form->end('Save Post');
?>