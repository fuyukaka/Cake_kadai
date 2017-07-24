<div align="center">
<h2>削除</h2>
<table>
<tr>
<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./deleteFind'));
if (isset($this->data['MyItem']['id']))
{
if(!($count==0))
{
 echo "<th>".$this->Form->text('id', array('default' =>$data['MyItem']['id']));
 }
 else
 {
 echo  "<th>".$this->Form->text('id', array('default' =>$id));
 }
 }
 else
 {
  echo  "<th>".$this->Form->text('id');
 }
echo  "<th>".$this->Form->end("ID検索"); ?>
</tr>
</table>
<br>
<table class="main_table" border="1">
	<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./delete'));
	if (isset($this->data['MyItem']['id'])){
		if(!($count==0))
			{	?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"><?php echo $data['MyItem']['item_name']; ?></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td class="text"><?php echo $data['MyItem']['price']; ?></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
			<td class="text"><?php echo $data['MyItem']['keyword']; ?></td>
		</tr>

		<?php echo $this->Form->input('id', array('default' => $data['MyItem']['id'],'type'=>'hidden')); ?>
</table><br>
 <?php


			echo $this->Form->end("削除");

		}

		else{ ?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
		<td></td>
		</tr>

		</table>
		<?php
		echo '<p class="error">'.($msg).'</p>';
			echo $this->Form->end();
		}

		}
		else
		{?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
		<td></td>
		</tr>

		</table>
		<?php
		echo $this->Form->end();

 }?>

<br>

<form action="./menu">
		<input type="submit" class="menu" value="メニューへ戻る">
</form>
</div>