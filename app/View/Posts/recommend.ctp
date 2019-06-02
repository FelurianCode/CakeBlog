<!-- File: /app/View/Posts/recommends.ctp -->

<h1>Blog recommendations</h1>
<p>No recommendations yet</p>
<?php
if ($rcomnd!='Clicked'){
    echo $this->Html->link('Update recommendations', array('controller' => 'posts', 'action' => 'get_recommends'));
}
 ?>

<?php
    if($recommends){
?>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($recommends as $post): ?>
    <tr>
        <td>
            <?php
                echo $this->Html->link(
            $post['posts']['title'],
            array('action' => 'view', $post['posts']['id'])
            );
            ?>
        </td>
        <td>
            <?php echo $post['posts']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>


<?php
    }
?>
