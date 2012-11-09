<h1>書籍基本資料列表</h1>
<p><?php echo $this->Html->link('新增書籍資料', array('action' => 'book_basic_edit')); ?></p>
<table>
    <tr>
        <th>編號</th>
        <th>書籍名稱</th>
        <th>作者</th>
        <th>出版商</th>
        <th>書籍分類</th>
        <th>出版日期</th>
        <th>登記日期</th>
        <th></th>
    </tr>
    <?php foreach ($book_basics as $book_basic): ?>
    <tr>
        <td><?php echo $book_basic['Book_Basic']['id']; ?></td>
        <td>
            <?php echo $book_basic['Book_Basic']['book_name']; ?>
        </td>
        <td>
            <?php echo $book_basic['Book_Basic']['book_author']; ?>
        </td>
        <td>
            <?php echo $book_basic['Book_Publisher']['comp_name']; ?>
        </td>
        <td>
            <?php echo $book_basic['Book_Cate']['catagory_name']; ?>
        </td>
        <td>
            <?php echo $book_basic['Book_Basic']['publish_date']; ?>
        </td>
        <td>
            <?php echo $book_basic['Book_Basic']['create_time']; ?>
        </td>
        <td>
            <?php 
				echo $this->Html->link('修改', array('action' => 'book_basic_edit', $book_basic['Book_Basic']['id']));
				echo '&nbsp';
				echo $this->Html->link('版本資訊', array('action' => 'book_version_index', $book_basic['Book_Basic']['id']));
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
