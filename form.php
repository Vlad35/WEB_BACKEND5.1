<html lang="en">
<head>
  <meta charset='utf-8'/>
  <link rel="stylesheet" href="style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'/>
</head>
<body>
<?php $sessionStarted = !empty($_COOKIE[session_name()]) &&
      !empty($_SESSION['login']); ?>
<a href="./login.php"> 
<?php if($sessionStarted) print('Выход,Сессия Закнчивается?:(');
		else print('Вход,Привет!Сессия Начата!');
?>
 </a>
<div class="form-wrapper">
<div class="form-layer">

<h1 class ="titles" id="linktitle"> Form </h1>
  <form action ="" method = "POST">
	<label>
			Имя:<br />
			<input name="field-name-1" <?php if($errors['name']) print('class="error"');?> value="<?php print($values['name'])?>" /> <?php if($errors['name']) print($messages['bad_name']) ?>
		  </label><br />
	<label>
			Email:<br />
			<input name="field-email" type="email" <?php if($errors['email']) print('class="error"');?> value="<?php print($values['email'])?>" /> <?php if($errors['email']) print($messages['bad_email']) ?>
		  </label><br />
	<label>
			Дата Рождения:<br />
			<input name="field-date" 
			  type="date" <?php if($errors['birth_date']) print('class="error"');?> value="<?php print($values['birth_date'])?>" /> <?php if($errors['birth_date']) print($messages['bad_date']) ?> 
		  </label><br />
	Пол: <label><input type="radio" <?php if($values['sex'] === 'male') print('checked="checked"');?>
			name="radio-group-1" value = "male" />
			Мужской </label>
		  <label><input type="radio" <?php if($values['sex'] === 'female') print('checked="checked"');?>
			name="radio-group-1" value = "female" />
			Женский </label> <?php if($errors['sex']) print($messages['bad_sex']) ?><br />

	Кол-во конеченостей: <br/> <label><input type="radio" <?php if($values['limbs'] === 1) print('checked="checked"');?>
			name="radio-group-2" value = "1" />
			2 ноги и 2 руки </label><br/>
		  <label><input type="radio" <?php if($values['limbs'] === 2) print('checked="checked"');?>
			name="radio-group-2" value = "2" />
			Чего-то не хватает </label><br />
			<label><input type="radio" <?php if($values['limbs'] === 3) print('checked="checked"');?>
			name="radio-group-2" value = "3" />
			Больше чем нужно:) </label><br />
			<?php if($errors['limbs']) print($messages['bad_limbs']) ?>
	<label>
			Сверхспособности:
			<br/>
			<select name="field-name-4[]" <?php if($errors['super']) print('class="error"');?>
			  multiple="multiple">
			  <option value="immortality" <?php if(array_search('immortality',$values['super'])!==false) print('selected');?>>Бессмертие</option>
			  <option value="walkthroughwalls" <?php if(array_search('walkthroughwalls',$values['super'])!==false) print('selected');?>>Прохождение сквозь стены</option>
			  <option value="levitation" <?php if(array_search('levitation',$values['super'])!==false) print('selected');?>>Левитация</option>
			</select>
			<?php if($errors['super']) print($messages['bad_super']) ?>
		  </label><br />
	<label>
	Biography: <br/>
	  <textarea name = "bio-field" <?php if($errors['bio']) print('class="error"');?>> <?php echo($values['bio']);?> </textarea>
	</label> <br/>
	<?php if($errors['bio']) print($messages['bad_bio'])?>
	<label>
	  <input type = "checkbox" name = "checkbox" value="realslim"> С контрактом согласен! </label>
	   <br/>
	   <?php if($errors['check']) print($messages['bad_check'])?>
		<br/>
	  <input type="submit" value="Отправить!" />
	  <br/>
	  <?php print($messages['saved']);
		print('<br/>');
		print($messages['passmessage']); 
	  ?>
  </form>
</div>
</div>
</body>
</html>
