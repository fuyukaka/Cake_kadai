<br>
<div align="center">
<table>
<tr>
<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./find'));
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
	<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./change'));
		if(!($count==0))
			{	?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"><?php echo $this->Form->text('item_name', array('default' =>$data['MyItem']['item_name'])); ?></td>
		</tr>
		<tr>
			<td>価　格</td>
			<td><?php echo $this->Form->text('price', array('default' => $data['MyItem']['price'])); ?></td>
		</tr>
		<tr>
			<td>備　考</td>
			<td><?php echo $this->Form->text('keyword', array('default' => $data['MyItem']['keyword'])); ?></td>
		</tr>

		<?php echo $this->Form->input('id', array('default' => $data['MyItem']['id'],'type'=>'hidden')); ?>

 <?php
		}

		else{ ?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"><?php echo $this->Form->text('item_name', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td>価　格</td>
			<td><?php echo $this->Form->text('price', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td>備　考</td>
		<td><?php echo $this->Form->text('keyword', array('default' => "")); ?></td>
		</tr>

		<?php echo $this->Form->input('id', array('default' =>"" ,'type'=>'hidden')); ?>
</table>
<br>
<?php
				print($msg);
			}?>

			</table>
<br>
<?php


			echo $this->Form->end("更　新");
		?>
<br>
<form action="./menu">
		<input type="submit" id='menu' value="メニューへ戻る">
</form>
</div>