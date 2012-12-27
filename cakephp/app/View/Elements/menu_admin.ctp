<ul id="menu">
	<li><a href="#">借閱與歸還</a>
		<ul>
		<li><?php echo $this->Html->link('借書作業',array('controller'=>'lend', 'action'=>'lend_operation')); ?></li>		
		<li><?php echo $this->Html->link('還書作業',array('controller'=>'lend', 'action'=>'return_operation')); ?></li>	
		<li><?php echo $this->Html->link('書籍查詢',array('controller'=>'books', 'action'=>'book_search')); ?></li>
		<li><?php echo $this->Html->link('學員借閱資料統計',array('controller'=>'reports', 'action'=>'user_personal_static')); ?></li>	
		</ul>
	</li>
	<li><a href="#">書籍基本資料維護</a>
		<ul>
			<li><?php echo $this->Html->link('書籍出版商資料',array('controller'=>'books', 'action'=>'publisher_index')); ?></li>
			<li><?php echo $this->Html->link('書籍分類資料',array('controller'=>'books', 'action'=>'catagory_index')); ?></li>
			<li><?php echo $this->Html->link('書籍基本資料',array('controller'=>'books', 'action'=>'book_index')); ?></li>
			<li><?php echo $this->Html->link('書籍標籤列印',array('controller'=>'books', 'action'=>'print_book_barcode')); ?></li>
		</ul>
	</li>
	<li><a href="#">人員管理</a>
		<ul>
			<li><?php echo $this->Html->link('借閱者管理',array('controller'=>'persons', 'action'=>'person_index')); ?></li>	
			<li><?php echo $this->Html->link('借閱者等級權限資料',array('controller'=>'persons', 'action'=>'level_index')); ?></li>
			<li><?php echo $this->Html->link('借閱者群組資料',array('controller'=>'persons', 'action'=>'group_index')); ?></li>
			<li><?php echo $this->Html->link('人員職務名稱',array('controller'=>'persons', 'action'=>'title_index')); ?></li>
			<li><?php echo $this->Html->link('借書證核發列印',array('controller'=>'persons', 'action'=>'print_person_barcode')); ?></li>
		</ul>
	</li>
	<li><a href="#">系統資料維護</a>
		<ul>
			<li><?php echo $this->Html->link('分校資料維護',array('controller'=>'system', 'action'=>'location_index')); ?></li>
			<li><?php echo $this->Html->link('盤點作業',array('controller'=>'system', 'action'=>'take_stock_management')); ?></li>
			<li><?php echo $this->Html->link('管理者維護',array('controller'=>'users', 'action'=>'admin_index')); ?></li>
		</ul>
	</li>	

</ul>