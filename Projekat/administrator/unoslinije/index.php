<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>

		<meta charset="UTF-8">
	<title>- Linije-</title>
</head>
<body>
<div id="meni">
<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Dosis:500&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!-- CSS-->
<link rel="stylesheet" type="text/css" href="../../css/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="../../css/menu.css" />

<!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/> -->

<ul id="menu">
    <li><a href="../prva.php" class="drop">Meni</a><!-- Begin Home Item -->
   </ul>

</div>



	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>

	</div>
	
		<center><h2>UNOS LINIJE</h2></center>

	<center>
	
	<table id="tt" class="easyui-datagrid" style="width:1000px;height:680px"
                        data-options="
			url:'datagrid24_getdata.php',
			toolbar:'#tb',
			pageSize:'20',
			singleSelect:true,
			rownumbers:true,
			fitColumns:true,
			pagination:true,
			onDblClickRow:function(){
				editUser();
			}"
			>
		<thead>
			<tr>
			    <th field="nazivvl" width="0" sortable="true">Vrsta linije</th>
			    <th field="imel" width="0" sortable="true">Ime Linije</th>
				 <th field="polaznas" width="0" sortable="true">Polazna Stanica</th>
				<th field="krajnjas" width="0" sortable="true">Krajnja Stanica</th>
				
			</tr>
		</thead></center>
	</table>
	<div id="tb" style="padding:3px">
                <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nova</a>
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Izmeni</a>
		<br>
		
	</div>
	
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:580px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">UNOS LINIJE</div>
		<form id="fm" method="post" novalidate>
		
		<div class="fitem">
			
				<?php
				
				include '../conn.php';
				
				$stmt = $dbh->prepare('select vrstalinijeid,nazivvl from vrstalinije group by vrstalinijeid');
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $data = $stmt->fetchAll();
				
				?>
				
				<label>Vrste Linija:</label>
				<select class="easyui-combobox" required="true" name="vrstalid" style="width:200px;">
				
                <?php foreach ($data as $row): ?>
				<option><?=$row["vrstalinijeid"]?>.<?=$row["nazivvl"]?></option>
				
                <?php endforeach ?>
				</select>	
				
			</div>
			
		
			<div class="fitem">
				<label> Linija</label>
				<input name="imel" class="easyui-textbox" required="true">
			</div>
			
			<div class="fitem">
			
				<?php
				
				include '../conn.php';
				
				$stmt = $dbh->prepare('select stanicaid,imes from stanica group by stanicaid');
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $data = $stmt->fetchAll();
				
				?>
				
				<label>Polazna stanica:</label>
				<select class="easyui-combobox" required="true" name="polaznas" style="width:200px;">
				
                <?php foreach ($data as $row): ?>
				<option><?=$row["imes"]?></option>
				
                <?php endforeach ?>
				</select>	
				
			</div>
			
		<div class="fitem">
			
				<?php
				
				include '../conn.php';
				
				$stmt = $dbh->prepare('select stanicaid,imes from stanica group by stanicaid');
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $data = $stmt->fetchAll();
				
				?>
				
				<label>Krajnja Stanica:</label>
				<select class="easyui-combobox" required="true" name="krajnjas" style="width:200px;">
				
                <?php foreach ($data as $row): ?>
				<option><?=$row["imes"]?></option>
				
                <?php endforeach ?>
				</select>	
				
			</div>
					
			</div>
			</div>
		</form>
	</div>
		<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Sacuvaj</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Odustani</a>
	</div>
	<script type="text/javascript">
  
	

		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','Dodaj');
			//$('#dlg').dialog('open');
			$('#fm').form('clear');
			url = 'save_user.php';
		}
		function editUser(){
			var row = $('#tt').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Izmeni');
				$('#fm').form('load',row);
				url = 'update_user.php?linijaid='+row.linijaid;
			}
		}
		function saveUser(){

			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#tt').datagrid('reload');	// reload the user data
					}
				}
			});
		}
	
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>

	
</body>
</html>
