// 按钮点击事件
$(document).ready(function(){
  $(".an1").click(function(){
  $(".biao").toggle(2000);
  });
});
// 悬停事件
// $(function(){
// 	// $("tr").mouseover(function(){		   
// 	// 	     $("tr:even").css("background-color","#00DD00");			 
// 	// 		 $("tr:even").css("color","#FF0000");
// 	// 		 //:为过滤器
// 	// 	});
// 	$("tr").(function(){
// 		$(this).css("background-color","green");	
// 		});
// 	$("tr").mouseout(function(){
// 		$(this).css("background-color","#CCFFFF");	
// 		});
// })



// var rowCount=4;  //行数默认4行  
  
//添加行  
// function addRow(){  
//     rowCount++;  
//     var newRow='<tr id="option'+rowCount+'"><td class="oz-form-topLabel">选项'+rowCount+'：</td><td class="oz-property" ><input type="text"  style="width:300px"></td><td><a href="#" onclick=delRow('+rowCount+')>删除</a></td></tr>';  
//     $('#optionContainer').append(newRow);  
// }  
  
// //删除行  
// function delRow(rowIndex){  
//     $("#option"+rowIndex).remove();  
//     rowCount--;  
// } 
function doSubmit(){
var xh=document.getElementById("xh").value;
var xm=document.getElementById("xm").value;
var xb=document.getElementById("xb").value;
var ph=document.getElementById("ph").value;
row = document.getElementById("TableA").insertRow();
if(row!=null){
cell=row.insertCell();
cell.innerHTML=xh;
cell = row.insertCell();
cell.innerHTML=xm;
cell = row.insertCell();
cell.innerHTML=xb;
cell = row.insertCell();
cell.innerHTML=ph;
// cell = row.insertCell();
// cell.innerHTML=" ";
}
return false;
}	
// 注册
