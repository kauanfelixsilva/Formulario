// Máscara de CPF
const cpf = document.getElementById("cpf");

cpf.addEventListener("input", function () {
    let valor = cpf.value.replace(/\D/g, "");

    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2");
    valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    cpf.value = valor;
});


// Máscara de telefone
const telefone = document.getElementById("telefone");

telefone.addEventListener("input", function () {
    let valor = telefone.value.replace(/\D/g, "");

    valor = valor.replace(/^(\d{2})(\d)/, "($1) $2");
    valor = valor.replace(/(\d{5})(\d)/, "$1-$2");

    telefone.value = valor;
});


// Máscara de CEP
const cep = document.getElementById("cep");

cep.addEventListener("input", function () {
    let valor = cep.value.replace(/\D/g, "");

    valor = valor.replace(/^(\d{5})(\d)/, "$1-$2");

    cep.value = valor;
});