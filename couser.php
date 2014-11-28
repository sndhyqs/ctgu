
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="ctl00_Head1"><title>
	三峡大学教务管理系统
</title><link href="../Images/Default.css" rel="stylesheet" type="text/css" />
  
<script language="javascript" type="text/javascript">
// <!CDATA[

function window_onkeydown() {
//window.alert(event.keyCode);
if ((event.altKey)||((event.keyCode==8)&&(event.srcElement.type!="text"&&event.srcElement.type!="textarea"&&event.srcElement.type!="password"))||((event.ctrlKey)&&((event.keyCode==78)||(event.keyCode==82)))||(event.keyCode==116))
{

event.keyCode=0;
event.returnValue=false;
}
}

// ]]>
</script>
<style type="text/css">
	.ctl00_Menu2_0 { background-color:white;visibility:hidden;display:none;position:absolute;left:0px;top:0px; }
	.ctl00_Menu2_1 { text-decoration:none; }
	.ctl00_Menu2_2 { background-color:Red; }
	.ctl00_Menu1_0 { background-color:white;visibility:hidden;display:none;position:absolute;left:0px;top:0px; }
	.ctl00_Menu1_1 { text-decoration:none; }
	.ctl00_Menu1_2 {  }

</style></head>
<body onkeydown="return window_onkeydown()">
    <form name="aspnetForm" method="post" action="Score_Query.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTk1NTA0ODAzNw9kFgJmD2QWAgIDD2QWCAIFDw8WAh4EVGV4dAUTMjAxMTExMjI0M+aZj+mdkuWxsWRkAgcPPCsADQIADxYCHgtfIURhdGFCb3VuZGdkDBQrAAIFAzA6MBQrAAIWEB8ABQzlrabkuJrpooToraYeBVZhbHVlBQzlrabkuJrpooToraYeC05hdmlnYXRlVXJsBR4vandjX2dseHQvU2l0ZU1hcC9UZXN0LmFzcHgjMzIeB1Rvb2xUaXAFDOWtpuS4mumihOitph4HRW5hYmxlZGceClNlbGVjdGFibGVnHghEYXRhUGF0aAUeL2p3Y19nbHh0L3NpdGVtYXAvdGVzdC5hc3B4IzMyHglEYXRhQm91bmRnFCsABAULMDowLDA6MSwwOjIUKwACFhAfAAUQ4peGIOWfueWFu+iuoeWIkh8CBRDil4Yg5Z+55YW76K6h5YiSHwMFKS9qd2NfZ2x4dC9QbGFuX1RyYWluL1BsYW5UcmFpbl9RdWVyeS5hc3B4HwQFDOWfueWFu+iuoeWIkh8FZx8GZx8HBSkvandjX2dseHQvcGxhbl90cmFpbi9wbGFudHJhaW5fcXVlcnkuYXNweB8IZ2QUKwACFhAfAAUQ4peGIOWtpuS4muavlOWvuR8CBRDil4Yg5a2m5Lia5q+U5a+5HwMFLi9qd2NfZ2x4dC9QbGFuX1RvX1N0dWR5L1BsYW5Ub1N0dWR5X1F1ZXJ5LmFzcHgfBAUM5a2m5Lia5q+U5a+5HwVnHwZnHwcFLi9qd2NfZ2x4dC9wbGFuX3RvX3N0dWR5L3BsYW50b3N0dWR5X3F1ZXJ5LmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDlrabkuJrpooToraYfAgUQ4peGIOWtpuS4mumihOitph8DBSsvandjX2dseHQvUGxhbl9Ub19TdHVkeS9TdHVkeV9XYXJubmluZy5hc3B4HwQFDOWtpuS4mumihOitph8FZx8GZx8HBSsvandjX2dseHQvcGxhbl90b19zdHVkeS9zdHVkeV93YXJubmluZy5hc3B4HwhnZGQCCQ88KwANAgAPFgIfAWdkDBQrAAcFFzA6MCwwOjEsMDoyLDA6MywwOjQsMDo1FCsAAhYQHwAFESB8IHwg5Y2z5pe25LqL5YqhHwIFESB8IHwg5Y2z5pe25LqL5YqhHwMFJi9qd2NfZ2x4dC9TdHVfTm90aWNlL05vdGljZV9RdWVyeS5hc3B4HwQFFeWQhOexu+mAmuefpeWPiuS6i+WKoR8FZx8GZx8HBSYvandjX2dseHQvc3R1X25vdGljZS9ub3RpY2VfcXVlcnkuYXNweB8IZ2QUKwACFhAfAAURIHwgfCDlrabnlJ/pgInor74fAgURIHwgfCDlrabnlJ/pgInor74fAwUbL2p3Y19nbHh0L1NpdGVNYXAvVGVzdC5hc3B4HwQFDOWtpueUn+mAieivvh8FZx8GZx8HBRsvandjX2dseHQvc2l0ZW1hcC90ZXN0LmFzcHgfCGcUKwAGBRMwOjAsMDoxLDA6MiwwOjMsMDo0FCsAAhYQHwAFE+KXhiDor77nqIvmn6Xor6LjgIAfAgUT4peGIOivvueoi+afpeivouOAgB8DBSkvandjX2dseHQvQ291cnNlX0Nob2ljZS9Db3Vyc2VfUXVlcnkuYXNweB8EBRXlvIDorr7nmoTor77nqIvmn6Xor6IfBWcfBmcfBwUpL2p3Y19nbHh0L2NvdXJzZV9jaG9pY2UvY291cnNlX3F1ZXJ5LmFzcHgfCGdkFCsAAhYQHwAFE+KXhiDlrabnlJ/pgInor77jgIAfAgUT4peGIOWtpueUn+mAieivvuOAgB8DBSovandjX2dseHQvQ291cnNlX0Nob2ljZS9Db3Vyc2VfQ2hvaWNlLmFzcHgfBAUM5a2m55Sf6YCJ6K++HwVnHwZnHwcFKi9qd2NfZ2x4dC9jb3Vyc2VfY2hvaWNlL2NvdXJzZV9jaG9pY2UuYXNweB8IZ2QUKwACFhAfAAUT4peGIOWtpueUn+mAgOivvuOAgB8CBRPil4Yg5a2m55Sf6YCA6K++44CAHwMFKy9qd2NfZ2x4dC9Db3Vyc2VfQ2hvaWNlL0NvdXJzZV9BYmFuZG9uLmFzcHgfBAUM5a2m55Sf6YCA6K++HwVnHwZnHwcFKy9qd2NfZ2x4dC9jb3Vyc2VfY2hvaWNlL2NvdXJzZV9hYmFuZG9uLmFzcHgfCGdkFCsAAhYQHwAFE+KXhiDpgInkv67or77ooajjgIAfAgUT4peGIOmAieS/ruivvuihqOOAgB8DBSwvandjX2dseHQvQ291cnNlX0Nob2ljZS9Db3Vyc2VfU2NoZWR1bGUuYXNweB8EBQzpgInkv67or77ooagfBWcfBmcfBwUsL2p3Y19nbHh0L2NvdXJzZV9jaG9pY2UvY291cnNlX3NjaGVkdWxlLmFzcHgfCGdkFCsAAhYQHwAFE+KXhiDlt7LpgInor77nqIvjgIAfAgUT4peGIOW3sumAieivvueoi+OAgB8DBS0vandjX2dseHQvQ291cnNlX0Nob2ljZS9TdHVfQ291cnNlX1F1ZXJ5LmFzcHgfBAUV5bey6YCJ5L+u6K++56iL5p+l6K+iHwVnHwZnHwcFLS9qd2NfZ2x4dC9jb3Vyc2VfY2hvaWNlL3N0dV9jb3Vyc2VfcXVlcnkuYXNweB8IZ2QUKwACFhAfAAURIHwgfCDmiJDnu6nmn6Xor6IfAgURIHwgfCDmiJDnu6nmn6Xor6IfAwUdL2p3Y19nbHh0L1NpdGVNYXAvVGVzdC5hc3B4IzMfBAUS5a2m55Sf5oiQ57up5p+l6K+iHwVnHwZnHwcFHS9qd2NfZ2x4dC9zaXRlbWFwL3Rlc3QuYXNweCMzHwhnFCsAAwUHMDowLDA6MRQrAAIWEh8CBRHil4Yg5oiQ57up5p+l6K+iIB8IZx4IU2VsZWN0ZWRnHwAFEeKXhiDmiJDnu6nmn6Xor6IgHwMFKC9qd2NfZ2x4dC9TdHVkZW50X1Njb3JlL1Njb3JlX1F1ZXJ5LmFzcHgfBWcfBmcfBAUM5oiQ57up5p+l6K+iHwcFKC9qd2NfZ2x4dC9zdHVkZW50X3Njb3JlL3Njb3JlX3F1ZXJ5LmFzcHhkFCsAAhYQHwAFFOKXhiDlj4zlrabkvY3miJDnu6kgHwIFFOKXhiDlj4zlrabkvY3miJDnu6kgHwMFMS9qd2NfZ2x4dC9Eb3VibGVEZWdyZWVfU2NvcmUvRGJsRGVncmVlX1Njb3JlLmFzcHgfBAUV5Y+M5a2m5L2N5oiQ57up5p+l6K+iHwVnHwZnHwcFMS9qd2NfZ2x4dC9kb3VibGVkZWdyZWVfc2NvcmUvZGJsZGVncmVlX3Njb3JlLmFzcHgfCGdkFCsAAhYQHwAFESB8IHwg5ZCE57G75oql5ZCNHwIFESB8IHwg5ZCE57G75oql5ZCNHwMFHS9qd2NfZ2x4dC9TaXRlTWFwL1Rlc3QuYXNweCM1HwQFDOWQhOexu+aKpeWQjR8FZx8GZx8HBR0vandjX2dseHQvc2l0ZW1hcC90ZXN0LmFzcHgjNR8IZxQrAAgFGzA6MCwwOjEsMDoyLDA6MywwOjQsMDo1LDA6NhQrAAIWEB8ABRHil4Yg562J57qn6ICD6K+VIB8CBRHil4Yg562J57qn6ICD6K+VIB8DBSUvandjX2dseHQvY2V0X3N5c3RlbS9zdHVkZW50X2NldC5hc3B4HwQFEuetiee6p+iAg+ivleaKpeWQjR8FZx8GZx8HBSUvandjX2dseHQvY2V0X3N5c3RlbS9zdHVkZW50X2NldC5hc3B4HwhnZBQrAAIWEB8ABRHil4Yg5ZCN5Y2V5p+l6K+iIB8CBRHil4Yg5ZCN5Y2V5p+l6K+iIB8DBSYvandjX2dseHQvY2V0X3N5c3RlbS9zdHVkZW50X0xpc3QuYXNweB8EBR7nrYnnuqfogIPor5XmiqXlkI3lkI3ljZXmn6Xor6IfBWcfBmcfBwUmL2p3Y19nbHh0L2NldF9zeXN0ZW0vc3R1ZGVudF9saXN0LmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDmr5XkuJrorr7orqEfAgUQ4peGIOavleS4muiuvuiuoR8DBS0vandjX2dseHQvR3JhZHVEZXNpZ25fc3lzdGVtL0dyYWR1RGVzaWduLmFzcHgfBAUY5q+V5Lia6K6+6K6h6K++6aKY55Sz5oqlHwVnHwZnHwcFLS9qd2NfZ2x4dC9ncmFkdWRlc2lnbl9zeXN0ZW0vZ3JhZHVkZXNpZ24uYXNweB8IZ2QUKwACFhAfAAUQ4peGIOmHjeS/ruaKpeWQjR8CBRDil4Yg6YeN5L+u5oql5ZCNHwMFKC9qd2NfZ2x4dC9SZXBlYXRfU3R1ZHkvUmVwZWF0X1N0dWR5LmFzcHgfBAUM6YeN5L+u5oql5ZCNHwVnHwZnHwcFKC9qd2NfZ2x4dC9yZXBlYXRfc3R1ZHkvcmVwZWF0X3N0dWR5LmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDph43ogIPmiqXlkI0fAgUQ4peGIOmHjeiAg+aKpeWQjR8DBSYvandjX2dseHQvUmVwZWF0X0V4YW0vUmVwZWF0X0V4YW0uYXNweB8EBQzph43ogIPmiqXlkI0fBWcfBmcfBwUmL2p3Y19nbHh0L3JlcGVhdF9leGFtL3JlcGVhdF9leGFtLmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDmuIXnkIbogIPor5UfAgUQ4peGIOa4heeQhuiAg+ivlR8DBSQvandjX2dseHQvQ2xlYXJfRXhhbS9DbGVhcl9FeGFtLmFzcHgfBAUS5riF55CG6ICD6K+V5oql5ZCNHwVnHwZnHwcFJC9qd2NfZ2x4dC9jbGVhcl9leGFtL2NsZWFyX2V4YW0uYXNweB8IZ2QUKwACFhAfAAUW4peGIOesrOS6jOWtpuS9jeaKpeWQjR8CBRbil4Yg56ys5LqM5a2m5L2N5oql5ZCNHwMFKi9qd2NfZ2x4dC9Eb3VibGVfRGVncmVlL0RvdWJsZV9EZWdyZWUuYXNweB8EBQ/lj4zlrabkvY3miqXlkI0fBWcfBmcfBwUqL2p3Y19nbHh0L2RvdWJsZV9kZWdyZWUvZG91YmxlX2RlZ3JlZS5hc3B4HwhnZBQrAAIWEB8ABREgfCB8IOWtpueUn+ivhOaVmR8CBREgfCB8IOWtpueUn+ivhOaVmR8DBSQvandjX2dseHQvU3R1X0Fzc2Vzcy9TdHVfQXNzZXNzLmFzcHgfBAUM5a2m55Sf6K+E5pWZHwVnHwZnHwcFJC9qd2NfZ2x4dC9zdHVfYXNzZXNzL3N0dV9hc3Nlc3MuYXNweB8IZ2QUKwACFhAfAAURIHwgfCDkuKrkurrkv6Hmga8fAgURIHwgfCDkuKrkurrkv6Hmga8fAwUdL2p3Y19nbHh0L1NpdGVNYXAvVGVzdC5hc3B4IzEfBAUM5Liq5Lq65L+h5oGvHwVnHwZnHwcFHS9qd2NfZ2x4dC9zaXRlbWFwL3Rlc3QuYXNweCMxHwhnFCsABAULMDowLDA6MSwwOjIUKwACFhAfAAUQ4peGIOS4quS6uuS/oeaBrx8CBRDil4Yg5Liq5Lq65L+h5oGvHwMFIC9qd2NfZ2x4dC9TdHVfSW5mby9TdHVfaW5mby5hc3B4HwQFGOWtpueUn+S4quS6uuS/oeaBr+afpeivoh8FZx8GZx8HBSAvandjX2dseHQvc3R1X2luZm8vc3R1X2luZm8uYXNweB8IZ2QUKwACFhAfAAUQ4peGIOS/oeaBr+S/ruaUuR8CBRDil4Yg5L+h5oGv5L+u5pS5HwMFJi9qd2NfZ2x4dC9TdHVfSW5mby9TdHVpbmZvX01vZGlmeS5hc3B4HwQFGOWtpueUn+S4quS6uuS/oeaBr+S/ruaUuR8FZx8GZx8HBSYvandjX2dseHQvc3R1X2luZm8vc3R1aW5mb19tb2RpZnkuYXNweB8IZ2QUKwACFhAfAAUQ4peGIOWvhueggeS/ruaUuR8CBRDil4Yg5a+G56CB5L+u5pS5HwMFJC9qd2NfZ2x4dC9TdHVfSW5mby9TdHVfUGFzc3dvcmQuYXNweB8EBRjlrabnlJ/nlKjmiLflr4bnoIHkv67mlLkfBWcfBmcfBwUkL2p3Y19nbHh0L3N0dV9pbmZvL3N0dV9wYXNzd29yZC5hc3B4HwhnZGQCCw9kFghmDxAPFgYeDURhdGFUZXh0RmllbGQFBHRleHQeDkRhdGFWYWx1ZUZpZWxkBQV2YWx1ZR8BZ2QQFRoIKOS4jeWhqykEMjAyMAQyMDE5BDIwMTgEMjAxNwQyMDE2BDIwMTUEMjAxNAQyMDEzBDIwMTIEMjAxMQQyMDEwBDIwMDkEMjAwOAQyMDA3BDIwMDYEMjAwNQQyMDA0BDIwMDMEMjAwMgQyMDAxBDIwMDAEMTk5OQQxOTk4BDE5OTcEMTk5NhUaATAEMjAyMAQyMDE5BDIwMTgEMjAxNwQyMDE2BDIwMTUEMjAxNAQyMDEzBDIwMTIEMjAxMQQyMDEwBDIwMDkEMjAwOAQyMDA3BDIwMDYEMjAwNQQyMDA0BDIwMDMEMjAwMgQyMDAxBDIwMDAEMTk5OQQxOTk4BDE5OTcEMTk5NhQrAxpnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZxYBZmQCAQ8QDxYGHwoFBHRleHQfCwUFdmFsdWUfAWdkEBUFCCjkuI3loaspDOaYpeWto+WtpuacnwzlpI/lraPlrabmnJ8M56eL5a2j5a2m5pyfDOWGrOWto+WtpuacnxUFATABMQEyATMBNBQrAwVnZ2dnZxYBZmQCBg88KwANAgAPFggeCFBhZ2VTaXplAhQfAWceC18hSXRlbUNvdW50AlseB0NhcHRpb24FDyjlhbE5MeadoS8x6aG1KWQBEBYCAgcCCBYCPCsABQEAFgIeB1Zpc2libGVoPCsABQEAFgIfD2gWAmZmFgJmD2QWuAECAQ9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFDOmHkeW3peWunuS5oGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI1NmRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQI3NmRkAggPDxYCHwAFBUI4MDIzZGQCAg9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFDOmHkeW3peWunuS5oGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI2N2RkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI2NWRkAggPDxYCHwAFBUI4MDIzZGQCAw9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFEk1hdGxhYuivreiogOWFpemXqGRkAgMPDxYCHwAFATFkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQPkuK1kZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUD5LitZGQCCA8PFgIfAAUJQk4wNDIxMTBCZGQCBA9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFKuS9juaIkOacrOWHuuWbveiHquWKqeaXhea4uOefpeivhuWPiuaUu+eVpWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQPkvJhkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUD5LyYZGQCCA8PFgIfAAUJQk4wNDMxMTBCZGQCBQ9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFD+euoeeQhueahOiJuuacr2RkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI5MWRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI5MGRkAggPDxYCHwAFCUROMTIzMTEwQmRkAgYPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRTpq5jnrYnmlbDlrabihaAo5LiAKWRkAgMPDxYCHwAFAzUuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjQyZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjM3ZGQCCA8PFgIfAAUFRjAwMDFkZAIHD2QWEmYPDxYCHwAFBDIwMTFkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUU6auY562J5pWw5a2m4oWgKOS4gClkZAIDDw8WAh8ABQM1LjVkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQI2MGRkAgYPDxYCHwAFAzUuNWRkAgcPDxYCHwAFAjYwZGQCCA8PFgIfAAUFRjAwMDFkZAIID2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU6auY562J5pWw5a2m4oWgKOS4gClkZAIDDw8WAh8ABQM1LjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQEwZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAXFkZAIIDw8WAh8ABQVGMDAwMWRkAgkPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTpq5jnrYnmlbDlrabihaAo5LqMKWRkAgMPDxYCHwAFAzUuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjUwZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjQzZGQCCA8PFgIfAAUFRjAwMDJkZAIKD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU6auY562J5pWw5a2m4oWgKOS6jClkZAIDDw8WAh8ABQM1LjVkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQI0MmRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQI0MmRkAggPDxYCHwAFBUYwMDAyZGQCCw9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOmrmOetieaVsOWtpuKFoCjkuowpZGQCAw8PFgIfAAUDNS41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCMzhkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCMjVkZAIIDw8WAh8ABQVGMDAwMmRkAgwPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTpq5jnrYnmlbDlrabihaAo5LqMKWRkAgMPDxYCHwAFAzUuNWRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjIxZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjIxZGQCCA8PFgIfAAUFRjAwMDJkZAIND2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU6auY562J5pWw5a2m4oWgKOS6jClkZAIDDw8WAh8ABQM1LjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQIzM2RkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIzM2RkAggPDxYCHwAFBUYwMDAyZGQCDg9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOmrmOetieaVsOWtpuKFoCjkuowpZGQCAw8PFgIfAAUDNS41ZGQCBA8PFgIfAAUG6KGl6ICDZGQCBQ8PFgIfAAUCNjBkZAIGDw8WAh8ABQM1LjVkZAIHDw8WAh8ABQI2MGRkAggPDxYCHwAFBUYwMDAyZGQCDw9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFD+e6v+aAp+S7o+aVsOKFoGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI2MmRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI1M2RkAggPDxYCHwAFBUYwMDA3ZGQCEA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFD+amgueOh+e7n+iuoeKFoGRkAgMPDxYCHwAFAzIuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjQ3ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjQxZGQCCA8PFgIfAAUFRjAwMDlkZAIRD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUP5qaC546H57uf6K6h4oWgZGQCAw8PFgIfAAUDMi41ZGQCBA8PFgIfAAUG6KGl6ICDZGQCBQ8PFgIfAAUCMTdkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCMTdkZAIIDw8WAh8ABQVGMDAwOWRkAhIPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABQ/mpoLnjofnu5/orqHihaBkZAIDDw8WAh8ABQMyLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI0NmRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQI0MGRkAggPDxYCHwAFBUYwMDA5ZGQCEw9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFD+amgueOh+e7n+iuoeKFoGRkAgMPDxYCHwAFAzIuNWRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjQwZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjQwZGQCCA8PFgIfAAUFRjAwMDlkZAIUD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU5aSn5a2m54mp55CG4oWgKOS4gClkZAIDDw8WAh8ABQMzLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI0OWRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIzNWRkAggPDxYCHwAFBUYwMDEyZGQCFQ9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOWkp+WtpueJqeeQhuKFoCjkuIApZGQCAw8PFgIfAAUDMy41ZGQCBA8PFgIfAAUG6KGl6ICDZGQCBQ8PFgIfAAUCMjdkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCMjdkZAIIDw8WAh8ABQVGMDAxMmRkAhYPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRTlpKflrabniannkIbihaAo5LiAKWRkAgMPDxYCHwAFAzMuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjY3ZGQCBg8PFgIfAAUDMy41ZGQCBw8PFgIfAAUCNjFkZAIIDw8WAh8ABQVGMDAxMmRkAhcPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRTlpKflrabniannkIbihaAo5LqMKWRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI2MWRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI0OWRkAggPDxYCHwAFBUYwMDEzZGQCGA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFDOemu+aVo+aVsOWtpmRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3MGRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI2OGRkAggPDxYCHwAFBUYwMDE3ZGQCGQ9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOeJqeeQhuWunumqjOKFoCjkuIApZGQCAw8PFgIfAAUDMS41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODZkZAIGDw8WAh8ABQMxLjVkZAIHDw8WAh8ABQEwZGQCCA8PFgIfAAUFRjcwMDFkZAIaD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUU54mp55CG5a6e6aqM4oWgKOS6jClkZAIDDw8WAh8ABQMxLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI2OGRkAgYPDxYCHwAFAzEuNWRkAgcPDxYCHwAFATBkZAIIDw8WAh8ABQVGNzAwMmRkAhsPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQbkvZPogrJkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUG5ZCI5qC8ZGQCBg8PFgIfAAUBMWRkAgcPDxYCHwAFBuWQiOagvGRkAggPDxYCHwAFBUcwMDAxZGQCHA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFBuS9k+iCsmRkAgMPDxYCHwAFATFkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQblkIjmoLxkZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUG5ZCI5qC8ZGQCCA8PFgIfAAUFRzAwMDFkZAIdD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUG5L2T6IKyZGQCAw8PFgIfAAUBMWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFBuWQiOagvGRkAgYPDxYCHwAFATFkZAIHDw8WAh8ABQblkIjmoLxkZAIIDw8WAh8ABQVHMDAwMWRkAh4PZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABQbkvZPogrJkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUG5ZCI5qC8ZGQCBg8PFgIfAAUBMWRkAgcPDxYCHwAFBuWQiOagvGRkAggPDxYCHwAFBUcwMDAxZGQCHw9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFD+iuoeeul+acuuWfuuehgGRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NmRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI4OGRkAggPDxYCHwAFBUgwMDAxZGQCIA9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFE0Por63oqIDnqIvluo/orr7orqFkZAIDDw8WAh8ABQE0ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODNkZAIGDw8WAh8ABQE0ZGQCBw8PFgIfAAUCODJkZAIIDw8WAh8ABQVIMTAwNWRkAiEPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRZKYXZh6auY57qn5bqU55So5byA5Y+RZGQCAw8PFgIfAAUBM2RkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjgzZGQCBg8PFgIfAAUBM2RkAgcPDxYCHwAFAjc2ZGQCCA8PFgIfAAUFSDEwMDlkZAIiD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUYT3JhY2xl5pWw5o2u5bqT5LiO5bqU55SoZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjUzZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjM1ZGQCCA8PFgIfAAUFSDEwMTRkZAIjD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUYT3JhY2xl5pWw5o2u5bqT5LiO5bqU55SoZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjYwZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjY1ZGQCCA8PFgIfAAUFSDEwMTRkZAIkD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUPV2Vi56iL5bqP6K6+6K6hZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjk2ZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjk4ZGQCCA8PFgIfAAUFSDEwMThkZAIlD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUM5pON5L2c57O757ufZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc0ZGQCBg8PFgIfAAUBNGRkAgcPDxYCHwAFAjcxZGQCCA8PFgIfAAUFSDEwMjJkZAImD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUb6K6h566X5py65a6J5YWo5LiO5a+G56CB5a2mZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg3ZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjg1ZGQCCA8PFgIfAAUFSDEwNDVkZAInD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUP6K6h566X5py6572R57ucZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg5ZGQCBg8PFgIfAAUBNGRkAgcPDxYCHwAFAjg3ZGQCCA8PFgIfAAUFSDEwNDlkZAIoD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUY6K6h566X5py657uE5oiQ5LiO57uT5p6EZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjQ1ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjIyZGQCCA8PFgIfAAUFSDEwNTJkZAIpD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUY6K6h566X5py657uE5oiQ5LiO57uT5p6EZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjI1ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjI1ZGQCCA8PFgIfAAUFSDEwNTJkZAIqD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUY6K6h566X5py657uE5oiQ5LiO57uT5p6EZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc0ZGQCBg8PFgIfAAUBNGRkAgcPDxYCHwAFAjY2ZGQCCA8PFgIfAAUFSDEwNTJkZAIrD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUd6Z2i5ZCR5a+56LGh56iL5bqP6K6+6K6hKEMgIClkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCOTFkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCODlkZAIIDw8WAh8ABQVIMTA2MmRkAiwPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABQzova/ku7blt6XnqItkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODBkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCNzVkZAIIDw8WAh8ABQVIMTA3MmRkAi0PZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRLova/ku7bpobnnm67nrqHnkIZkZAIDDw8WAh8ABQMxLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4M2RkAgYPDxYCHwAFAzEuNWRkAgcPDxYCHwAFAjc1ZGQCCA8PFgIfAAUFSDEwNzdkZAIuD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUb5pWw5o2u5LuT5bqT5LiO5pWw5o2u5oyW5o6YZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg0ZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjgwZGQCCA8PFgIfAAUFSDEwODVkZAIvD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUM5pWw5o2u57uT5p6EZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjYyZGQCBg8PFgIfAAUBNGRkAgcPDxYCHwAFAjQ3ZGQCCA8PFgIfAAUFSDEwODZkZAIwD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUY5pWw5o2u5bqT5Y6f55CG5LiO5bqU55SoZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjYzZGQCBg8PFgIfAAUBNGRkAgcPDxYCHwAFAjU4ZGQCCA8PFgIfAAUFSDEwODhkZAIxD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUY5pWw5o2u5bqT5Y6f55CG5LiO5bqU55SoZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjM2ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjM2ZGQCCA8PFgIfAAUFSDEwODhkZAIyD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUV566X5rOV5YiG5p6Q5LiO6K6+6K6hZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjcwZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjY1ZGQCCA8PFgIfAAUFSDEwOTNkZAIzD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUV5b6u5Z6L6K6h566X5py65oqA5pyvZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg2ZGQCBg8PFgIfAAUBNGRkAgcPDxYCHwAFAjgyZGQCCA8PFgIfAAUFSDExMDZkZAI0D2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUS5pWw5a2X6YC76L6R6K6+6K6hZGQCAw8PFgIfAAUBM2RkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc1ZGQCBg8PFgIfAAUBM2RkAgcPDxYCHwAFAjY5ZGQCCA8PFgIfAAUFSDExMjlkZAI1D2QWEmYPDxYCHwAFBDIwMTFkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUV6K6h566X5py65a2m56eR5qaC6K66ZGQCAw8PFgIfAAUDMC41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCOTNkZAIGDw8WAh8ABQMwLjVkZAIHDw8WAh8ABQI5M2RkAggPDxYCHwAFBUgxMTM0ZGQCNg9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFeiuoeeul+acuuWunueUqOaKgOacr2RkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI5MGRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI5MGRkAggPDxYCHwAFBUgxMTM1ZGQCNw9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFDOi9r+S7tua1i+ivlWRkAgMPDxYCHwAFAzEuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc3ZGQCBg8PFgIfAAUDMS41ZGQCBw8PFgIfAAUCNjhkZAIIDw8WAh8ABQVIMTE0NWRkAjgPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRBKMk1F56iL5bqP6K6+6K6hZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg4ZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjg5ZGQCCA8PFgIfAAUFSDExNTlkZAI5D2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUTd2luZG93c+eoi+W6j+iuvuiuoWRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4M2RkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI4NWRkAggPDxYCHwAFBUgxMTgyZGQCOg9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFE0FuZHJvaWTnqIvluo/orr7orqFkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCOTRkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCOTVkZAIIDw8WAh8ABQVIMTE4M2RkAjsPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABR/ova/ku7bmnrbmnoTkuI7orr7orqHvvIguTkVU77yJZGQCAw8PFgIfAAUBM2RkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc1ZGQCBg8PFgIfAAUBM2RkAgcPDxYCHwAFAjY2ZGQCCA8PFgIfAAUFSDExODVkZAI8D2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUi6L2v5Lu25p625p6E5LiO6K6+6K6h77yIamF2YSBFRe+8iWRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NWRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI5MGRkAggPDxYCHwAFBUgxMTg2ZGQCPQ9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFEEphdmHlvIDlj5Hln7rnoYBkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODJkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCNzRkZAIIDw8WAh8ABQVIMTE4OWRkAj4PZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRvmlbDmja7nu5PmnoTkuI7nqIvluo/orr7orqFkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODhkZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUCODZkZAIIDw8WAh8ABQVIMTE5MWRkAj8PZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRjnvZHnu5zlronlhajnvJbnqIvorr7orqFkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzZkZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUCODBkZAIIDw8WAh8ABQVIMTE5MmRkAkAPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABREgSkFWQemhueebruWunuiurWRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NGRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI4MmRkAggPDxYCHwAFBUgxMTkzZGQCQQ9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFGOaTjeS9nOezu+e7n+ivvueoi+iuvuiuoWRkAgMPDxYCHwAFATFkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3OGRkAgYPDxYCHwAFATFkZAIHDw8WAh8ABQI3NWRkAggPDxYCHwAFBUg4MDA5ZGQCQg9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFGOeoi+W6j+iuvuiuoee7vOWQiOiuvuiuoWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NmRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI4NmRkAggPDxYCHwAFBUg4MDEwZGQCQw9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFG+iuoeeul+acuue9kee7nOe7vOWQiOWunumqjGRkAgMPDxYCHwAFATFkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NmRkAgYPDxYCHwAFATFkZAIHDw8WAh8ABQI4MGRkAggPDxYCHwAFBUg4MDE1ZGQCRA9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFG+aVsOaNruW6k+W6lOeUqOivvueoi+iuvuiuoWRkAgMPDxYCHwAFATFkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NWRkAgYPDxYCHwAFATFkZAIHDw8WAh8ABQI3NWRkAggPDxYCHwAFBUg4MDIyZGQCRQ9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFuWkp+WtpuiLseivrTHnuqflkKzor7RkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNjhkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNjBkZAIIDw8WAh8ABQVQMDAwMWRkAkYPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRblpKflraboi7Hor60x57qn6K+75YaZZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc5ZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjcwZGQCCA8PFgIfAAUFUDAwMDJkZAJHD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUW5aSn5a2m6Iux6K+tMue6p+WQrOivtGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NGRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI2N2RkAggPDxYCHwAFBVAwMDAzZGQCSA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFuWkp+WtpuiLseivrTLnuqfor7vlhplkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzlkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNzNkZAIIDw8WAh8ABQVQMDAwNGRkAkkPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRblpKflraboi7Hor60z57qn5ZCs6K+0ZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjMyZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjMyZGQCCA8PFgIfAAUFUDAwMDVkZAJKD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUW5aSn5a2m6Iux6K+tM+e6p+WQrOivtGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQI0NmRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQI0NmRkAggPDxYCHwAFBVAwMDA1ZGQCSw9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFuWkp+WtpuiLseivrTPnuqflkKzor7RkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNDhkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCNDhkZAIIDw8WAh8ABQVQMDAwNWRkAkwPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRblpKflraboi7Hor60z57qn5ZCs6K+0ZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjMzZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjMzZGQCCA8PFgIfAAUFUDAwMDVkZAJND2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUW5aSn5a2m6Iux6K+tM+e6p+ivu+WGmWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4MWRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI2OWRkAggPDxYCHwAFBVAwMDA2ZGQCTg9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFuWkp+WtpuiLseivrTTnuqflkKzor7RkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNjBkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNzJkZAIIDw8WAh8ABQVQMDAwN2RkAk8PZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRblpKflraboi7Hor60057qn6K+75YaZZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjcwZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjUxZGQCCA8PFgIfAAUFUDAwMDhkZAJQD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU5bCx5Lia5oyH5a+86K++KOS4gClkZAIDDw8WAh8ABQMwLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQPkvJhkZAIGDw8WAh8ABQMwLjVkZAIHDw8WAh8ABQPkvJhkZAIIDw8WAh8ABQVRMDAwMWRkAlEPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTlsLHkuJrmjIflr7zor74o5LqMKWRkAgMPDxYCHwAFAzAuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFA+iJr2RkAgYPDxYCHwAFAzAuNWRkAgcPDxYCHwAFA+iJr2RkAggPDxYCHwAFBVEwMDAyZGQCUg9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFDOWGm+S6i+eQhuiuumRkAgMPDxYCHwAFAzAuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFA+iJr2RkAgYPDxYCHwAFAzAuNWRkAgcPDxYCHwAFA+iJr2RkAggPDxYCHwAFBVEwMDA1ZGQCUw9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFDOWGm+S6i+iuree7g2RkAgMPDxYCHwAFAzIuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc0ZGQCBg8PFgIfAAUDMi41ZGQCBw8PFgIfAAUCNzRkZAIIDw8WAh8ABQVRMDAwNmRkAlQPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABSHnvZHnu5zkv6Hmga/otYTmupDlvIDlj5HkuI7liKnnlKhkZAIDDw8WAh8ABQMxLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NWRkAgYPDxYCHwAFAzEuNWRkAgcPDxYCHwAFAjk1ZGQCCA8PFgIfAAUJUU4wMDIxMTBCZGQCVQ9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFG+mprOWFi+aAneS4u+S5ieWfuuacrOWOn+eQhmRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3OWRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI4NWRkAggPDxYCHwAFBVkwMDAxZGQCVg9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGOS4reWbvei/keeOsOS7o+WPsue6suimgWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NmRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI3MGRkAggPDxYCHwAFBVkwMDAyZGQCVw9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFPOavm+azveS4nOaAneaDs+WSjOS4reWbveeJueiJsuekvuS8muS4u+S5ieeQhuiuuuS9k+ezu+amguiuumRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NmRkAgYPDxYCHwAFATRkZAIHDw8WAh8ABQI3OWRkAggPDxYCHwAFBVkwMDA0ZGQCWA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOW9ouWKv+S4juaUv+etlijkuIApZGQCAw8PFgIfAAUDMC41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODBkZAIGDw8WAh8ABQMwLjVkZAIHDw8WAh8ABQI4MGRkAggPDxYCHwAFBVkwMDA1ZGQCWQ9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOW9ouWKv+S4juaUv+etlijkuowpZGQCAw8PFgIfAAUDMC41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCOTBkZAIGDw8WAh8ABQMwLjVkZAIHDw8WAh8ABQI5MGRkAggPDxYCHwAFBVkwMDA2ZGQCWg9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOW9ouWKv+S4juaUv+etlijkuIkpZGQCAw8PFgIfAAUDMC41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODVkZAIGDw8WAh8ABQMwLjVkZAIHDw8WAh8ABQI4NWRkAggPDxYCHwAFBVkwMDA3ZGQCWw9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFIeaAneaDs+mBk+W+t+S/ruWFu+S4juazleW+i+WfuuehgGRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3OWRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI3OGRkAggPDxYCHwAFBVkwMDEyZGQCXA8PFgIfD2hkZAIHDzwrAA0AZBgEBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WBQUpY3RsMDAkTWFpbkNvbnRlbnRQbGFjZUhvbGRlciRSYWRpb0J1dHRvbjEFKWN0bDAwJE1haW5Db250ZW50UGxhY2VIb2xkZXIkUmFkaW9CdXR0b24xBSljdGwwMCRNYWluQ29udGVudFBsYWNlSG9sZGVyJFJhZGlvQnV0dG9uMgUmY3RsMDAkTWFpbkNvbnRlbnRQbGFjZUhvbGRlciRDaGVja0JveDEFJmN0bDAwJE1haW5Db250ZW50UGxhY2VIb2xkZXIkQnRuU2VhcmNoBSdjdGwwMCRNYWluQ29udGVudFBsYWNlSG9sZGVyJEdyaWRTY29yZTEPZ2QFJmN0bDAwJE1haW5Db250ZW50UGxhY2VIb2xkZXIkR3JpZFNjb3JlDzwrAAoBCAIBZAULY3RsMDAkTWVudTEPD2QFJSB8fCB8fCDmiJDnu6nmn6Xor6Jc4peGIOaIkOe7qeafpeivoiBkjORfjtjeOba9H8BpHiMnb/0y17g=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/jwc_glxt/WebResource.axd?d=N8CCZ2fzUcUVnSuTusG42A2&amp;t=633750804258295239" type="text/javascript"></script>


<script src="/jwc_glxt/WebResource.axd?d=K2-cFEUfy9FFz_gTZTQDUA2&amp;t=633750804258295239" type="text/javascript"></script>
<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWJALOzM2GBALVtaKfCgKb2oHDAgKGzf/rAQKGzYOHCQKGzdfvCwKGzfuIAwKGzY+kCAKGzZPBAQKGzaf6BgKGzcuXDgKGzd+wBwKGzePtDALt9NH0CwLt9OWRAwLt9Mn4BQLt9N2VDQLt9OHOAgLt9PXrCwLt9JmHAwLt9K2gCALt9LHdAQLt9MX2BgKpl6yAAwKpl7C9CAKpl4SEDQKpl6ihAgLbxvmxDALExvmxDALFxvmxDALGxvmxDALHxvmxDAKTn4DADwKTn/TkBgLS+ZvbCQLM08eVCs2fxfp3SC4CeVuE15P7vYdiEjRy" />
</div>
        
        
        
        
        <div>
            <table width="100%" height="102" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="topbj_bgimage">
                        <table width="100%" height="102" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td colspan="3" class="top1_bgimage" width="100%" height="71">
                                </td>
                            </tr>
                            <tr>
                                <td width="16%" class="top2_bgimage">
                                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="3">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                &nbsp;&nbsp;&nbsp;&nbsp;『<span id="ctl00_lblSignIn">2011112243晏青山</span>』
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td align="left" class="top3_bgimage">
                                    <table width="100%" height="31" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="9%">
                                            </td>
                                            <td>
                                                <table height="31" border="0" cellpadding="0" cellspacing="0">

                                               <tr>
                                                        <td rowspan="2"  width="0" height="31">
                                                        </td>
                                                        <td height="8">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <a href="#ctl00_Menu2_SkipLink"><img alt="跳过导航链接" src="/jwc_glxt/WebResource.axd?d=Oj9yMkY1i7DnctaSQkBVvA2&amp;t=633750804258295239" width="0" height="0" style="border-width:0px;" /></a><table id="ctl00_Menu2" class="ctl00_Menu2_2" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学业预警" id="ctl00_Menu2n0"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu2_1" href="/jwc_glxt/SiteMap/Test.aspx#32">学业预警</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=YdDroVtKpYC2ojBZfGdludq2MCydAC53AduEDWQDKK41&amp;t=633750804258295239" alt="展开 学业预警" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td>
	</tr>
</table><div id="ctl00_Menu2n0Items" class="ctl00_Menu2_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="培养计划" id="ctl00_Menu2n1">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu2_1" href="/jwc_glxt/Plan_Train/PlanTrain_Query.aspx">◆ 培养计划</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学业比对" id="ctl00_Menu2n2">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu2_1" href="/jwc_glxt/Plan_To_Study/PlanToStudy_Query.aspx">◆ 学业比对</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学业预警" id="ctl00_Menu2n3">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu2_1" href="/jwc_glxt/Plan_To_Study/Study_Warnning.aspx">◆ 学业预警</a></td>
				</tr>
			</table></td>
		</tr>
	</table><div class="ctl00_Menu2_0" id="ctl00_Menu2n0ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=vRvdomox9nPUZU6RAfHSuupWD4q4arxIO4TuXFtwJfU1&amp;t=633750804258295239" alt="向上滚动" />
	</div><div class="ctl00_Menu2_0" id="ctl00_Menu2n0ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=oV57qLue6SBh1ZUy3xE2MbDGw1gEZ1phRwSeOE-hjuw1&amp;t=633750804258295239" alt="向下滚动" />
	</div>
</div><a id="ctl00_Menu2_SkipLink"></a>
                                                        
                                                          </td>
                                                          <td>
                                                          <a href="#ctl00_Menu1_SkipLink"><img alt="跳过导航链接" src="/jwc_glxt/WebResource.axd?d=Oj9yMkY1i7DnctaSQkBVvA2&amp;t=633750804258295239" width="0" height="0" style="border-width:0px;" /></a><table id="ctl00_Menu1" class="ctl00_Menu1_2" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="各类通知及事务" id="ctl00_Menu1n0"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Stu_Notice/Notice_Query.aspx"> | | 即时事务</a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生选课" id="ctl00_Menu1n1"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx"> | | 学生选课</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=YdDroVtKpYC2ojBZfGdludq2MCydAC53AduEDWQDKK41&amp;t=633750804258295239" alt="展开  | | 学生选课" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生成绩查询" id="ctl00_Menu1n2"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx#3"> | | 成绩查询</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=YdDroVtKpYC2ojBZfGdludq2MCydAC53AduEDWQDKK41&amp;t=633750804258295239" alt="展开  | | 成绩查询" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="各类报名" id="ctl00_Menu1n3"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx#5"> | | 各类报名</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=YdDroVtKpYC2ojBZfGdludq2MCydAC53AduEDWQDKK41&amp;t=633750804258295239" alt="展开  | | 各类报名" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生评教" id="ctl00_Menu1n4"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Stu_Assess/Stu_Assess.aspx"> | | 学生评教</a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="个人信息" id="ctl00_Menu1n5"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx#1"> | | 个人信息</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=YdDroVtKpYC2ojBZfGdludq2MCydAC53AduEDWQDKK41&amp;t=633750804258295239" alt="展开  | | 个人信息" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td>
	</tr>
</table><div id="ctl00_Menu1n1Items" class="ctl00_Menu1_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="开设的课程查询" id="ctl00_Menu1n6">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Course_Choice/Course_Query.aspx">◆ 课程查询　</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生选课" id="ctl00_Menu1n7">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Course_Choice/Course_Choice.aspx">◆ 学生选课　</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生退课" id="ctl00_Menu1n8">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Course_Choice/Course_Abandon.aspx">◆ 学生退课　</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="选修课表" id="ctl00_Menu1n9">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Course_Choice/Course_Schedule.aspx">◆ 选修课表　</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="已选修课程查询" id="ctl00_Menu1n10">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Course_Choice/Stu_Course_Query.aspx">◆ 已选课程　</a></td>
				</tr>
			</table></td>
		</tr>
	</table><div class="ctl00_Menu1_0" id="ctl00_Menu1n1ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=vRvdomox9nPUZU6RAfHSuupWD4q4arxIO4TuXFtwJfU1&amp;t=633750804258295239" alt="向上滚动" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n1ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=oV57qLue6SBh1ZUy3xE2MbDGw1gEZ1phRwSeOE-hjuw1&amp;t=633750804258295239" alt="向下滚动" />
	</div>
</div><div id="ctl00_Menu1n2Items" class="ctl00_Menu1_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="成绩查询" id="ctl00_Menu1n11">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Student_Score/Score_Query.aspx">◆ 成绩查询 </a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="双学位成绩查询" id="ctl00_Menu1n12">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/DoubleDegree_Score/DblDegree_Score.aspx">◆ 双学位成绩 </a></td>
				</tr>
			</table></td>
		</tr>
	</table><div class="ctl00_Menu1_0" id="ctl00_Menu1n2ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=vRvdomox9nPUZU6RAfHSuupWD4q4arxIO4TuXFtwJfU1&amp;t=633750804258295239" alt="向上滚动" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n2ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=oV57qLue6SBh1ZUy3xE2MbDGw1gEZ1phRwSeOE-hjuw1&amp;t=633750804258295239" alt="向下滚动" />
	</div>
</div><div id="ctl00_Menu1n3Items" class="ctl00_Menu1_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="等级考试报名" id="ctl00_Menu1n13">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/cet_system/student_cet.aspx">◆ 等级考试 </a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="等级考试报名名单查询" id="ctl00_Menu1n14">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/cet_system/student_List.aspx">◆ 名单查询 </a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="毕业设计课题申报" id="ctl00_Menu1n15">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/GraduDesign_system/GraduDesign.aspx">◆ 毕业设计</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="重修报名" id="ctl00_Menu1n16">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Repeat_Study/Repeat_Study.aspx">◆ 重修报名</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="重考报名" id="ctl00_Menu1n17">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Repeat_Exam/Repeat_Exam.aspx">◆ 重考报名</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="清理考试报名" id="ctl00_Menu1n18">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Clear_Exam/Clear_Exam.aspx">◆ 清理考试</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="双学位报名" id="ctl00_Menu1n19">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Double_Degree/Double_Degree.aspx">◆ 第二学位报名</a></td>
				</tr>
			</table></td>
		</tr>
	</table><div class="ctl00_Menu1_0" id="ctl00_Menu1n3ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=vRvdomox9nPUZU6RAfHSuupWD4q4arxIO4TuXFtwJfU1&amp;t=633750804258295239" alt="向上滚动" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n3ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=oV57qLue6SBh1ZUy3xE2MbDGw1gEZ1phRwSeOE-hjuw1&amp;t=633750804258295239" alt="向下滚动" />
	</div>
</div><div id="ctl00_Menu1n5Items" class="ctl00_Menu1_0">
	<table border="0" cellpadding="0" cellspacing="0">
		<tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生个人信息查询" id="ctl00_Menu1n20">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Stu_Info/Stu_info.aspx">◆ 个人信息</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生个人信息修改" id="ctl00_Menu1n21">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Stu_Info/Stuinfo_Modify.aspx">◆ 信息修改</a></td>
				</tr>
			</table></td>
		</tr><tr onmouseover="Menu_HoverDynamic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生用户密码修改" id="ctl00_Menu1n22">
			<td><table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="white-space:nowrap;width:100%;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Stu_Info/Stu_Password.aspx">◆ 密码修改</a></td>
				</tr>
			</table></td>
		</tr>
	</table><div class="ctl00_Menu1_0" id="ctl00_Menu1n5ItemsUp" onmouseover="PopOut_Up(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=vRvdomox9nPUZU6RAfHSuupWD4q4arxIO4TuXFtwJfU1&amp;t=633750804258295239" alt="向上滚动" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n5ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=oV57qLue6SBh1ZUy3xE2MbDGw1gEZ1phRwSeOE-hjuw1&amp;t=633750804258295239" alt="向下滚动" />
	</div>
</div><a id="ctl00_Menu1_SkipLink"></a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table height="31" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td rowspan="2"  width="0" height="31">
                                                        </td>
                                                        <td height="8">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table height="31" border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td rowspan="2" class="top4_bgimage" width="39" height="31">
                                                        </td>
                                                        <td height="8" width="60">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">
                                                            <a href="../Login.aspx?xttc=1" target="_top">退出</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="6%" class="top5_bgimage" height="31">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
        <div style="text-align: center" class="table_bgcolor">
            <div  style="width: 96%" >
                
    
    <table class="table_bordercolor" border="1" cellpadding="1" cellspacing="0" style="height: 25px;width: 100%">
     <caption><h2>学生个人成绩查询</h2></caption>
        <tr>
            <td class="table_titlebgcolor">
                学年：<select name="ctl00$MainContentPlaceHolder$School_Year" id="ctl00_MainContentPlaceHolder_School_Year" ValueField="Value" TextField="Text" style="border-style:Groove;">
	<option selected="selected" value="0">(不填)</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>

</select>&nbsp;&nbsp;
                学期：<select name="ctl00$MainContentPlaceHolder$School_Term" id="ctl00_MainContentPlaceHolder_School_Term" ValueField="Value" TextField="Text" style="border-style:Groove;width:100px;">
	<option selected="selected" value="0">(不填)</option>
	<option value="1">春季学期</option>
	<option value="2">夏季学期</option>
	<option value="3">秋季学期</option>
	<option value="4">冬季学期</option>

</select>
                &nbsp;&nbsp;
                排序方式：
                <input id="ctl00_MainContentPlaceHolder_RadioButton1" type="radio" name="ctl00$MainContentPlaceHolder$score_q" value="RadioButton1" /><label for="ctl00_MainContentPlaceHolder_RadioButton1">按学年学期</label>
                <input id="ctl00_MainContentPlaceHolder_RadioButton2" type="radio" name="ctl00$MainContentPlaceHolder$score_q" value="RadioButton2" checked="checked" /><label for="ctl00_MainContentPlaceHolder_RadioButton2">按所学课程</label>&nbsp;&nbsp;
                <input id="ctl00_MainContentPlaceHolder_CheckBox1" type="checkbox" name="ctl00$MainContentPlaceHolder$CheckBox1" /><label for="ctl00_MainContentPlaceHolder_CheckBox1">显示绩点</label>
                <input type="image" name="ctl00$MainContentPlaceHolder$BtnSearch" id="ctl00_MainContentPlaceHolder_BtnSearch" src="../images/button_search.GIF" style="border-width:0px;" />
            </td>
            </tr>
            <tr>
            <td align="center"><font color="red">注意：若查询不到某门课程的成绩，请检查该门课程是否已进行评教</font></td>
        </tr>
    </table>
    
    <div>
	<table class="GridViewStyle" cellspacing="0" rules="all" border="1" id="ctl00_MainContentPlaceHolder_GridScore" style="border-collapse:collapse;">
		<caption>
			(共91条/1页)
		</caption><tr class="HeaderStyle">
			<th scope="col">学年</th><th scope="col">学期</th><th scope="col">课程名称</th><th scope="col">课程学分</th><th scope="col">考试类型</th><th scope="col">考试成绩</th><th scope="col">所获学分</th>
		</tr><tr>
			<td>2011</td><td>3</td><td>金工实习</td><td>2</td><td>正常</td><td>56</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>金工实习</td><td>2</td><td>正常</td><td>67</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>Matlab语言入门</td><td>1</td><td>正常</td><td>中</td><td>1</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>低成本出国自助旅游知识及攻略</td><td>2</td><td>正常</td><td>优</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>管理的艺术</td><td>2</td><td>正常</td><td>91</td><td>2</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>高等数学Ⅰ(一)</td><td>5.5</td><td>正常</td><td>42</td><td>0</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>高等数学Ⅰ(一)</td><td>5.5</td><td>补考</td><td>60</td><td>5.5</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>高等数学Ⅰ(一)</td><td>5.5</td><td>正常</td><td>0</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>高等数学Ⅰ(二)</td><td>5.5</td><td>正常</td><td>50</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>高等数学Ⅰ(二)</td><td>5.5</td><td>补考</td><td>42</td><td>0</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>高等数学Ⅰ(二)</td><td>5.5</td><td>正常</td><td>38</td><td>0</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>高等数学Ⅰ(二)</td><td>5.5</td><td>补考</td><td>21</td><td>0</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>高等数学Ⅰ(二)</td><td>5.5</td><td>正常</td><td>33</td><td>0</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>高等数学Ⅰ(二)</td><td>5.5</td><td>补考</td><td>60</td><td>5.5</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>线性代数Ⅰ</td><td>2</td><td>正常</td><td>62</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>概率统计Ⅰ</td><td>2.5</td><td>正常</td><td>47</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>概率统计Ⅰ</td><td>2.5</td><td>补考</td><td>17</td><td>0</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>概率统计Ⅰ</td><td>2.5</td><td>正常</td><td>46</td><td>0</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>概率统计Ⅰ</td><td>2.5</td><td>补考</td><td>40</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>大学物理Ⅰ(一)</td><td>3.5</td><td>正常</td><td>49</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>大学物理Ⅰ(一)</td><td>3.5</td><td>补考</td><td>27</td><td>0</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>大学物理Ⅰ(一)</td><td>3.5</td><td>正常</td><td>67</td><td>3.5</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>大学物理Ⅰ(二)</td><td>3</td><td>正常</td><td>61</td><td>3</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>离散数学</td><td>3</td><td>正常</td><td>70</td><td>3</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>物理实验Ⅰ(一)</td><td>1.5</td><td>正常</td><td>86</td><td>1.5</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>物理实验Ⅰ(二)</td><td>1.5</td><td>正常</td><td>68</td><td>1.5</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>体育</td><td>1</td><td>正常</td><td>合格</td><td>1</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>体育</td><td>1</td><td>正常</td><td>合格</td><td>1</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>体育</td><td>1</td><td>正常</td><td>合格</td><td>1</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>体育</td><td>1</td><td>正常</td><td>合格</td><td>1</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>计算机基础</td><td>3</td><td>正常</td><td>86</td><td>3</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>C语言程序设计</td><td>4</td><td>正常</td><td>83</td><td>4</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>Java高级应用开发</td><td>3</td><td>正常</td><td>83</td><td>3</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>Oracle数据库与应用</td><td>2</td><td>正常</td><td>53</td><td>0</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>Oracle数据库与应用</td><td>2</td><td>补考</td><td>60</td><td>2</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>Web程序设计</td><td>2</td><td>正常</td><td>96</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>操作系统</td><td>4</td><td>正常</td><td>74</td><td>4</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>计算机安全与密码学</td><td>2</td><td>正常</td><td>87</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>计算机网络</td><td>4</td><td>正常</td><td>89</td><td>4</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>计算机组成与结构</td><td>4</td><td>正常</td><td>45</td><td>0</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>计算机组成与结构</td><td>4</td><td>补考</td><td>25</td><td>0</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>计算机组成与结构</td><td>4</td><td>正常</td><td>74</td><td>4</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>面向对象程序设计(C  )</td><td>3</td><td>正常</td><td>91</td><td>3</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>软件工程</td><td>3</td><td>正常</td><td>80</td><td>3</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>软件项目管理</td><td>1.5</td><td>正常</td><td>83</td><td>1.5</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>数据仓库与数据挖掘</td><td>2</td><td>正常</td><td>84</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>数据结构</td><td>4</td><td>正常</td><td>62</td><td>4</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>数据库原理与应用</td><td>4</td><td>正常</td><td>63</td><td>4</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>数据库原理与应用</td><td>4</td><td>正常</td><td>36</td><td>0</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>算法分析与设计</td><td>2</td><td>正常</td><td>70</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>微型计算机技术</td><td>4</td><td>正常</td><td>86</td><td>4</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>数字逻辑设计</td><td>3</td><td>正常</td><td>75</td><td>3</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>计算机学科概论</td><td>0.5</td><td>正常</td><td>93</td><td>0.5</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>计算机实用技术</td><td>2</td><td>正常</td><td>90</td><td>2</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>软件测试</td><td>1.5</td><td>正常</td><td>77</td><td>1.5</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>J2ME程序设计</td><td>2</td><td>正常</td><td>88</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>windows程序设计</td><td>3</td><td>正常</td><td>83</td><td>3</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>Android程序设计</td><td>3</td><td>正常</td><td>94</td><td>3</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>软件架构与设计（.NET）</td><td>3</td><td>正常</td><td>75</td><td>3</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>软件架构与设计（java EE）</td><td>3</td><td>正常</td><td>85</td><td>3</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>Java开发基础</td><td>3</td><td>正常</td><td>82</td><td>3</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>数据结构与程序设计</td><td>1</td><td>正常</td><td>88</td><td>1</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>网络安全编程设计</td><td>1</td><td>正常</td><td>76</td><td>1</td>
		</tr><tr>
			<td>2014</td><td>1</td><td> JAVA项目实训</td><td>3</td><td>正常</td><td>84</td><td>3</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>操作系统课程设计</td><td>1</td><td>正常</td><td>78</td><td>1</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>程序设计综合设计</td><td>2</td><td>正常</td><td>86</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>计算机网络综合实验</td><td>1</td><td>正常</td><td>86</td><td>1</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>数据库应用课程设计</td><td>1</td><td>正常</td><td>75</td><td>1</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>大学英语1级听说</td><td>2</td><td>正常</td><td>68</td><td>2</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>大学英语1级读写</td><td>2</td><td>正常</td><td>79</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>大学英语2级听说</td><td>2</td><td>正常</td><td>74</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>大学英语2级读写</td><td>2</td><td>正常</td><td>79</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>大学英语3级听说</td><td>2</td><td>正常</td><td>32</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>大学英语3级听说</td><td>2</td><td>补考</td><td>46</td><td>0</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>大学英语3级听说</td><td>2</td><td>正常</td><td>48</td><td>0</td>
		</tr><tr>
			<td>2013</td><td>3</td><td>大学英语3级听说</td><td>2</td><td>补考</td><td>33</td><td>0</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>大学英语3级读写</td><td>2</td><td>正常</td><td>81</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>大学英语4级听说</td><td>2</td><td>正常</td><td>60</td><td>2</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>大学英语4级读写</td><td>2</td><td>正常</td><td>70</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>就业指导课(一)</td><td>0.5</td><td>正常</td><td>优</td><td>0.5</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>就业指导课(二)</td><td>0.5</td><td>正常</td><td>良</td><td>0.5</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>军事理论</td><td>0.5</td><td>正常</td><td>良</td><td>0.5</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>军事训练</td><td>2.5</td><td>正常</td><td>74</td><td>2.5</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>网络信息资源开发与利用</td><td>1.5</td><td>正常</td><td>85</td><td>1.5</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>马克思主义基本原理</td><td>3</td><td>正常</td><td>79</td><td>3</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>中国近现代史纲要</td><td>2</td><td>正常</td><td>76</td><td>2</td>
		</tr><tr>
			<td>2012</td><td>3</td><td>毛泽东思想和中国特色社会主义理论体系概论</td><td>4</td><td>正常</td><td>86</td><td>4</td>
		</tr><tr>
			<td>2012</td><td>1</td><td>形势与政策(一)</td><td>0.5</td><td>正常</td><td>80</td><td>0.5</td>
		</tr><tr>
			<td>2013</td><td>1</td><td>形势与政策(二)</td><td>0.5</td><td>正常</td><td>90</td><td>0.5</td>
		</tr><tr>
			<td>2014</td><td>1</td><td>形势与政策(三)</td><td>0.5</td><td>正常</td><td>85</td><td>0.5</td>
		</tr><tr>
			<td>2011</td><td>3</td><td>思想道德修养与法律基础</td><td>3</td><td>正常</td><td>79</td><td>3</td>
		</tr>
	</table>
</div>
        <div>

</div>
    
            </div>
        </div>
    

<script type="text/javascript">
//<![CDATA[
var ctl00_Menu2_Data = new Object();
ctl00_Menu2_Data.disappearAfter = 500;
ctl00_Menu2_Data.horizontalOffset = 0;
ctl00_Menu2_Data.verticalOffset = 5;
var ctl00_Menu1_Data = new Object();
ctl00_Menu1_Data.disappearAfter = 500;
ctl00_Menu1_Data.horizontalOffset = 20;
ctl00_Menu1_Data.verticalOffset = 5;
//]]>
</script>
</form>
</body>
</html>
