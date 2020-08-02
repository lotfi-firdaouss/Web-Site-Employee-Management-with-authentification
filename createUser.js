var parentEl=document.querySelector('#parentcreateUser'),
    divEl=document.createElement('div');

var h4El=document.createElement('h4'),
    h4Text=document.createTextNode('Opération Réussi!');
h4El.appendChild(h4Text);
h4El.classList.add('alert-heading');

var pEl=document.createElement('p'),
    pText=document.createTextNode('un utilisateur a été ajouté à la base de donné du site');
pEl.appendChild(pText);

divEl.appendChild(h4El);
divEl.appendChild(pEl);
divEl.classList.add('alert');
divEl.className+=' alert-success';
divEl.setAttribute('role',"alert");
divEl.style.width='640px';

let createUserSuccess=function()
{
    var spanEl=document.getElementById('spantext'),
        formEl=document.getElementById('main_form');
    spanEl.remove();
    formEl.remove();
    parentEl.appendChild(divEl);
}

