<div align="center">
	<h2>結果画面</h2>
	<?php foreach ($errors as $error => $messages)
		{
			$message = $messages[0];

			if(isset($message))
			{
				echo '<p class="error">'.$message.'</p>';
				break;
			}
		} ?>
	<table class="main_table">
		<tr>
			<td class="name">結 果</td>
			<td class="text"><?php print($msg); ?></td>
		</tr>
	</table>
	<br>
	<input type="button" onClick="location.href='http://localhost/Cake_kadai/cake/myItems/changeForm'" value="入力画面へ戻る" class="menu">
	<br>
	<br>
	<input type="button" onClick="location.href='http://localhost/Cake_kadai/cake/myItems/menu'" value="メニューへ戻る" class="menu">
</div>