// Это и есть объект XmlHttpRequest
var xmlHttp=createXmlHttpRequest();


// синоним для getElementById
function gebi(id) {
    return document.getElementById(id);
}

// функция кроссбраузерно создает объект XmlHttpRequest
function createXmlHttpRequest() {
    var xmlHttp;
    try {
      if(window.ActiveXObject) // для IE
          xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      else // для остальных браузеров
          xmlHttp=new XMLHttpRequest();
    }
    catch(e) {
        xmlHttp=false;
        alert("Объект XMLHttpRequest не создан!");
    }
    return xmlHttp;
}

var params = 'jjj'+Math.random();

// вызывается по клику на кнопке "Проверить имя"
function getNewValues() {

    // проверяем, завершил ли объект XMLHttpRequest прошлый вызов
    if(xmlHttp.readyState==4 || xmlHttp.readyState==0) {

        // говорим объекту XMLHttpRequest куда и как он должен обратиться
        xmlHttp.open("POST", '../electr_param/handler_electr_param.php', true);
        
        // говорим объекту XMLHttpRequest какую функцию он должен вызывать при изменении своего статуса
        xmlHttp.onreadystatechange=handleResponse;

        // посылаем асинхронный запрос серверу
        xmlHttp.send(params);
    }
}

var timerMulti = window.setInterval("getNewValues();", 5000); 

// вызывается при изменении статуса объекта XMLHttpRequest
function handleResponse() {
    // проверяем по readyState завершена ли транзакция
    if(xmlHttp.readyState==4) {
        // проверяем по status успешность транзакции
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
			
            var Fsys=document.getElementById("Fsys");
            Fsys.innerHTML=valueArray.item(0).firstChild.data;
			
            var Uavg=document.getElementById("Uavg");
            Uavg.innerHTML=valueArray.item(1).firstChild.data;


            var Iavg=document.getElementById("Iavg");
            Iavg.innerHTML=valueArray.item(2).firstChild.data;

            var Tamb=document.getElementById("Tamb");   // line 58
            Tamb.innerHTML=valueArray.item(3).firstChild.data;
            
        }
        else
            alert("Ошибка при обращении к серверу. ")+xmlHttp.statusText;
    }
}
