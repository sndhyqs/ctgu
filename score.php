
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
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTk1NTA0ODAzNw9kFgJmD2QWAgIDD2QWCAIFDw8WAh4EVGV4dAUTMjAxMTExMjI0M+aZj+mdkuWxsWRkAgcPPCsADQIADxYCHgtfIURhdGFCb3VuZGdkDBQrAAIFAzA6MBQrAAIWEB8ABQzlrabkuJrpooToraYeBVZhbHVlBQzlrabkuJrpooToraYeC05hdmlnYXRlVXJsBR4vandjX2dseHQvU2l0ZU1hcC9UZXN0LmFzcHgjMzIeB1Rvb2xUaXAFDOWtpuS4mumihOitph4HRW5hYmxlZGceClNlbGVjdGFibGVnHghEYXRhUGF0aAUeL2p3Y19nbHh0L3NpdGVtYXAvdGVzdC5hc3B4IzMyHglEYXRhQm91bmRnFCsABAULMDowLDA6MSwwOjIUKwACFhAfAAUQ4peGIOWfueWFu+iuoeWIkh8CBRDil4Yg5Z+55YW76K6h5YiSHwMFKS9qd2NfZ2x4dC9QbGFuX1RyYWluL1BsYW5UcmFpbl9RdWVyeS5hc3B4HwQFDOWfueWFu+iuoeWIkh8FZx8GZx8HBSkvandjX2dseHQvcGxhbl90cmFpbi9wbGFudHJhaW5fcXVlcnkuYXNweB8IZ2QUKwACFhAfAAUQ4peGIOWtpuS4muavlOWvuR8CBRDil4Yg5a2m5Lia5q+U5a+5HwMFLi9qd2NfZ2x4dC9QbGFuX1RvX1N0dWR5L1BsYW5Ub1N0dWR5X1F1ZXJ5LmFzcHgfBAUM5a2m5Lia5q+U5a+5HwVnHwZnHwcFLi9qd2NfZ2x4dC9wbGFuX3RvX3N0dWR5L3BsYW50b3N0dWR5X3F1ZXJ5LmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDlrabkuJrpooToraYfAgUQ4peGIOWtpuS4mumihOitph8DBSsvandjX2dseHQvUGxhbl9Ub19TdHVkeS9TdHVkeV9XYXJubmluZy5hc3B4HwQFDOWtpuS4mumihOitph8FZx8GZx8HBSsvandjX2dseHQvcGxhbl90b19zdHVkeS9zdHVkeV93YXJubmluZy5hc3B4HwhnZGQCCQ88KwANAgAPFgIfAWdkDBQrAAcFFzA6MCwwOjEsMDoyLDA6MywwOjQsMDo1FCsAAhYQHwAFESB8IHwg5Y2z5pe25LqL5YqhHwIFESB8IHwg5Y2z5pe25LqL5YqhHwMFJi9qd2NfZ2x4dC9TdHVfTm90aWNlL05vdGljZV9RdWVyeS5hc3B4HwQFFeWQhOexu+mAmuefpeWPiuS6i+WKoR8FZx8GZx8HBSYvandjX2dseHQvc3R1X25vdGljZS9ub3RpY2VfcXVlcnkuYXNweB8IZ2QUKwACFhAfAAURIHwgfCDlrabnlJ/pgInor74fAgURIHwgfCDlrabnlJ/pgInor74fAwUbL2p3Y19nbHh0L1NpdGVNYXAvVGVzdC5hc3B4HwQFDOWtpueUn+mAieivvh8FZx8GZx8HBRsvandjX2dseHQvc2l0ZW1hcC90ZXN0LmFzcHgfCGcUKwAGBRMwOjAsMDoxLDA6MiwwOjMsMDo0FCsAAhYQHwAFE+KXhiDor77nqIvmn6Xor6LjgIAfAgUT4peGIOivvueoi+afpeivouOAgB8DBSkvandjX2dseHQvQ291cnNlX0Nob2ljZS9Db3Vyc2VfUXVlcnkuYXNweB8EBRXlvIDorr7nmoTor77nqIvmn6Xor6IfBWcfBmcfBwUpL2p3Y19nbHh0L2NvdXJzZV9jaG9pY2UvY291cnNlX3F1ZXJ5LmFzcHgfCGdkFCsAAhYQHwAFE+KXhiDlrabnlJ/pgInor77jgIAfAgUT4peGIOWtpueUn+mAieivvuOAgB8DBSovandjX2dseHQvQ291cnNlX0Nob2ljZS9Db3Vyc2VfQ2hvaWNlLmFzcHgfBAUM5a2m55Sf6YCJ6K++HwVnHwZnHwcFKi9qd2NfZ2x4dC9jb3Vyc2VfY2hvaWNlL2NvdXJzZV9jaG9pY2UuYXNweB8IZ2QUKwACFhAfAAUT4peGIOWtpueUn+mAgOivvuOAgB8CBRPil4Yg5a2m55Sf6YCA6K++44CAHwMFKy9qd2NfZ2x4dC9Db3Vyc2VfQ2hvaWNlL0NvdXJzZV9BYmFuZG9uLmFzcHgfBAUM5a2m55Sf6YCA6K++HwVnHwZnHwcFKy9qd2NfZ2x4dC9jb3Vyc2VfY2hvaWNlL2NvdXJzZV9hYmFuZG9uLmFzcHgfCGdkFCsAAhYQHwAFE+KXhiDpgInkv67or77ooajjgIAfAgUT4peGIOmAieS/ruivvuihqOOAgB8DBSwvandjX2dseHQvQ291cnNlX0Nob2ljZS9Db3Vyc2VfU2NoZWR1bGUuYXNweB8EBQzpgInkv67or77ooagfBWcfBmcfBwUsL2p3Y19nbHh0L2NvdXJzZV9jaG9pY2UvY291cnNlX3NjaGVkdWxlLmFzcHgfCGdkFCsAAhYQHwAFE+KXhiDlt7LpgInor77nqIvjgIAfAgUT4peGIOW3sumAieivvueoi+OAgB8DBS0vandjX2dseHQvQ291cnNlX0Nob2ljZS9TdHVfQ291cnNlX1F1ZXJ5LmFzcHgfBAUV5bey6YCJ5L+u6K++56iL5p+l6K+iHwVnHwZnHwcFLS9qd2NfZ2x4dC9jb3Vyc2VfY2hvaWNlL3N0dV9jb3Vyc2VfcXVlcnkuYXNweB8IZ2QUKwACFhAfAAURIHwgfCDmiJDnu6nmn6Xor6IfAgURIHwgfCDmiJDnu6nmn6Xor6IfAwUdL2p3Y19nbHh0L1NpdGVNYXAvVGVzdC5hc3B4IzMfBAUS5a2m55Sf5oiQ57up5p+l6K+iHwVnHwZnHwcFHS9qd2NfZ2x4dC9zaXRlbWFwL3Rlc3QuYXNweCMzHwhnFCsAAwUHMDowLDA6MRQrAAIWEh8CBRHil4Yg5oiQ57up5p+l6K+iIB8IZx4IU2VsZWN0ZWRnHwAFEeKXhiDmiJDnu6nmn6Xor6IgHwMFKC9qd2NfZ2x4dC9TdHVkZW50X1Njb3JlL1Njb3JlX1F1ZXJ5LmFzcHgfBWcfBmcfBAUM5oiQ57up5p+l6K+iHwcFKC9qd2NfZ2x4dC9zdHVkZW50X3Njb3JlL3Njb3JlX3F1ZXJ5LmFzcHhkFCsAAhYQHwAFFOKXhiDlj4zlrabkvY3miJDnu6kgHwIFFOKXhiDlj4zlrabkvY3miJDnu6kgHwMFMS9qd2NfZ2x4dC9Eb3VibGVEZWdyZWVfU2NvcmUvRGJsRGVncmVlX1Njb3JlLmFzcHgfBAUV5Y+M5a2m5L2N5oiQ57up5p+l6K+iHwVnHwZnHwcFMS9qd2NfZ2x4dC9kb3VibGVkZWdyZWVfc2NvcmUvZGJsZGVncmVlX3Njb3JlLmFzcHgfCGdkFCsAAhYQHwAFESB8IHwg5ZCE57G75oql5ZCNHwIFESB8IHwg5ZCE57G75oql5ZCNHwMFHS9qd2NfZ2x4dC9TaXRlTWFwL1Rlc3QuYXNweCM1HwQFDOWQhOexu+aKpeWQjR8FZx8GZx8HBR0vandjX2dseHQvc2l0ZW1hcC90ZXN0LmFzcHgjNR8IZxQrAAgFGzA6MCwwOjEsMDoyLDA6MywwOjQsMDo1LDA6NhQrAAIWEB8ABRHil4Yg562J57qn6ICD6K+VIB8CBRHil4Yg562J57qn6ICD6K+VIB8DBSUvandjX2dseHQvY2V0X3N5c3RlbS9zdHVkZW50X2NldC5hc3B4HwQFEuetiee6p+iAg+ivleaKpeWQjR8FZx8GZx8HBSUvandjX2dseHQvY2V0X3N5c3RlbS9zdHVkZW50X2NldC5hc3B4HwhnZBQrAAIWEB8ABRHil4Yg5ZCN5Y2V5p+l6K+iIB8CBRHil4Yg5ZCN5Y2V5p+l6K+iIB8DBSYvandjX2dseHQvY2V0X3N5c3RlbS9zdHVkZW50X0xpc3QuYXNweB8EBR7nrYnnuqfogIPor5XmiqXlkI3lkI3ljZXmn6Xor6IfBWcfBmcfBwUmL2p3Y19nbHh0L2NldF9zeXN0ZW0vc3R1ZGVudF9saXN0LmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDmr5XkuJrorr7orqEfAgUQ4peGIOavleS4muiuvuiuoR8DBS0vandjX2dseHQvR3JhZHVEZXNpZ25fc3lzdGVtL0dyYWR1RGVzaWduLmFzcHgfBAUY5q+V5Lia6K6+6K6h6K++6aKY55Sz5oqlHwVnHwZnHwcFLS9qd2NfZ2x4dC9ncmFkdWRlc2lnbl9zeXN0ZW0vZ3JhZHVkZXNpZ24uYXNweB8IZ2QUKwACFhAfAAUQ4peGIOmHjeS/ruaKpeWQjR8CBRDil4Yg6YeN5L+u5oql5ZCNHwMFKC9qd2NfZ2x4dC9SZXBlYXRfU3R1ZHkvUmVwZWF0X1N0dWR5LmFzcHgfBAUM6YeN5L+u5oql5ZCNHwVnHwZnHwcFKC9qd2NfZ2x4dC9yZXBlYXRfc3R1ZHkvcmVwZWF0X3N0dWR5LmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDph43ogIPmiqXlkI0fAgUQ4peGIOmHjeiAg+aKpeWQjR8DBSYvandjX2dseHQvUmVwZWF0X0V4YW0vUmVwZWF0X0V4YW0uYXNweB8EBQzph43ogIPmiqXlkI0fBWcfBmcfBwUmL2p3Y19nbHh0L3JlcGVhdF9leGFtL3JlcGVhdF9leGFtLmFzcHgfCGdkFCsAAhYQHwAFEOKXhiDmuIXnkIbogIPor5UfAgUQ4peGIOa4heeQhuiAg+ivlR8DBSQvandjX2dseHQvQ2xlYXJfRXhhbS9DbGVhcl9FeGFtLmFzcHgfBAUS5riF55CG6ICD6K+V5oql5ZCNHwVnHwZnHwcFJC9qd2NfZ2x4dC9jbGVhcl9leGFtL2NsZWFyX2V4YW0uYXNweB8IZ2QUKwACFhAfAAUW4peGIOesrOS6jOWtpuS9jeaKpeWQjR8CBRbil4Yg56ys5LqM5a2m5L2N5oql5ZCNHwMFKi9qd2NfZ2x4dC9Eb3VibGVfRGVncmVlL0RvdWJsZV9EZWdyZWUuYXNweB8EBQ/lj4zlrabkvY3miqXlkI0fBWcfBmcfBwUqL2p3Y19nbHh0L2RvdWJsZV9kZWdyZWUvZG91YmxlX2RlZ3JlZS5hc3B4HwhnZBQrAAIWEB8ABREgfCB8IOWtpueUn+ivhOaVmR8CBREgfCB8IOWtpueUn+ivhOaVmR8DBSQvandjX2dseHQvU3R1X0Fzc2Vzcy9TdHVfQXNzZXNzLmFzcHgfBAUM5a2m55Sf6K+E5pWZHwVnHwZnHwcFJC9qd2NfZ2x4dC9zdHVfYXNzZXNzL3N0dV9hc3Nlc3MuYXNweB8IZ2QUKwACFhAfAAURIHwgfCDkuKrkurrkv6Hmga8fAgURIHwgfCDkuKrkurrkv6Hmga8fAwUdL2p3Y19nbHh0L1NpdGVNYXAvVGVzdC5hc3B4IzEfBAUM5Liq5Lq65L+h5oGvHwVnHwZnHwcFHS9qd2NfZ2x4dC9zaXRlbWFwL3Rlc3QuYXNweCMxHwhnFCsABAULMDowLDA6MSwwOjIUKwACFhAfAAUQ4peGIOS4quS6uuS/oeaBrx8CBRDil4Yg5Liq5Lq65L+h5oGvHwMFIC9qd2NfZ2x4dC9TdHVfSW5mby9TdHVfaW5mby5hc3B4HwQFGOWtpueUn+S4quS6uuS/oeaBr+afpeivoh8FZx8GZx8HBSAvandjX2dseHQvc3R1X2luZm8vc3R1X2luZm8uYXNweB8IZ2QUKwACFhAfAAUQ4peGIOS/oeaBr+S/ruaUuR8CBRDil4Yg5L+h5oGv5L+u5pS5HwMFJi9qd2NfZ2x4dC9TdHVfSW5mby9TdHVpbmZvX01vZGlmeS5hc3B4HwQFGOWtpueUn+S4quS6uuS/oeaBr+S/ruaUuR8FZx8GZx8HBSYvandjX2dseHQvc3R1X2luZm8vc3R1aW5mb19tb2RpZnkuYXNweB8IZ2QUKwACFhAfAAUQ4peGIOWvhueggeS/ruaUuR8CBRDil4Yg5a+G56CB5L+u5pS5HwMFJC9qd2NfZ2x4dC9TdHVfSW5mby9TdHVfUGFzc3dvcmQuYXNweB8EBRjlrabnlJ/nlKjmiLflr4bnoIHkv67mlLkfBWcfBmcfBwUkL2p3Y19nbHh0L3N0dV9pbmZvL3N0dV9wYXNzd29yZC5hc3B4HwhnZGQCCw9kFghmDxAPFgYeDURhdGFUZXh0RmllbGQFBHRleHQeDkRhdGFWYWx1ZUZpZWxkBQV2YWx1ZR8BZ2QQFRoIKOS4jeWhqykEMjAyMAQyMDE5BDIwMTgEMjAxNwQyMDE2BDIwMTUEMjAxNAQyMDEzBDIwMTIEMjAxMQQyMDEwBDIwMDkEMjAwOAQyMDA3BDIwMDYEMjAwNQQyMDA0BDIwMDMEMjAwMgQyMDAxBDIwMDAEMTk5OQQxOTk4BDE5OTcEMTk5NhUaATAEMjAyMAQyMDE5BDIwMTgEMjAxNwQyMDE2BDIwMTUEMjAxNAQyMDEzBDIwMTIEMjAxMQQyMDEwBDIwMDkEMjAwOAQyMDA3BDIwMDYEMjAwNQQyMDA0BDIwMDMEMjAwMgQyMDAxBDIwMDAEMTk5OQQxOTk4BDE5OTcEMTk5NhQrAxpnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZ2dnZxYBZmQCAQ8QDxYGHwoFBHRleHQfCwUFdmFsdWUfAWdkEBUFCCjkuI3loaspDOaYpeWto+WtpuacnwzlpI/lraPlrabmnJ8M56eL5a2j5a2m5pyfDOWGrOWto+WtpuacnxUFATABMQEyATMBNBQrAwVnZ2dnZxYBZmQCBg88KwANAgAPFgoeCFBhZ2VTaXplAhQfAWceCVBhZ2VDb3VudAIBHgtfIUl0ZW1Db3VudAJbHgdDYXB0aW9uBQ8o5YWxOTHmnaEvMemhtSlkARAWAgIHAggWAjwrAAUBABYCHgdWaXNpYmxlaDwrAAUBABYCHxBoFgJmZhYCZg9kFrgBAgEPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQzph5Hlt6Xlrp7kuaBkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNTZkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCNzZkZAIIDw8WAh8ABQVCODAyM2RkAgIPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQzph5Hlt6Xlrp7kuaBkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNjdkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNjVkZAIIDw8WAh8ABQVCODAyM2RkAgMPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRJNYXRsYWLor63oqIDlhaXpl6hkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUD5LitZGQCBg8PFgIfAAUBMWRkAgcPDxYCHwAFA+S4rWRkAggPDxYCHwAFCUJOMDQyMTEwQmRkAgQPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABSrkvY7miJDmnKzlh7rlm73oh6rliqnml4XmuLjnn6Xor4blj4rmlLvnlaVkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUD5LyYZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFA+S8mGRkAggPDxYCHwAFCUJOMDQzMTEwQmRkAgUPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQ/nrqHnkIbnmoToibrmnK9kZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCOTFkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCOTBkZAIIDw8WAh8ABQlETjEyMzExMEJkZAIGD2QWEmYPDxYCHwAFBDIwMTFkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUU6auY562J5pWw5a2m4oWgKOS4gClkZAIDDw8WAh8ABQM1LjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI0MmRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIzN2RkAggPDxYCHwAFBUYwMDAxZGQCBw9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFOmrmOetieaVsOWtpuKFoCjkuIApZGQCAw8PFgIfAAUDNS41ZGQCBA8PFgIfAAUG6KGl6ICDZGQCBQ8PFgIfAAUCNjBkZAIGDw8WAh8ABQM1LjVkZAIHDw8WAh8ABQI2MGRkAggPDxYCHwAFBUYwMDAxZGQCCA9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOmrmOetieaVsOWtpuKFoCjkuIApZGQCAw8PFgIfAAUDNS41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUBMGRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQFxZGQCCA8PFgIfAAUFRjAwMDFkZAIJD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU6auY562J5pWw5a2m4oWgKOS6jClkZAIDDw8WAh8ABQM1LjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI1MGRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQI0M2RkAggPDxYCHwAFBUYwMDAyZGQCCg9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOmrmOetieaVsOWtpuKFoCjkuowpZGQCAw8PFgIfAAUDNS41ZGQCBA8PFgIfAAUG6KGl6ICDZGQCBQ8PFgIfAAUCNDJkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCNDJkZAIIDw8WAh8ABQVGMDAwMmRkAgsPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTpq5jnrYnmlbDlrabihaAo5LqMKWRkAgMPDxYCHwAFAzUuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjM4ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjI1ZGQCCA8PFgIfAAUFRjAwMDJkZAIMD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU6auY562J5pWw5a2m4oWgKOS6jClkZAIDDw8WAh8ABQM1LjVkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQIyMWRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIyMWRkAggPDxYCHwAFBUYwMDAyZGQCDQ9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOmrmOetieaVsOWtpuKFoCjkuowpZGQCAw8PFgIfAAUDNS41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCMzNkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCMzNkZAIIDw8WAh8ABQVGMDAwMmRkAg4PZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTpq5jnrYnmlbDlrabihaAo5LqMKWRkAgMPDxYCHwAFAzUuNWRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjYwZGQCBg8PFgIfAAUDNS41ZGQCBw8PFgIfAAUCNjBkZAIIDw8WAh8ABQVGMDAwMmRkAg8PZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABQ/nur/mgKfku6PmlbDihaBkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNjJkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNTNkZAIIDw8WAh8ABQVGMDAwN2RkAhAPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABQ/mpoLnjofnu5/orqHihaBkZAIDDw8WAh8ABQMyLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI0N2RkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQI0MWRkAggPDxYCHwAFBUYwMDA5ZGQCEQ9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFD+amgueOh+e7n+iuoeKFoGRkAgMPDxYCHwAFAzIuNWRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjE3ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjE3ZGQCCA8PFgIfAAUFRjAwMDlkZAISD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUP5qaC546H57uf6K6h4oWgZGQCAw8PFgIfAAUDMi41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNDZkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCNDBkZAIIDw8WAh8ABQVGMDAwOWRkAhMPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABQ/mpoLnjofnu5/orqHihaBkZAIDDw8WAh8ABQMyLjVkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQI0MGRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQI0MGRkAggPDxYCHwAFBUYwMDA5ZGQCFA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOWkp+WtpueJqeeQhuKFoCjkuIApZGQCAw8PFgIfAAUDMy41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNDlkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCMzVkZAIIDw8WAh8ABQVGMDAxMmRkAhUPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTlpKflrabniannkIbihaAo5LiAKWRkAgMPDxYCHwAFAzMuNWRkAgQPDxYCHwAFBuihpeiAg2RkAgUPDxYCHwAFAjI3ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjI3ZGQCCA8PFgIfAAUFRjAwMTJkZAIWD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUU5aSn5a2m54mp55CG4oWgKOS4gClkZAIDDw8WAh8ABQMzLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI2N2RkAgYPDxYCHwAFAzMuNWRkAgcPDxYCHwAFAjYxZGQCCA8PFgIfAAUFRjAwMTJkZAIXD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUU5aSn5a2m54mp55CG4oWgKOS6jClkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNjFkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCNDlkZAIIDw8WAh8ABQVGMDAxM2RkAhgPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQznprvmlaPmlbDlraZkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzBkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCNjhkZAIIDw8WAh8ABQVGMDAxN2RkAhkPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTniannkIblrp7pqozihaAo5LiAKWRkAgMPDxYCHwAFAzEuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg2ZGQCBg8PFgIfAAUDMS41ZGQCBw8PFgIfAAUBMGRkAggPDxYCHwAFBUY3MDAxZGQCGg9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFOeJqeeQhuWunumqjOKFoCjkuowpZGQCAw8PFgIfAAUDMS41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNjhkZAIGDw8WAh8ABQMxLjVkZAIHDw8WAh8ABQEwZGQCCA8PFgIfAAUFRjcwMDJkZAIbD2QWEmYPDxYCHwAFBDIwMTFkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUG5L2T6IKyZGQCAw8PFgIfAAUBMWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFBuWQiOagvGRkAgYPDxYCHwAFATFkZAIHDw8WAh8ABQblkIjmoLxkZAIIDw8WAh8ABQVHMDAwMWRkAhwPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABQbkvZPogrJkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUG5ZCI5qC8ZGQCBg8PFgIfAAUBMWRkAgcPDxYCHwAFBuWQiOagvGRkAggPDxYCHwAFBUcwMDAxZGQCHQ9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFBuS9k+iCsmRkAgMPDxYCHwAFATFkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQblkIjmoLxkZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUG5ZCI5qC8ZGQCCA8PFgIfAAUFRzAwMDFkZAIeD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUG5L2T6IKyZGQCAw8PFgIfAAUBMWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFBuWQiOagvGRkAgYPDxYCHwAFATFkZAIHDw8WAh8ABQblkIjmoLxkZAIIDw8WAh8ABQVHMDAwMWRkAh8PZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQ/orqHnrpfmnLrln7rnoYBkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODZkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCODhkZAIIDw8WAh8ABQVIMDAwMWRkAiAPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRND6K+t6KiA56iL5bqP6K6+6K6hZGQCAw8PFgIfAAUBNGRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjgzZGQCBg8PFgIfAAUBNGRkAgcPDxYCHwAFAjgyZGQCCA8PFgIfAAUFSDEwMDVkZAIhD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUWSmF2YemrmOe6p+W6lOeUqOW8gOWPkWRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4M2RkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI3NmRkAggPDxYCHwAFBUgxMDA5ZGQCIg9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGE9yYWNsZeaVsOaNruW6k+S4juW6lOeUqGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI1M2RkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIzNWRkAggPDxYCHwAFBUgxMDE0ZGQCIw9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGE9yYWNsZeaVsOaNruW6k+S4juW6lOeUqGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQI2MGRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI2NWRkAggPDxYCHwAFBUgxMDE0ZGQCJA9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFD1dlYueoi+W6j+iuvuiuoWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI5NmRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI5OGRkAggPDxYCHwAFBUgxMDE4ZGQCJQ9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFDOaTjeS9nOezu+e7n2RkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NGRkAgYPDxYCHwAFATRkZAIHDw8WAh8ABQI3MWRkAggPDxYCHwAFBUgxMDIyZGQCJg9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFG+iuoeeul+acuuWuieWFqOS4juWvhueggeWtpmRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4N2RkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI4NWRkAggPDxYCHwAFBUgxMDQ1ZGQCJw9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFD+iuoeeul+acuue9kee7nGRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4OWRkAgYPDxYCHwAFATRkZAIHDw8WAh8ABQI4N2RkAggPDxYCHwAFBUgxMDQ5ZGQCKA9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGOiuoeeul+acuue7hOaIkOS4jue7k+aehGRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI0NWRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIyMmRkAggPDxYCHwAFBUgxMDUyZGQCKQ9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGOiuoeeul+acuue7hOaIkOS4jue7k+aehGRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQIyNWRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIyNWRkAggPDxYCHwAFBUgxMDUyZGQCKg9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGOiuoeeul+acuue7hOaIkOS4jue7k+aehGRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NGRkAgYPDxYCHwAFATRkZAIHDw8WAh8ABQI2NmRkAggPDxYCHwAFBUgxMDUyZGQCKw9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFHemdouWQkeWvueixoeeoi+W6j+iuvuiuoShDICApZGQCAw8PFgIfAAUBM2RkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjkxZGQCBg8PFgIfAAUBM2RkAgcPDxYCHwAFAjg5ZGQCCA8PFgIfAAUFSDEwNjJkZAIsD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUM6L2v5Lu25bel56iLZGQCAw8PFgIfAAUBM2RkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjgwZGQCBg8PFgIfAAUBM2RkAgcPDxYCHwAFAjc1ZGQCCA8PFgIfAAUFSDEwNzJkZAItD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUS6L2v5Lu26aG555uu566h55CGZGQCAw8PFgIfAAUDMS41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODNkZAIGDw8WAh8ABQMxLjVkZAIHDw8WAh8ABQI3NWRkAggPDxYCHwAFBUgxMDc3ZGQCLg9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFG+aVsOaNruS7k+W6k+S4juaVsOaNruaMluaOmGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NGRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI4MGRkAggPDxYCHwAFBUgxMDg1ZGQCLw9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFDOaVsOaNrue7k+aehGRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI2MmRkAgYPDxYCHwAFATRkZAIHDw8WAh8ABQI0N2RkAggPDxYCHwAFBUgxMDg2ZGQCMA9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGOaVsOaNruW6k+WOn+eQhuS4juW6lOeUqGRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI2M2RkAgYPDxYCHwAFATRkZAIHDw8WAh8ABQI1OGRkAggPDxYCHwAFBUgxMDg4ZGQCMQ9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFGOaVsOaNruW6k+WOn+eQhuS4juW6lOeUqGRkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQIzNmRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIzNmRkAggPDxYCHwAFBUgxMDg4ZGQCMg9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFeeul+azleWIhuaekOS4juiuvuiuoWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3MGRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI2NWRkAggPDxYCHwAFBUgxMDkzZGQCMw9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFeW+ruWei+iuoeeul+acuuaKgOacr2RkAgMPDxYCHwAFATRkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4NmRkAgYPDxYCHwAFATRkZAIHDw8WAh8ABQI4MmRkAggPDxYCHwAFBUgxMTA2ZGQCNA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFEuaVsOWtl+mAu+i+keiuvuiuoWRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NWRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI2OWRkAggPDxYCHwAFBUgxMTI5ZGQCNQ9kFhJmDw8WAh8ABQQyMDExZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFeiuoeeul+acuuWtpuenkeamguiuumRkAgMPDxYCHwAFAzAuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjkzZGQCBg8PFgIfAAUDMC41ZGQCBw8PFgIfAAUCOTNkZAIIDw8WAh8ABQVIMTEzNGRkAjYPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRXorqHnrpfmnLrlrp7nlKjmioDmnK9kZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCOTBkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCOTBkZAIIDw8WAh8ABQVIMTEzNWRkAjcPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABQzova/ku7bmtYvor5VkZAIDDw8WAh8ABQMxLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3N2RkAgYPDxYCHwAFAzEuNWRkAgcPDxYCHwAFAjY4ZGQCCA8PFgIfAAUFSDExNDVkZAI4D2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUQSjJNReeoi+W6j+iuvuiuoWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI4OGRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI4OWRkAggPDxYCHwAFBUgxMTU5ZGQCOQ9kFhJmDw8WAh8ABQQyMDEzZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFE3dpbmRvd3PnqIvluo/orr7orqFkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODNkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCODVkZAIIDw8WAh8ABQVIMTE4MmRkAjoPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRNBbmRyb2lk56iL5bqP6K6+6K6hZGQCAw8PFgIfAAUBM2RkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjk0ZGQCBg8PFgIfAAUBM2RkAgcPDxYCHwAFAjk1ZGQCCA8PFgIfAAUFSDExODNkZAI7D2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUf6L2v5Lu25p625p6E5LiO6K6+6K6h77yILk5FVO+8iWRkAgMPDxYCHwAFATNkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NWRkAgYPDxYCHwAFATNkZAIHDw8WAh8ABQI2NmRkAggPDxYCHwAFBUgxMTg1ZGQCPA9kFhJmDw8WAh8ABQQyMDE0ZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFIui9r+S7tuaetuaehOS4juiuvuiuoe+8iGphdmEgRUXvvIlkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODVkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCOTBkZAIIDw8WAh8ABQVIMTE4NmRkAj0PZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRBKYXZh5byA5Y+R5Z+656GAZGQCAw8PFgIfAAUBM2RkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjgyZGQCBg8PFgIfAAUBM2RkAgcPDxYCHwAFAjc0ZGQCCA8PFgIfAAUFSDExODlkZAI+D2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUb5pWw5o2u57uT5p6E5LiO56iL5bqP6K6+6K6hZGQCAw8PFgIfAAUBMWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg4ZGQCBg8PFgIfAAUBMWRkAgcPDxYCHwAFAjg2ZGQCCA8PFgIfAAUFSDExOTFkZAI/D2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUY572R57uc5a6J5YWo57yW56iL6K6+6K6hZGQCAw8PFgIfAAUBMWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc2ZGQCBg8PFgIfAAUBMWRkAgcPDxYCHwAFAjgwZGQCCA8PFgIfAAUFSDExOTJkZAJAD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAURIEpBVkHpobnnm67lrp7orq1kZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODRkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCODJkZAIIDw8WAh8ABQVIMTE5M2RkAkEPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRjmk43kvZzns7vnu5/or77nqIvorr7orqFkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzhkZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUCNzVkZAIIDw8WAh8ABQVIODAwOWRkAkIPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRjnqIvluo/orr7orqHnu7zlkIjorr7orqFkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODZkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCODZkZAIIDw8WAh8ABQVIODAxMGRkAkMPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRvorqHnrpfmnLrnvZHnu5znu7zlkIjlrp7pqoxkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODZkZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUCODBkZAIIDw8WAh8ABQVIODAxNWRkAkQPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRvmlbDmja7lupPlupTnlKjor77nqIvorr7orqFkZAIDDw8WAh8ABQExZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzVkZAIGDw8WAh8ABQExZGQCBw8PFgIfAAUCNzVkZAIIDw8WAh8ABQVIODAyMmRkAkUPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABRblpKflraboi7Hor60x57qn5ZCs6K+0ZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjY4ZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjYwZGQCCA8PFgIfAAUFUDAwMDFkZAJGD2QWEmYPDxYCHwAFBDIwMTFkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUW5aSn5a2m6Iux6K+tMee6p+ivu+WGmWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3OWRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI3MGRkAggPDxYCHwAFBVAwMDAyZGQCRw9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFuWkp+WtpuiLseivrTLnuqflkKzor7RkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzRkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNjdkZAIIDw8WAh8ABQVQMDAwM2RkAkgPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRblpKflraboi7Hor60y57qn6K+75YaZZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjc5ZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjczZGQCCA8PFgIfAAUFUDAwMDRkZAJJD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUW5aSn5a2m6Iux6K+tM+e6p+WQrOivtGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQIzMmRkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIzMmRkAggPDxYCHwAFBVAwMDA1ZGQCSg9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFuWkp+WtpuiLseivrTPnuqflkKzor7RkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG6KGl6ICDZGQCBQ8PFgIfAAUCNDZkZAIGDw8WAh8ABQEwZGQCBw8PFgIfAAUCNDZkZAIIDw8WAh8ABQVQMDAwNWRkAksPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATNkZAICDw8WAh8ABRblpKflraboi7Hor60z57qn5ZCs6K+0ZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjQ4ZGQCBg8PFgIfAAUBMGRkAgcPDxYCHwAFAjQ4ZGQCCA8PFgIfAAUFUDAwMDVkZAJMD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQEzZGQCAg8PFgIfAAUW5aSn5a2m6Iux6K+tM+e6p+WQrOivtGRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbooaXogINkZAIFDw8WAh8ABQIzM2RkAgYPDxYCHwAFATBkZAIHDw8WAh8ABQIzM2RkAggPDxYCHwAFBVAwMDA1ZGQCTQ9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBM2RkAgIPDxYCHwAFFuWkp+WtpuiLseivrTPnuqfor7vlhplkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODFkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNjlkZAIIDw8WAh8ABQVQMDAwNmRkAk4PZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRblpKflraboi7Hor60057qn5ZCs6K+0ZGQCAw8PFgIfAAUBMmRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjYwZGQCBg8PFgIfAAUBMmRkAgcPDxYCHwAFAjcyZGQCCA8PFgIfAAUFUDAwMDdkZAJPD2QWEmYPDxYCHwAFBDIwMTNkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUW5aSn5a2m6Iux6K+tNOe6p+ivu+WGmWRkAgMPDxYCHwAFATJkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3MGRkAgYPDxYCHwAFATJkZAIHDw8WAh8ABQI1MWRkAggPDxYCHwAFBVAwMDA4ZGQCUA9kFhJmDw8WAh8ABQQyMDEyZGQCAQ8PFgIfAAUBMWRkAgIPDxYCHwAFFOWwseS4muaMh+WvvOivvijkuIApZGQCAw8PFgIfAAUDMC41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUD5LyYZGQCBg8PFgIfAAUDMC41ZGQCBw8PFgIfAAUD5LyYZGQCCA8PFgIfAAUFUTAwMDFkZAJRD2QWEmYPDxYCHwAFBDIwMTRkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUU5bCx5Lia5oyH5a+86K++KOS6jClkZAIDDw8WAh8ABQMwLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQPoia9kZAIGDw8WAh8ABQMwLjVkZAIHDw8WAh8ABQPoia9kZAIIDw8WAh8ABQVRMDAwMmRkAlIPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQzlhpvkuovnkIborrpkZAIDDw8WAh8ABQMwLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQPoia9kZAIGDw8WAh8ABQMwLjVkZAIHDw8WAh8ABQPoia9kZAIIDw8WAh8ABQVRMDAwNWRkAlMPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABQzlhpvkuovorq3nu4NkZAIDDw8WAh8ABQMyLjVkZAIEDw8WAh8ABQbmraPluLhkZAIFDw8WAh8ABQI3NGRkAgYPDxYCHwAFAzIuNWRkAgcPDxYCHwAFAjc0ZGQCCA8PFgIfAAUFUTAwMDZkZAJUD2QWEmYPDxYCHwAFBDIwMTJkZAIBDw8WAh8ABQExZGQCAg8PFgIfAAUh572R57uc5L+h5oGv6LWE5rqQ5byA5Y+R5LiO5Yip55SoZGQCAw8PFgIfAAUDMS41ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODVkZAIGDw8WAh8ABQMxLjVkZAIHDw8WAh8ABQI5NWRkAggPDxYCHwAFCVFOMDAyMTEwQmRkAlUPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRvpqazlhYvmgJ3kuLvkuYnln7rmnKzljp/nkIZkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzlkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCODVkZAIIDw8WAh8ABQVZMDAwMWRkAlYPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRjkuK3lm73ov5HnjrDku6Plj7LnurLopoFkZAIDDw8WAh8ABQEyZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzZkZAIGDw8WAh8ABQEyZGQCBw8PFgIfAAUCNzBkZAIIDw8WAh8ABQVZMDAwMmRkAlcPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATNkZAICDw8WAh8ABTzmr5vms73kuJzmgJ3mg7PlkozkuK3lm73nibnoibLnpL7kvJrkuLvkuYnnkIborrrkvZPns7vmpoLorrpkZAIDDw8WAh8ABQE0ZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCODZkZAIGDw8WAh8ABQE0ZGQCBw8PFgIfAAUCNzlkZAIIDw8WAh8ABQVZMDAwNGRkAlgPZBYSZg8PFgIfAAUEMjAxMmRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTlvaLlir/kuI7mlL/nrZYo5LiAKWRkAgMPDxYCHwAFAzAuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjgwZGQCBg8PFgIfAAUDMC41ZGQCBw8PFgIfAAUCODBkZAIIDw8WAh8ABQVZMDAwNWRkAlkPZBYSZg8PFgIfAAUEMjAxM2RkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTlvaLlir/kuI7mlL/nrZYo5LqMKWRkAgMPDxYCHwAFAzAuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjkwZGQCBg8PFgIfAAUDMC41ZGQCBw8PFgIfAAUCOTBkZAIIDw8WAh8ABQVZMDAwNmRkAloPZBYSZg8PFgIfAAUEMjAxNGRkAgEPDxYCHwAFATFkZAICDw8WAh8ABRTlvaLlir/kuI7mlL/nrZYo5LiJKWRkAgMPDxYCHwAFAzAuNWRkAgQPDxYCHwAFBuato+W4uGRkAgUPDxYCHwAFAjg1ZGQCBg8PFgIfAAUDMC41ZGQCBw8PFgIfAAUCODVkZAIIDw8WAh8ABQVZMDAwN2RkAlsPZBYSZg8PFgIfAAUEMjAxMWRkAgEPDxYCHwAFATNkZAICDw8WAh8ABSHmgJ3mg7PpgZPlvrfkv67lhbvkuI7ms5Xlvovln7rnoYBkZAIDDw8WAh8ABQEzZGQCBA8PFgIfAAUG5q2j5bi4ZGQCBQ8PFgIfAAUCNzlkZAIGDw8WAh8ABQEzZGQCBw8PFgIfAAUCNzhkZAIIDw8WAh8ABQVZMDAxMmRkAlwPDxYCHxBoZGQCBw88KwANAGQYBAUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgUFKWN0bDAwJE1haW5Db250ZW50UGxhY2VIb2xkZXIkUmFkaW9CdXR0b24xBSljdGwwMCRNYWluQ29udGVudFBsYWNlSG9sZGVyJFJhZGlvQnV0dG9uMQUpY3RsMDAkTWFpbkNvbnRlbnRQbGFjZUhvbGRlciRSYWRpb0J1dHRvbjIFJmN0bDAwJE1haW5Db250ZW50UGxhY2VIb2xkZXIkQ2hlY2tCb3gxBSZjdGwwMCRNYWluQ29udGVudFBsYWNlSG9sZGVyJEJ0blNlYXJjaAUnY3RsMDAkTWFpbkNvbnRlbnRQbGFjZUhvbGRlciRHcmlkU2NvcmUxD2dkBSZjdGwwMCRNYWluQ29udGVudFBsYWNlSG9sZGVyJEdyaWRTY29yZQ9nZAULY3RsMDAkTWVudTEPD2QFJSB8fCB8fCDmiJDnu6nmn6Xor6Jc4peGIOaIkOe7qeafpeivoiBkxCyhB/gKKab1JuPFo0MeBKHTVYU=" />
</div>

<script type="text/javascript">
<!--
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
// -->
</script>


<script src="/jwc_glxt/WebResource.axd?d=pkg63EmlsxDsHo9I3nMxTQ2&amp;t=634184281466406250" type="text/javascript"></script>


<script src="/jwc_glxt/WebResource.axd?d=_f_iqGJ8g35vjD5cbBMyRA2&amp;t=634184281466406250" type="text/javascript"></script>
        
        
        
        
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
                                                            <a href="#ctl00_Menu2_SkipLink"><img alt="Skip Navigation Links" src="/jwc_glxt/WebResource.axd?d=p-y_zQv1oWCYLLME-mCiOQ2&amp;t=634184281466406250" width="0" height="0" style="border-width:0px;" /></a><table id="ctl00_Menu2" class="ctl00_Menu2_2" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学业预警" id="ctl00_Menu2n0"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu2_1" href="/jwc_glxt/SiteMap/Test.aspx#32">学业预警</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=s6sDJEXkR4ATKAlea15GU041wWuBm3nobrglLZFzuMw1&amp;t=634184281466406250" alt="Expand 学业预警" style="border-style:none;vertical-align:middle;" /></td>
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
		<img src="/jwc_glxt/WebResource.axd?d=yUJQtKzJ3dTFzl3sCk8qeDYeRAere3E1vcTmn8IA7uE1&amp;t=634184281466406250" alt="Scroll up" />
	</div><div class="ctl00_Menu2_0" id="ctl00_Menu2n0ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=FzsypX_LBo2Brib1l19iCchqzkwNcjaKrZjvw-oQZGY1&amp;t=634184281466406250" alt="Scroll down" />
	</div>
</div><a id="ctl00_Menu2_SkipLink"></a>
                                                        
                                                          </td>
                                                          <td>
                                                          <a href="#ctl00_Menu1_SkipLink"><img alt="Skip Navigation Links" src="/jwc_glxt/WebResource.axd?d=p-y_zQv1oWCYLLME-mCiOQ2&amp;t=634184281466406250" width="0" height="0" style="border-width:0px;" /></a><table id="ctl00_Menu1" class="ctl00_Menu1_2" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="各类通知及事务" id="ctl00_Menu1n0"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Stu_Notice/Notice_Query.aspx"> | | 即时事务</a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生选课" id="ctl00_Menu1n1"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx"> | | 学生选课</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=s6sDJEXkR4ATKAlea15GU041wWuBm3nobrglLZFzuMw1&amp;t=634184281466406250" alt="Expand  | | 学生选课" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生成绩查询" id="ctl00_Menu1n2"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx#3"> | | 成绩查询</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=s6sDJEXkR4ATKAlea15GU041wWuBm3nobrglLZFzuMw1&amp;t=634184281466406250" alt="Expand  | | 成绩查询" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="各类报名" id="ctl00_Menu1n3"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx#5"> | | 各类报名</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=s6sDJEXkR4ATKAlea15GU041wWuBm3nobrglLZFzuMw1&amp;t=634184281466406250" alt="Expand  | | 各类报名" style="border-style:none;vertical-align:middle;" /></td>
			</tr>
		</table></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="学生评教" id="ctl00_Menu1n4"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/Stu_Assess/Stu_Assess.aspx"> | | 学生评教</a></td>
			</tr>
		</table></td><td style="width:3px;"></td><td onmouseover="Menu_HoverStatic(this)" onmouseout="Menu_Unhover(this)" onkeyup="Menu_Key(this)" title="个人信息" id="ctl00_Menu1n5"><table cellpadding="0" cellspacing="0" border="0" width="100%">
			<tr>
				<td style="white-space:nowrap;"><a class="ctl00_Menu1_1" href="/jwc_glxt/SiteMap/Test.aspx#1"> | | 个人信息</a></td><td style="width:0;"><img src="/jwc_glxt/WebResource.axd?d=s6sDJEXkR4ATKAlea15GU041wWuBm3nobrglLZFzuMw1&amp;t=634184281466406250" alt="Expand  | | 个人信息" style="border-style:none;vertical-align:middle;" /></td>
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
		<img src="/jwc_glxt/WebResource.axd?d=yUJQtKzJ3dTFzl3sCk8qeDYeRAere3E1vcTmn8IA7uE1&amp;t=634184281466406250" alt="Scroll up" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n1ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=FzsypX_LBo2Brib1l19iCchqzkwNcjaKrZjvw-oQZGY1&amp;t=634184281466406250" alt="Scroll down" />
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
		<img src="/jwc_glxt/WebResource.axd?d=yUJQtKzJ3dTFzl3sCk8qeDYeRAere3E1vcTmn8IA7uE1&amp;t=634184281466406250" alt="Scroll up" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n2ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=FzsypX_LBo2Brib1l19iCchqzkwNcjaKrZjvw-oQZGY1&amp;t=634184281466406250" alt="Scroll down" />
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
		<img src="/jwc_glxt/WebResource.axd?d=yUJQtKzJ3dTFzl3sCk8qeDYeRAere3E1vcTmn8IA7uE1&amp;t=634184281466406250" alt="Scroll up" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n3ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=FzsypX_LBo2Brib1l19iCchqzkwNcjaKrZjvw-oQZGY1&amp;t=634184281466406250" alt="Scroll down" />
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
		<img src="/jwc_glxt/WebResource.axd?d=yUJQtKzJ3dTFzl3sCk8qeDYeRAere3E1vcTmn8IA7uE1&amp;t=634184281466406250" alt="Scroll up" />
	</div><div class="ctl00_Menu1_0" id="ctl00_Menu1n5ItemsDn" onmouseover="PopOut_Down(this)" onmouseout="PopOut_Stop(this)" style="text-align:center;">
		<img src="/jwc_glxt/WebResource.axd?d=FzsypX_LBo2Brib1l19iCchqzkwNcjaKrZjvw-oQZGY1&amp;t=634184281466406250" alt="Scroll down" />
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
    
<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWJALhmdiYAwLVtaKfCgKb2oHDAgKGzf/rAQKGzYOHCQKGzdfvCwKGzfuIAwKGzY+kCAKGzZPBAQKGzaf6BgKGzcuXDgKGzd+wBwKGzePtDALt9NH0CwLt9OWRAwLt9Mn4BQLt9N2VDQLt9OHOAgLt9PXrCwLt9JmHAwLt9K2gCALt9LHdAQLt9MX2BgKpl6yAAwKpl7C9CAKpl4SEDQKpl6ihAgLbxvmxDALExvmxDALFxvmxDALGxvmxDALHxvmxDAKTn4DADwKTn/TkBgLS+ZvbCQLM08eVCteO7Zg3ESAwXeYcTT0tnlweCj01" />
</div>

<script type="text/javascript">
<!--
var ctl00_Menu2_Data = new Object();
ctl00_Menu2_Data.disappearAfter = 500;
ctl00_Menu2_Data.horizontalOffset = 0;
ctl00_Menu2_Data.verticalOffset = 5;
var ctl00_Menu1_Data = new Object();
ctl00_Menu1_Data.disappearAfter = 500;
ctl00_Menu1_Data.horizontalOffset = 20;
ctl00_Menu1_Data.verticalOffset = 5;
// -->
</script>
</form>
</body>
</html>
