function funcCadastrar(){
    let nome = document.getElementById('nome').value;
    let cpf = document.getElementById('cpf').value;
    let contato = document.getElementById('contato').value;
    let senha = document.getElementById('senha').value;

    document.querySelector('p').innerHTML = nome;

    fetch('https://localhost/SistemaDeAgendamentos/SistemaPessoaKW2/PHP/modeloPessoa.php',{
        method: "POST",
        headers:{
            'Content-Type': 'application/json',
        },
        body:JSON.stringify({
            Nome : nome,
            Cpf : cpf,
            Contato : contato,
            Senha : senha
        }),
    })
    .then(response => response.json())
    .then(data =>{JSON.stringify({
        Logado : true,
        Nome : data.nome
    })})
}

function funcConsultarInformacoesCadastrais(){
    let cpf = document.getElementById('cpf').value;
    
    fetch("https://localhost/SistemaDeAgendamentos/SistemaPessoaKW2/PHP/modeloPessoa.php", {
        method: "GET",
        headers:{
            'Content-Type' : 'application/json'
        },
        body:JSON.stringify({
            Cpf :cpf
        })

    })
    .then(response => response.json())
    .then(data =>{JSON.stringify({
        Logado: true,
        id : data.id
    })})
}

function funcAtualizar(){
    let nome;
    let contato;
    fetch("https://localhost/SistemaDeAgendamentos/SistemaPessoaKW2/PHP/modeloPessoa.php",{
        method: "PUT",
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify({
            Nome: nome,
            Contato: contato
        })
    })
}
