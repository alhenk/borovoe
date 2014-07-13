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
        xmlHttp.open("POST", '../handler_main.php', true);
        
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
            
        }
        else
            alert("������ ��� ��������� � �������. ")+xmlHttp.statusText;
    }
}
