
<div align="center">
<h2>変更</h2>
<table>
<tr>
<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./find'));
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
	<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./change'));
	if (isset($this->data['MyItem']['id'])){
		if(!($count==0))
			{	?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"><?php echo $this->Form->text('item_name', array('default' =>$data['MyItem']['item_name'])); ?></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td class="text"><?php echo $this->Form->text('price', array('default' => $data['MyItem']['price'])); ?></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
			<td class="text"><?php echo $this->Form->text('keyword', array('default' => $data['MyItem']['keyword'])); ?></td>
		</tr>

		<?php echo $this->Form->input('id', array('default' => $data['MyItem']['id'],'type'=>'hidden')); ?>
</table>
<br>
 <?php
echo $this->Form->end("更新");
		}

		else{ ?>

		<tr>
			<td class="name">商品名</td>
			<td class="text"><?php echo $this->Form->text('item_name', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td><?php echo $this->Form->text('price', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
		<td><?php echo $this->Form->text('keyword', array('default' => "")); ?></td>
		</tr></table>

		<?php
		echo '<p class="error">'.($msg).'</p>';
		echo $this->Form->input('id', array('default' =>"" ,'type'=>'hidden'));

		echo $this->Form->end();
		}
		}
		else
		{?>
		<tr>
			<td class="name">商品名</td>
			<td class="text"><?php echo $this->Form->text('item_name', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td class="name">価　格</td>
			<td><?php echo $this->Form->text('price', array('default' => "")); ?></td>
		</tr>
		<tr>
			<td class="name">備　考</td>
		<td><?php echo $this->Form->text('keyword', array('default' => "")); ?></td>
		</tr>

		<?php echo $this->Form->input('id', array('default' =>"" ,'type'=>'hidden'));
		}?></table>
		<?php 	echo $this->Form->end(); ?>
<br>
<form action="./menu">
		<input type="submit" class="menu" value="メニューへ戻る">
</form>
</div>