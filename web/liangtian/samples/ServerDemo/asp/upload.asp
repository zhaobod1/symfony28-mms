<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>

<%
'用法举例：批量上传
'该例主要说明默认模式下 FileItem 在批量上传中的应用
'以上传附件为例
'该例以 UTF-8 字符集测试
'下面是上传程序(upload.asp)的代码和注释
'**********************************************************
'---------------------------------------------------------- 
OPTION EXPLICIT
Server.ScriptTimeOut=5000
%>
<!--#include FILE="UpLoadClass.asp"-->
<!--#include file="Code2Info.en.asp"-->
<%
dim request2,formPath,formName,intCount,intTemp

'建立上传对象
set request2=new UpLoadClass

	'设置文件允许的附件类型为gif/jpg/rar/zip/bmp/tif/png
	request2.FileType="gif/jpg/rar/zip/bmp/tif/png"

	'设置服务器文件保存路径
	request2.SavePath="UpLoadFile/"

	'设置字符集
	request2.Charset="UTF-8"

	request2.MaxSize  = 5000*1024*100
	
	'设置不以上传时间为文件名保存
	request2.AutoSave = 1
	
	'打开对象
	request2.Open() 
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> ASP 无组件上传类</title>

</head>
<body id="UpLoadClass_V2.11">
	<div id="Context">
	
		<p id="Title">
			范例：文件上传
		</p>
		<div id="Content">
			<%
			'显示类版本
			Response.Write("<p>程序版本："&request2.Version&"</p>")
		
			'显示字符集
			Response.Write("<p id=""Title"">字 符 集："&request2.Charset&"</p>")
		
			'显示邮件标题
			Response.Write("<p>邮件标题："&request2.Form("strTitle")&"</p>")
		
			'显示邮件内容
			Response.Write("<p>邮件内容："&request2.Form("strContent")&"</p>")
		
			'----列出所有上传了的文件开始----
			intCount=0
			for intTemp=1 to Ubound(request2.FileItem)
				
				'获取表单文件控件名称，注意FileItem下标从1开始
				formName=request2.FileItem(intTemp)
				
				'显示文件域
				Response.Write "<p>"&intTemp&"、文件域["&formName&"]："
		
				'显示源文件路径与文件名
				Response.Write "<br />"&request2.form(formName&"_Path")&request2.form(formName&"_Name")
		
				'显示文件大小（字节数）
				Response.Write "("&request2.form(formName&"_Size")&") => "
		
				'显示目标文件路径与文件名
				Response.Write formPath&request2.form(formName)&" "
		
				if request2.form(formName&"_Err")=0 then intCount=intCount+1
		
				'显示文件保存状态
				'Err2Info代码转信息，见../Code2Info.en.asp
				Response.Write("<br />"&Err2Info(request2.form(formName&"_Err"))&"</p>")
		
			next
			'----列出所有上传了的文件结束---- 
		
			Response.Write "<p>共 "&intCount&" 个文件上传成功! </p>"
		
			Response.Write "<p>[<a href=""javascript:history.back();"">返回</a>]</p>"
			%>
		</div>
		
	</div>

   	
</body>
</html>
<%
'释放上传对象
set request2=nothing
%>