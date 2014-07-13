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
        xmlHttp.open("POST", '../tech_diagram/handler.php', true);
        
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
          
            var Pavg=document.getElementById("Pavg");
            Pavg.innerHTML=valueArray.item(0).firstChild.data;

            var Qavg=document.getElementById("Qavg");
            Qavg.innerHTML=valueArray.item(1).firstChild.data;

            var Fsys=document.getElementById("Fsys");
            Fsys.innerHTML=valueArray.item(2).firstChild.data;

            var W51_ad=document.getElementById("W51_ad");
            W51_ad.innerHTML=valueArray.item(3).firstChild.data;

            var Uavg=document.getElementById("Uavg");
            Uavg.innerHTML=valueArray.item(4).firstChild.data;

            var Iavg=document.getElementById("Iavg");
            Iavg.innerHTML=valueArray.item(5).firstChild.data;

            var t1TB1=document.getElementById("t1TB1");
            t1TB1.innerHTML=valueArray.item(6).firstChild.data;

            var t2TB1=document.getElementById("t2TB1");
            t2TB1.innerHTML=valueArray.item(7).firstChild.data;

            var NSTB1=document.getElementById("NSTB1");
            NSTB1.innerHTML=valueArray.item(8).firstChild.data;

            var Qo=document.getElementById("Qo");
            Qo.innerHTML=valueArray.item(9).firstChild.data;

            var t3=document.getElementById("t3");
            t3.innerHTML=valueArray.item(10).firstChild.data;

            var t4=document.getElementById("t4");
            t4.innerHTML=valueArray.item(11).firstChild.data;

            var Tamb=document.getElementById("Tamb");
            Tamb.innerHTML=valueArray.item(12).firstChild.data;

            
        }
        else
            alert("������ ��� ��������� � �������. ")+xmlHttp.statusText;
    }
}
