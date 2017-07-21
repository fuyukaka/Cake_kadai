<br>
<div align="center">
<table>
<tr>
<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./find'));
 echo "<th>".$this->Form->text('id');
 echo  "<th>".$this->Form->end("ID検索"); ?>
</tr>
</table>
<br><br>
<table id="main_table" border="1">
<tr>
			<td class="name">商品名</td>
			<td class="text"></td>
		</tr>
		<tr>
			<td>価　格</td>
			<td></td>
		</tr>
		<tr>
			<td>備　考</td>
		<td></td>
		</tr>
		</table>
		<br>
		<form action="./menu">
		<input type="submit" id='menu' value="メニューへ戻る">
</form>
</div>