<?php use yii\helpers\Html; ?>
<?php echo Html::a('Create New Post', array('site/save'), array('class' => 'btn btn-primary pull-right')); ?>
<div class="clearfix"></div>
<hr />
<table class="table table-striped table-hover">
    <tr>
        <td>#</td>
        <td>Task</td>
        <td>Duration</td>
        <td>TaskCategory</td>
		<td>Assigned</td>
        <td>Updated</td>
        <td>Options</td>
    </tr>
    <?php foreach ($models as $task): ?>
        <tr>
            <td>
                <?php echo Html::a($task->ID, array('task/add', 'id'=>$task->ID)); ?>
            </td>
            <td><?php echo Html::a(Html::encode($task->Task), array('task/add', 'id'=>$task->ID)); ?></td>
            <td><?php echo $task->Duration; ?></td>
            <td><?php echo $task->TaskCategory; ?></td>
			<td><?php echo $task->Assigned; ?></td>
            <td><?php echo $task->Status; ?></td>
            <td>
                <?php echo Html::a('update', array('site/save', 'id'=>$task->ID)); ?>
                <?php echo Html::a('delete', array('site/delete', 'id'=>$task->ID)); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>