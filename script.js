// https://www.w3schools.com/js/js_htmldom_document.asp
// https://developer.mozilla.org/pt-BR/docs/Web/API/Window

// ----------- FORMULÁRIO -----------

function onSubmit(){
    let nome = document.getElementsByName('nome')[0].value;
    let email = document.getElementsByName('email')[0].value;
    let password = document.getElementsByName('password')[0].value;
    let concordo = document.getElementsByName('terms')[0].checked;
    let estado = document.getElementsByName('state')[0].value;
    let sexo = document.getElementsByName('sexo')[0].value;
    let descricao = document.getElementsByName('description')[0].value;

    console.log(nome);
    console.log(email);
    console.log(password);
    console.log(concordo);
    console.log(estado);
    console.log(sexo);
    console.log(descricao);

    // return false;
    
}

