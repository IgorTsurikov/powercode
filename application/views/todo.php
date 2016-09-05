<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8" id="projectslist">
    </div>
    <div class="col-md-2"></div>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
	<div id="addform">
	    <div>
		<h3>Добавление проекта:</h3>
	    </div>
	    <div>
		<form id="addproject" action="">
		<div class="form-group">
		    <label class="control-label" for="newprojectname">Название проекта</label>
		    <input type="text" class="form-control" name="newprojectname" placeholder="введите название" required="required">
		</div>
		<div class="form-group">
		    <label class="control-label" for="newprojectname" id="">Описание проекта</label>
		    <textarea class="form-control" rows="3" name="newprojectdescription" placeholder="введите описание" required="required"></textarea>
		</div>
		<div class="form-group">
		    <label class="control-label" for="datepicker">Дедлайн</label>
		    <input type="date" class="form-control" maxlength="20" name="datepicker" id="datepicker" placeholder="укажите дату" required="required">
		</div>
		<div class="form-group">
		    <input type="submit" class="btn btn-primary" value="Добавить">
		</div>
		</form>
	    </div>
	</div>
	<div id="addother" class="hidden">
	    <p class="bg-success text-center" style="padding: 10px;">Проект добавлен</p>
	    <button type="button" class="btn btn btn-primary" id="addotherbutton">Добавить ещё проект</button
	</div>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>