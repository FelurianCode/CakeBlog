<!-- File: /app/View/Users/index.ctp -->

<h1>Users</h1>
<?php echo $this->Html->link(
'Add User',
array('controller' => 'users', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $users array, printing out user info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
            $user['User']['username'],
            array('action' => 'view', $user['User']['id'])
            );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $user['User']['id']),
            array('confirm' => 'Are you sure?')
            );
            ?>
            <?php
                echo $this->Html->link(
            'Edit',
            array('action' => 'edit', $user['User']['id'])
            );
            ?>
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>