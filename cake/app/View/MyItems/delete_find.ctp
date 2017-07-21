<br>
<div align="center">
<table>
<tr>
<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./deleteFind'));
if(!($count==0))
{
 echo "<th>".$this->Form->text('id', array('default' =>$data['MyItem']['id']));
 }
 else
 {
 echo  "<th>".$this->Form->text('id', array('default' =>$id));
 }
echo  "<th>".$this->Form->end("ID検索"); ?>
</tr>
</table>
<br><br>
<table id="main_table" border="1">
	<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./delete'));
		if(!($count==0))
			{	?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"><?php echo $data['MyItem']['item_name']; ?></td>
		</tr>
		<tr>
			<td>価格</td>
			<td><?php echo $data['MyItem']['price']; ?></td>
		</tr>
		<tr>
			<td>備考</td>
			<td><?php echo $data['MyItem']['keyword']; ?></td>
		</tr>

		<?php echo $this->Form->input('id', array('default' => $data['MyItem']['id'],'type'=>'hidden')); ?>
</table>

 <?php
		}

		else{ ?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"></td>
		</tr>
		<tr>
			<td class="name">価格</td>
			<td class="text"></td>
		</tr>
		<tr>
			<td class="name">備考</td>
		<td class="text"></td>
		</tr>

		<?php echo $this->Form->input('id', array('default' =>"" ,'type'=>'hidden')); ?>
</table>

<?php
				print($msg);
			}

			echo $this->Form->end("削除");
		?>
<br>
		<form action="./menu">
		<input type="submit" id='menu' value="メニューへ戻る">
</form>
</form>
</div>