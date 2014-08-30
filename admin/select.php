<div class='tophead'>图书检索</div>

	<div>
		<select name="seltype" id="seltype">
				<option value="name">图书名称</option>
                <option value="type">图书类别</option>
                <option value="author">图书作者</option>
                <option value="press">出版社</option>      
        </select> 
         <input type="text" name="coun" class="form-control" id="coun" />
         <input type="submit" id='selectBtn' onclick='selectShow();'  value="查询" />
	</div>
	<table id='checkshow'>
	</table>

