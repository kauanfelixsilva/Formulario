// Máscara de CPF
// PASSO 1: Pegar o campo de CPF pelo id
const cpf = document.getElementById("cpf");

// PASSO 2: A cada digitação, aplicar a máscara 000.000.000-00
cpf.addEventListener("input", function () {
    // Remover tudo que não for número
    let valor = cpf.value.replace(/\D/g, "");

    // Colocar os pontos e o traço nos lugares certos
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    cpf.value = valor;
});


// Máscara de telefone
// PASSO 3: Pegar o campo de telefone pelo id
const telefone = document.getElementById("telefone");

// PASSO 4: A cada digitação, aplicar a máscara (00) 00000-0000
telefone.addEventListener("input", function () {
    // Remover tudo que não for número
    let valor = telefone.value.replace(/\D/g, "");

    // Colocar parênteses, espaço e traço nos lugares certos
    valor = valor.replace(/^(\d{2})(\d)/, "($1) $2");
    valor = valor.replace(/(\d{5})(\d)/, "$1-$2");

    telefone.value = valor;
});


// Máscara de CEP
// PASSO 5: Pegar o campo de CEP pelo id
const cep = document.getElementById("cep");

// PASSO 6: A cada digitação, aplicar a máscara 00000-000
cep.addEventListener("input", function () {
    // Remover tudo que não for número
    let valor = cep.value.replace(/\D/g, "");

    // Colocar o traço no lugar certo
    valor = valor.replace(/^(\d{5})(\d)/, "$1-$2");

    cep.value = valor;
});