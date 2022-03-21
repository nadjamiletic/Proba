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
	<title>- Prevoznik-</title>
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


<ul id="menu">
    <li><a href="../prva.php" class="drop">Meni</a><!-- Begin Home Item -->
   </ul>

</div>



	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>

	</div>
	
		<center><h2>UNOS Prevoznika</h2></center>

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
				
			    <th field="nazivp" width="0" sortable="true">Naziv prevoznika</th>
				<th field="pib" width="0" sortable="true">PIB</th>
				<th field="maticnibroj" width="0" sortable="true">Maticni broj</th>
				<th field="adresa" width="0" sortable="true">Adresa</th>
				<th field="nazivm" width="0" sortable="true">Mesto</th>
				<th field="nazivd" width="0" sortable="true">Drzava</th>
				<th field="email" width="0" sortable="true">E-mail</th>
				<th field="telefon" width="0" sortable="true">Telefon</th>
			</tr>
		</thead></center>
	</table>
	<div id="tb" style="padding:3px">
                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Novi</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Izmeni</a>
		<br>
		
	</div>
	
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:580px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">UNOS</div>
		<form id="fm" method="post" novalidate>
	
		
			<div class="fitem">
				<label> Naziv prevoznika</label>
				<input name="nazivp" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label> PIB</label>
				<input name="pib" class="easyui-textbox" required="true">
			</div>
			
			<div class="fitem">
				<label> Maticni broj</label>
				<input name="maticnibroj" class="easyui-textbox" required="true">
			</div>
			
			<div class="fitem">
				<label> Adresa</label>
				<input name="adresa" class="easyui-textbox" required="true">
			</div>
			

			
			<div class="fitem">
			
				<?php
				
				include '../conn.php';
				
				$stmt = $dbh->prepare('select mestoid,nazivm from mesto group by mestoid');
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $data = $stmt->fetchAll();
				
				?>
				
				<label>Naziv mesta:</label>
				<select class="easyui-combobox" required="true" name="mestoid" style="width:200px;">
				
                <?php foreach ($data as $row): ?>
				<option><?=$row["mestoid"]?>.<?=$row["nazivm"]?></option>
				
                <?php endforeach ?>
				</select>	
				
			</div>
	
			
			<div class="fitem">
				<label> E-mail</label>
				<input name="email" class="easyui-textbox" required="true">
			</div>
					
					
				<div class="fitem">
				<label> Telefon</label>
				<input name="telefon" class="easyui-textbox" required="true">
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
			$('#fm').form('clear');
			url = 'save_user.php';
		}
		function editUser(){
			var row = $('#tt').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Izmeni');
				$('#fm').form('load',row);
				
				url = 'update_user.php?prevoznikid='+row.prevoznikid;
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
