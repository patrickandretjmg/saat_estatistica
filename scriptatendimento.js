document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("myFormatendimento");

    form.addEventListener("submit", (event) => {
        event.preventDefault();  // Evita o envio normal do formulário

        const camposInvalidos = validarCampos();
        if (camposInvalidos.length > 0) {
            exibirMensagensErro(camposInvalidos);
            return;
        }

        let ajax = new XMLHttpRequest();
        let formData = new FormData(form);
        ajax.open('POST', 'controllers/FormControlleratendimento.php');
        ajax.onreadystatechange = function () {
            if (ajax.status === 200 && ajax.readyState === 4) {
                let response = JSON.parse(ajax.responseText);
                const resultSpan = document.querySelector('.result');
                resultSpan.innerHTML = response.div;

                // Adiciona ou remove a classe alert-success com base na resposta
                if (response.result === 'success') {
                    resultSpan.classList.add('alert-success');
                    form.reset();
                    // Remove a classe e a mensagem de sucesso após 3 segundos (3000 milissegundos)
                    setTimeout(() => {
                        resultSpan.classList.remove('alert-success');
                        resultSpan.innerHTML = '';
                    }, 3000);
                }
            }
        };
        ajax.send(formData);
    });
    

    const inputs = form.querySelectorAll("input, select");
    inputs.forEach((input) => {
        input.addEventListener("input", () => {
            removerMensagemErro(input);
        });
    });

    const radioButtons = document.querySelectorAll(
        'input[type="radio"][name="opcao"]'
    );
    radioButtons.forEach((radioButton) => {
        radioButton.addEventListener("change", () => {
            limparCampoInvisivel();
            atualizarCamposVisiveis();
        });
    });

    document.querySelector('#sim').setAttribute('checked', '');

    document.querySelector('#sim').dispatchEvent(new Event('change'));

    function limparCampoInvisivel() {
        const numeroInput = document.getElementById("numero");
        const motivoSelect = document.getElementById("motivo");
        const opcaoSelecionada = document.querySelector(
            'input[type="radio"][name="opcao"]:checked'
        ).value;

        if (opcaoSelecionada === "sim") {
            motivoSelect.value = "";
            removerMensagemErro(motivoSelect);
        } else {
            numeroInput.value = "";
            removerMensagemErro(numeroInput);
        }
    }

    let cpfCnpj = document.getElementById("cpfCnpj");

    if (cpfCnpj) {
        cpfCnpj.addEventListener('input', function () {
            let value = cpfCnpj.value.replace(/\D/g, '');

            if (value.length <= 11) {
                VMasker(cpfCnpj).maskPattern('999.999.999-999');
                cpfCnpj.addEventListener('input', inputHandler.bind(undefined, '999.999.999-999', 14), false);
            } else {
                VMasker(cpfCnpj).maskPattern('99.999.999/9999-99');
                cpfCnpj.addEventListener('input', inputHandler.bind(undefined, '99.999.999/9999-99', 18), false);
            }
        }, false);
    }

    let rcpfCnpj = document.getElementById("rcpfCnpj");

    if (rcpfCnpj) {
        rcpfCnpj.addEventListener('input', function () {
            let value = rcpfCnpj.value.replace(/\D/g, '');

            if (value.length <= 11) {
                VMasker(rcpfCnpj).maskPattern('999.999.999-999');
                rcpfCnpj.addEventListener('input', inputHandler.bind(undefined, '999.999.999-999', 14), false);
            } else {
                VMasker(rcpfCnpj).maskPattern('99.999.999/9999-99');
               rcpfCnpj.addEventListener('input', inputHandler.bind(undefined, '99.999.999/9999-99', 18), false);
            }
        }, false);
    }

    function atualizarCamposVisiveis() {
        const opcaoSelecionada = document.querySelector(
            'input[type="radio"][name="opcao"]:checked'
        ).value;

        const numeroInput = document.getElementById("numero");
        const motivoSelect = document.getElementById("motivo");
        const labelNumero = document.querySelector('label[for="numero"]');
        const labelMotivo = document.querySelector('label[for="motivo"]');

        if (opcaoSelecionada === "sim") {
            numeroInput.style.display = "block";
            motivoSelect.style.display = "none";
            labelNumero.style.display = "block";
            labelMotivo.style.display = "none";
        } else {
            numeroInput.style.display = "none";
            motivoSelect.style.display = "block";
            labelNumero.style.display = "none";
            labelMotivo.style.display = "block";
        }

        document.addEventListener("DOMContentLoaded", () => {
    const numeroInput = document.getElementById("numero");

    numeroInput.addEventListener("input", formatarNumero);

    function formatarNumero() {
        let valorAtual = numeroInput.value.replace(/\D/g, ""); // Remove caracteres não numéricos
        let formatoMascara = "XXXXXXX-XX.XXXX.X.XX.XXXX";
        let resultado = "";

        let arrayNumeros = valorAtual.split("");
        let tamanhoDoNumero = arrayNumeros.length;

        for (let i = 0; i < formatoMascara.length; i++) {
            if (formatoMascara[i] === "X") {
                resultado += arrayNumeros[i] || "_"; // Substitui por "_" se não houver mais dígitos
            } else if (formatoMascara[i] === ".") {
                resultado += ".";
            } else {
                resultado += formatoMascara[i];
            }
        }

        if (tamanhoDoNumero < formatoMascara.length) {
            resultado += formatoMascara.slice(tamanhoDoNumero);
        }

        numeroInput.value = resultado;
    }
});


        
        
    }

    function validarCampos() {
        const camposInvalidos = [];

        const colaboradores = document.getElementById("colaboradores");
        const autor = document.getElementById("autor");
        const reu = document.getElementById("reu");
        const cpf = document.getElementById("cpfCnpj"); // Corrigido para cpfCnpj
        const data = document.getElementById("data");

        if (colaboradores.value === "") {
            camposInvalidos.push(colaboradores);
        }

        if (autor.value === "") {
            camposInvalidos.push(autor);
        }

        if (reu.value === "") {
            camposInvalidos.push(reu);
        }

        if (cpf.value === "") {
            camposInvalidos.push(cpf);
        }

        const dataValue = data.value;
        if (!dataValue || !isValidDate(dataValue)) {
            camposInvalidos.push(data);
        }

        const numeroInput = document.getElementById("numero");
        const motivoSelect = document.getElementById("motivo");
        const opcaoSelecionada = document.querySelector(
            'input[type="radio"][name="opcao"]:checked'
        ).value;

        if (opcaoSelecionada === "sim" && numeroInput.style.display !== "none") {
            if (numeroInput.value === "") {
                camposInvalidos.push(numeroInput);
            }
        } else if (
            opcaoSelecionada === "nao" &&
            motivoSelect.style.display !== "none"
        ) {
            if (motivoSelect.value === "") {
                camposInvalidos.push(motivoSelect);
            }
        }

        return camposInvalidos;
    }

    function isValidDate(dateString) {
        const regex = /^\d{4}-\d{2}-\d{2}$/;
        return regex.test(dateString) && !isNaN(Date.parse(dateString));
    }

    function exibirMensagensErro(camposInvalidos) {
        camposInvalidos.forEach((input) => {
            if (input === document.getElementById("data")) {
                exibirMensagemErro(
                    input,
                    "Por favor, selecione uma data válida (AAAA-MM-DD)."
                );
            } else {
                exibirMensagemErro(input, "Por favor, preencha este campo.");
            }
        });
    }

    function exibirMensagemErro(input, mensagem) {
        let mensagemErro = input.nextElementSibling;
        if (!mensagemErro || !mensagemErro.classList.contains("error-message")) {
            mensagemErro = document.createElement("div");
            mensagemErro.className = "error-message";
            input.parentNode.insertBefore(mensagemErro, input.nextSibling);
        }
        mensagemErro.innerHTML = mensagem;
        input.classList.add("error-input");
    }

    function removerMensagemErro(input) {
        const mensagemErro = input.nextElementSibling;
        if (mensagemErro && mensagemErro.classList.contains("error-message")) {
            mensagemErro.parentNode.removeChild(mensagemErro);
            input.classList.remove("error-input");
        }
    }
});
