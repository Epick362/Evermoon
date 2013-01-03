<?php /* Smarty version Smarty-3.1.8, created on 2013-01-02 13:36:05
         compiled from "C:/xampp/htdocs/2Moons/styles/templates\game\page.messages.view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315650e429b5bd4b85-15526680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad0d63b5c2941131c0515e762c56cc55b39a9987' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\page.messages.view.tpl',
      1 => 1347100368,
      2 => 'file',
    ),
    'f2840290a12503c982fa27990bb1d24a0a769c37' => 
    array (
      0 => 'C:/xampp/htdocs/2Moons/styles/templates\\game\\layout.ajax.tpl',
      1 => 1347100366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315650e429b5bd4b85-15526680',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50e429b5dde829_07669502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e429b5dde829_07669502')) {function content_50e429b5dde829_07669502($_smarty_tpl) {?>
<form action="game.php?page=messages&amp;mode=delete&amp;messcat=<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
&amp;ajax=1" method="post">
<table id="messagestable" style="width:760px;">
	<tr>
		<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_message_title'];?>
</th>
	</tr>
	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
);return false;">&laquo;</a>&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int)ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0){
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++){
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value==$_smarty_tpl->tpl_vars['page']->value){?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php }else{ ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	<tr style="height: 20px;">
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_action'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_date'];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_from'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_to'];?>
<?php }?></td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_subject'];?>
</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['Message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MessageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Message']->key => $_smarty_tpl->tpl_vars['Message']->value){
$_smarty_tpl->tpl_vars['Message']->_loop = true;
?>
	<tr id="message_<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
" class="message_head<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999&&$_smarty_tpl->tpl_vars['Message']->value['unread']==1){?> mes_unread<?php }?>">
		<td style="width:40px;" rowspan="2">
		<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?><input name="delmes[<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
]" type="checkbox"><?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['time'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['from'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>

		<?php if ($_smarty_tpl->tpl_vars['Message']->value['type']==1&&$_smarty_tpl->tpl_vars['MessID']->value!=999){?>
		<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['Message']->value['sender'];?>
, Message.CreateAnswer('<?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>
'));" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_answer_to'];?>
 <?php echo strip_tags($_smarty_tpl->tpl_vars['Message']->value['from']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" border="0"></a>
		<?php }?>
		</td>
	</tr>
	<tr class="messages_body">
		<td colspan="3" class="left">
		<?php echo $_smarty_tpl->tpl_vars['Message']->value['text'];?>

		</td>
	</tr>
	<?php } ?>
	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php if ($_smarty_tpl->tpl_vars['page']->value!=1){?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, 1);return false;">&laquo;</a>&nbsp;<?php }?><?php $_smarty_tpl->tpl_vars['site'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int)ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0){
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++){
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value==$_smarty_tpl->tpl_vars['page']->value){?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php }else{ ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['page']->value!=$_smarty_tpl->tpl_vars['maxPage']->value){?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['MessID']->value!=999){?>
	<tr>
		<td colspan="4">
			<select name="deletemessages">
				<option value="deletemarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_marked'];?>
</option>
				<option value="deleteunmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_unmarked'];?>
</option>
				<option value="deletetypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_type_all'];?>
</option>
				<option value="deleteall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_all'];?>
</option>
			</select>
			<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_confirm_delete'];?>
" type="submit">
		</td>
	</tr>
	<?php }?>
</table>
</form>
<?php }} ?>