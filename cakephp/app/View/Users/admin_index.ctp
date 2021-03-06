<div class="pageheader_div"><h1 id="pageheader">管理者列表</h1></div>
<div class="pagemenu_div"><?php     
  echo $this->Html->link('回上一頁', "javascript:history.back();", array('class' => 'button')); 
?></div>
<table>
    <tr>
        <th>登入名稱</th>
        <th>顯示名稱</th>
        <th>分校代號</th>
        <th>角色</th>
        <th>有效</th>
        <th>建立時間</th>
        <th><?php echo $this->Html->link('新增管理者', array('action' => 'admin_edit'), array('class' => 'button')); ?></th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $user['User']['name']; ?>
        </td>
        <td>
            <?php echo $locations[$user['User']['location_id']]; ?>
        </td>
        <td>
            <?php echo $roles[$user['User']['role']]; ?>
        </td>
        <td>
            <?php if ($user['User']['valid']) { echo 'Y'; } else {echo 'N';}; ?>
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
        <td>
            <?php 
				$delbtn = '生效';
				if ($user['User']['valid']) {
					echo $this->Html->link('修改', array('action' => 'admin_edit', $user['User']['id']), array('class' => 'button'));
					$delbtn = '失效';
					echo '&nbsp';
				}
				echo $this->Form->postLink(
				$delbtn,
				array('action' => 'admin_delete', $user['User']['id']),
				array('class'=> 'button', 'confirm' => '確認變更?'));
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
