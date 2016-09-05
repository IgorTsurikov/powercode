<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<table class="table">
	<thead>
	<tr>
	    <th>
		Статус
	    </th>
	    <th>
		Название
	    </th>
	    <th>
		Описание
	    </th>
	    <th>
		Дедлайн
	    </th>
	    <th>
		Комментариев
	    </th>
	</tr>
	</thead>
	<tbody>
	<?
	foreach ($query->result_array() as $oneproject):
	?>
	<tr <?php if($oneproject['status'] == '1') echo 'class="active text-muted" style="text-decoration: line-through;"';?>>
	    <td>
		<input type="checkbox" class="checkproject" id="project-<?php echo $oneproject['id']; ?>" <?php if($oneproject['status'] == '1') echo 'checked'; ?>>
	    </td>
	    <td>
		<a href="<?php echo base_url();?>showproject?id=<?php  echo $oneproject['id']; ?>"><?php echo $oneproject['name']; ?></a>
	    </td>
	    <td>
		<?php echo $oneproject['description']; ?>
	    </td>
	    <td>
		<?php echo $oneproject['deadline']; ?>
	    </td>
	    <td>
		<?php echo $oneproject['countcomments']; ?>
	    </td>
	</tr>
	<?php
	endforeach;
	?>
	</tbody>
	</table>
