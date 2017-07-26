
<div align="center">
	<h2>変更</h2>
		<table>
			<tr>
			<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./changeForm','novalidate' => true));
				if (isset($this->data['MyItem']['id']))
				{
					if(!($count==0))
					{
						echo "<th>".$this->Form->text('id', array('default' =>$data['MyItem']['id'],'maxlength' => '4','class'=>'id'));
					}
					else
					{
						echo  "<th>".$this->Form->text('id', array('default' =>$id,'maxlength' => '4','class'=>'id'));
					}
				}
				else
				{
					echo  "<th>".$this->Form->text('id',array('default' => $this->Session->read('id'),'maxlength' => '4','class'=>'id'));
				}
				echo  "<th>".$this->Form->end("ID検索"); ?>
			</tr>
		</table>
		<br>
		<table class="main_table">
			<?php echo $this->Form->create("MyItem",array('type'=>'post','url'=>'./change','novalidate' => true));
				if (isset($this->data['MyItem']['id']))
				{
					if(!($count==0))
					{	?>
			<tr>
				<td class="name">商品名</td>
				<td class="text"><?php echo $this->Form->text('item_name', array('default' => $data['MyItem']['item_name'],'maxlength' => '10','class'=>'form')); ?></td>
			</tr>
			<tr>
				<td class="name">価　格</td>
				<td class="text"><?php echo $this->Form->text('price', array('default' => $data['MyItem']['price'],'maxlength' => '9','class'=>'form')); ?></td>
			</tr>
			<tr>
				<td class="name">備　考</td>
				<td class="text"><?php echo $this->Form->text('keyword', array('default' => $data['MyItem']['keyword'],'maxlength' => '20','class'=>'form')); ?></td>
			</tr>

			<?php echo $this->Form->input('id', array('default' => $data['MyItem']['id'],'type'=>'hidden')); ?>
		</table>
		<br>
 		<?php echo $this->Form->end("更新");
					}
					else
					{ ?>

			<tr>
				<td class="name">商品名</td>
				<td class="text"><?php echo $this->Form->text('item_name', array('default' => "",'maxlength' => '10','class'=>'form')); ?></td>
			</tr>
			<tr>
				<td class="name">価　格</td>
				<td><?php echo $this->Form->text('price', array('default' => "",'maxlength' => '9','class'=>'form')); ?></td>
			</tr>
			<tr>
				<td class="name">備　考</td>
				<td><?php echo $this->Form->text('keyword', array('default' => "",'maxlength' => '20','class'=>'form')); ?></td>
			</tr>
		</table>

		<?php echo '<p class="error">'.($msg).'</p>';
				echo $this->Form->input('id', array('default' =>"" ,'type'=>'hidden'));

				echo $this->Form->end();
					}
				}
				else
				{ ?>
			<tr>
				<td class="name">商品名</td>
				<td class="text"><?php echo $this->Form->text('item_name', array('default' => $this->Session->read('item_name'),'maxlength' => '10','class'=>'form')); ?></td>
			</tr>
			<tr>
				<td class="name">価　格</td>
				<td><?php echo $this->Form->text('price', array('default' => $this->Session->read('price'),'maxlength' => '9','class'=>'form')); ?></td>
			</tr>
			<tr>
				<td class="name">備　考</td>
				<td><?php echo $this->Form->text('keyword', array('default' => $this->Session->read('keyword'),'maxlength' => '20','class'=>'form')); ?></td>
			</tr>

		<?php echo $this->Form->input('id', array('default' =>"" ,'type'=>'hidden'));
				} ?>
		</table>
		<?php 	echo $this->Form->end(); ?>
	<br>
	<input type="button" onClick="location.href='http://localhost/Cake_kadai/cake/myItems/menu'" value="メニューへ戻る" class="menu">
</div>