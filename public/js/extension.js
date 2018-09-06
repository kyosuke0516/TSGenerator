function selectBtn_click(){
  var name = document.getElementById('adduser').value;
  if(name != 'dammy'){
    var appendElement = document.getElementById('userlist');
    var li = document.createElement('li');
    li.innerHTML = name;
    var form = document.getElementById('sender');
    var hidden = document.createElement('input');
    hidden.type = 'hidden';
    hidden.name = 'name[]';
    hidden.value = name;
    appendElement.appendChild(li);
    form.appendChild(hidden);
  }

  var count = appendElement.childElementCount;
  if(count > 1){
    var generateBtn = document.getElementById('generateBtn');
    generateBtn.type = 'submit';
  }
}
