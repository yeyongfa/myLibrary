<div class='tophead'>用户查询</div>

	<div>
		<select name="seltype" id="seltype">
				<option value="userid">学号/工号</option>
                <option value="name">用户姓名</option>
                <option value="category">用户身份</option>
                <option value="unit">所在学院</option>       
        </select> 
         <input type="text" name="coun" class="form-control" id="coun" />
         <input type="submit" id='UselectBtn' onclick='selectUShow();'  value="查询" />
	</div>
	<table id='usershow'>
	</table>

