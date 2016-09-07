<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ToDo For PowerCode</title>
	<link rel="stylesheet"  href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery/jquery-ui.css" type="text/css">
	<script src="<?php echo base_url();?>js/jquery/jquery-1.12.4.js"></script>
	<script src="<?php echo base_url();?>js/jquery/jquery-ui.js"></script>
	<script src="<?php echo base_url();?>js/datepicker-ru.js"></script>
	<script src="<?php echo base_url();?>js/todo.js"></script>
</head>
<body>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	<h1><a href="<?php echo base_url(); ?>">ToDo For PowerCode</a></h1>
    </div>
    <div class="col-md-2"></div>
</div>
<form action="" id="saveproject">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
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
	</tr>
	</thead>
	<tbody>
	<tr>
	    <td>
		<input type="checkbox" class="checkproject" name="check" id="project-<?php echo $query->id; ?>" <?php if($query->status == '1') echo 'checked'; ?>>
	    </td>
	    <td>
		<input type="text" class="form-control" name="projectname" value="<?php echo $query->name; ?>" placeholder="введите название" required="required">
	    </td>
	    <td>
		<textarea class="form-control" rows="3" name="projectdescription" placeholder="введите описание" required="required"><?php echo $query->description; ?></textarea>
	    </td>
	    <td>
		<input type="date" class="form-control" maxlength="20" name="datepicker" pattern="[0-9]{2}\.[0-9]{2}\.[0-9]{4}" id="datepicker" value="<?php echo $query->deadline; ?>" placeholder="укажите дату в формате дд.мм.гггг" required="required">
	    </td>
	</tr>
    </tbody>
    </table>
    <input type="hidden" name="id" value="<?php echo $query->id; ?>">
    <input type="submit" class="btn btn-primary" value="Сохранить">
    <div id="noticesave">
    </div>
    </div>
    <div class="col-md-2"></div>
</div>
</form>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	<div>
	    <h3>Комментарии:</h3>
	</div>
	<div>
	    <hr>
	    <?
	    foreach ($comments->result_array() as $onecomment):
	    ?>
		<div><b><?php echo $onecomment['name']; ?></b> <?php echo date("d.m.Y H:i", $onecomment['date']); ?></div>
		<div><?php echo $onecomment['text']; ?></div>
		<hr>
	    <?php
	    endforeach;
	    ?>

	</div>
    </div>
    <div class="col-md-2"></div>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <div>
	<h3>Добавить комментарий:</h3>
    </div>
    <div>
	<form id="addcomment" action="<?php echo base_url(); ?>index.php/Addcomment" method="post">
	<div class="form-group">
	    <label class="control-label" for="name">Имя</label>
		<input type="text" class="form-control" name="name" placeholder="введите имя" required="required">
	    </div>
	<div class="form-group">
	    <label class="control-label" for="description" id="">Комментарий</label>
	    <textarea class="form-control" rows="3" name="text" placeholder="введите комментарий" required="required"></textarea>
	</div>
	<div class="form-group">
	    <input type="hidden" name="id" value="<?php echo $query->id; ?>">
	    <input type="submit" class="btn btn-primary" value="Добавить">
	</div>
	</form>
        </div>
    </div>
    </div>
    <div class="col-md-2"></div>
</div>


</body>
</html>