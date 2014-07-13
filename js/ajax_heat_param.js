// ��� � ���� ������ XmlHttpRequest
var xmlHttp=createXmlHttpRequest();


// ������� ��� getElementById
function gebi(id) {
    return document.getElementById(id);
}

// ������� �������������� ������� ������ XmlHttpRequest
function createXmlHttpRequest() {
    var xmlHttp;
    try {
      if(window.ActiveXObject) // ��� IE
          xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      else // ��� ��������� ���������
          xmlHttp=new XMLHttpRequest();
    }
    catch(e) {
        xmlHttp=false;
        alert("������ XMLHttpRequest �� ������!");
    }
    return xmlHttp;
}

var params = 'jjj'+Math.random();

// ���������� �� ����� �� ������ "��������� ���"
function getNewValues() {

    // ���������, �������� �� ������ XMLHttpRequest ������� �����
    if(xmlHttp.readyState==4 || xmlHttp.readyState==0) {

        // ������� ������� XMLHttpRequest ���� � ��� �� ������ ����������
        xmlHttp.open("POST", '../heat_param/handler_heat_param.php', true);
        
        // ������� ������� XMLHttpRequest ����� ������� �� ������ �������� ��� ��������� ������ �������
        xmlHttp.onreadystatechange=handleResponse;

        // �������� ����������� ������ �������
        xmlHttp.send(params);
    }
}

var timerMulti = window.setInterval("getNewValues();", 5000); 

// ���������� ��� ��������� ������� ������� XMLHttpRequest
function handleResponse() {
    // ��������� �� readyState ��������� �� ����������
    if(xmlHttp.readyState==4) {
        // ��������� �� status ���������� ����������
        if(xmlHttp.status==200) {
           // read the message from the server 
              var xmlResponse = xmlHttp.responseXML;

           // catching potential errors with IE and Opera 
              if (!xmlResponse || !xmlResponse.documentElement) 
              throw("Invalid XML structure:\n" + xmlHttp.responseText); 
           // catching potential errors with Firefox 
              var rootNodeName = xmlResponse.documentElement.nodeName; 
              if (rootNodeName == "parsererror")  
              throw("Invalid XML structure:\n" + xmlHttp.responseText); 
 
           // obtain the XML's document element 
              xmlRoot = xmlResponse.documentElement;
      
 // obtain timestamp  
  timeTag = xmlRoot.getElementsByTagName("timestamp");


  // obtain arrays with variable values  
  valueArray = xmlRoot.getElementsByTagName("value");

            var current_date=document.getElementById("current_date");
            current_date.innerHTML=timeTag.item(0).firstChild.data;

            var current_time=document.getElementById("current_time");
            current_time.innerHTML=timeTag.item(1).firstChild.data;
          
            var t1TB1=document.getElementById("t1TB1");  //line 40
            t1TB1.innerHTML=valueArray.item(0).firstChild.data;

            var t2TB1=document.getElementById("t2TB1"); // line 41
            t2TB1.innerHTML=valueArray.item(1).firstChild.data;
			
			var dtTB1=document.getElementById("dtTB1"); // line 45
            dtTB1.innerHTML=valueArray.item(2).firstChild.data;

            var t3=document.getElementById("t3");       // line 55
            t3.innerHTML=valueArray.item(3).firstChild.data;

            var t4=document.getElementById("t4");       // line 56
            t4.innerHTML=valueArray.item(4).firstChild.data;

            var Tamb=document.getElementById("Tamb");   // line 58
            Tamb.innerHTML=valueArray.item(5).firstChild.data;
        }
        else
            alert("������ ��� ��������� � �������. ")+xmlHttp.statusText;
    }
}

