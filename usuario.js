function GetUser(){
    var wsh = new ActiveXObject('WScript.Shell');
    var usuario = wsh.ExpandEnvironmentStrings('%USERNAME%');
    alert(usuario);
    }